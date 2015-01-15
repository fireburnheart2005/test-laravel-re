<?php

class ListingsController extends \BaseController {

	public function __construct() {
        $this->beforeFilter('auth', array('except' => ['index', 'show']));
    }

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$cityList = City::all();
		$categoryList = Category::all();
		$subcategoryList = Subcategory::all();
		$cities = [null => '---Chọn---'];
		$categories = [null => '---Chọn---'];
		$subcategories = [null => '---Chọn---'];
		foreach ($cityList as $city) {
			$cities[$city->id] = $city->name;
		}
		foreach ($categoryList as $category) {
			$categories[$category->id] = $category->name;
		}
		foreach ($subcategoryList as $subcategory) {
			$subcategories[$subcategory->id] = $subcategory->name;
		}
		return View::make('listings.create', [
			'cities' => $cities,
			'categories' => $categories,
			'categoryList' => $categoryList,
			'subcategories' => $subcategories
		]);
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$data = Input::only('title', 'description', 'category_id', 'subcategory_id', 'city_id'
			, 'district_id', 'ward_id', 'address', 'price', 'square'
			, 'legal_document', 'floors', 'bedrooms', 'bathrooms', 'contact_name'
			, 'contact_mobile', 'contact_telephone', 'contact_email', 'contact_note');
		// generate slug URL
		$data['slug'] = StringHelper::generate_slug(Input::get('title'));
		$data['transaction_type'] = Input::get('transaction_type') == 'sale' ? 'sale' : 'rent';
		// generate unique slug URL
		function unifySlug(&$data, $slug, $i) {
			$listing = Listing::where('slug', '=', $slug)->count();
			if ($listing) {
				$i++;
				$slug = $data['slug']."-$i";
				unifySlug($data, $slug, $i);
			} elseif ($i != 0) {
				$data['slug'] .= "-$i";
			}
		}
		unifySlug($data, $data['slug'], 0);
		$data['status'] = 'pending';

		// move temprary images to storage directory
		$images = Input::get('image');
		$rules =  array(
	        'title' => 'required',
	        'slug' => 'required|unique:listings',
	        'description' => 'required',
	        'category_id' => 'required|exists:categories,id',
	        'subcategory_id' => 'required|exists:subcategories,id',
	        'price' => 'required|integer',
	        'square' => 'required|integer',
	        'legal_document' => 'required|in:"Sổ đỏ/Sổ hồng","Giấy tờ hợp lệ","GP Xây dựng","GP Kinh doanh"',
	        'city_id' => 'required|exists:cities,id',
	        'district_id' => 'required|exists:districts,id',
	        'ward_id' => 'required|exists:wards,id',
	        'contact_name' => 'required'
	    );
	    $validator = Validator::make($data, $rules);
	    if ($validator->passes()) {
			$listing = Listing::create($data);
			try {
				foreach ($images as $name) {
					if ($name && ($name != '')) {
						rename(app_path().'/../public/tmp/'.$name, app_path().'/../public/assets/'.$name);
						Image::create([
							'name' => $name,
							'title' => $listing->title,
							'listing_id' => $listing->id
						]);
					}
				}
			} catch(Exception $e) {
				$listing->delete();
				return Redirect::back()->withErrors(['Đã có lỗi trong quá trình upload ảnh!']);
			}
			return Redirect::to('/account')->withMessages(['Bất động sản của bạn đã được lưu lại và sẽ được hiển thị sau khi được kiểm duyệt.']);
	    }
	    return Redirect::back()->withErrors($validator->messages());
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($slug)
	{
		return View::make('listings.show', ['listing' => Listing::where('slug', $slug)->first()]);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
