<?php

class UsersController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /users
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /users/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /users
	 *
	 * @return Response
	 */
	public function store()
	{
		$user = new User;
		$data = Input::all();
		$validator = Validator::make(
			$data,
		    [
		    	'email' => 'required|email|unique:users',
		    	'first_name' => 'required',
		    	'last_name' => 'required',
		    	'password' => 'required|min:6'
	    	]
		);
		if ($validator->fails() || (!$user->telephone && $user->mobile)) {
			return Redirect::back()->withErrors($validator->messages());
		}
		$user->first_name = Input::get('first_name');
		$user->last_name = Input::get('last_name');
		$user->mobile = Input::get('mobile');
		$user->telephone = Input::get('telephone');
		$user->password = Hash::make(Input::get('password'));
		$user->email = Input::get('email');
		$user->save();
		return Redirect::login('/');
	}

	/**
	 * Display the specified resource.
	 * GET /users/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /users/{id}/edit
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
	 * PUT /users/{id}
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
	 * DELETE /users/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}