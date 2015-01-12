<?php

class PropertiesController extends \BaseController {

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
		return View::make('properties.create', [
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
		// save title
		// save catalog
		// save subcatalog
		// save location
		// IMAGES
		// move temprary images to storage directory
		$images = Input::get('image');

		// foreach ($images as $name) {
			// rename(app_path().'/../public/tmp/'.$name, app_path().'/../public/assets/'.$name);
		// }
		Property::create(Input::all());
		return 3;
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($slug)
	{
		return View::make('properties.show', ['property' => Property::where('slug', $slug)->first()]);
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
