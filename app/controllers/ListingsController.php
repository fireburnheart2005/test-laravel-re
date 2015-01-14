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
		// generate slug URL
		$data = Input::all();
		$data['slug'] = StringHelper::generate_slug(Input::get('title'));

		// move temprary images to storage directory
		$images = Input::get('image');
		$listing = Listing::create($data);
		try {
			foreach ($images as $name) {
				if ($name && ($name != '')) {
					rename(app_path().'/../public/tmp/'.$name, app_path().'/../public/assets/'.$name);
					Image::create([
						'name' => $name,
						'title' => $listing->name,
						'listing_id' => $listing->id
					]);
				}
			}
		} catch(Exception $e) {
			$listing->status = 'error';
			return Redirect::back()->withError('Đã có lỗi trong quá trình upload ảnh!');
		}
		return Redirect::to('/account')->withMessage('Bất động sản của bạn đã được lưu lại và sẽ được hiển thị sau khi được kiểm duyệt.');
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
