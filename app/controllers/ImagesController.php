<?php

class ImagesController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /images
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /images/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /images
	 *
	 * @return Response
	 */
	public function storeTemp()
	{
		$targetDir = app_path().'/../public/tmp';
		$fileName = basename($_FILES['image']['name']);
		$imageFileType = pathinfo($fileName, PATHINFO_EXTENSION);
		$targetFileName = date('Y_m_d_').time().'_'.str_random(10).'.'.$imageFileType;
		$targetFile = $targetDir.'/'.$targetFileName;
	    if ($_FILES['image']['size'] > 500000) {
		    return 'Sorry, your file is too large.';
		}
		if($imageFileType != 'jpg' && $imageFileType != 'png' && $imageFileType != 'jpeg') {
		    return "Sorry, only JPG, JPEG and PNG files are allowed.";
		}
		// Check if image file is a actual image or fake image
	    $check = getimagesize($_FILES['image']['tmp_name']);
	    if($check !== false) {
        	$image = new Gmagick($_FILES['image']['tmp_name']);
			$image->thumbnailImage(304, 228);
			try {
				$image->writeImage($targetFile);
				return $targetFileName;
			} catch (Exception $e) {
                return 'Sorry, there was an error uploading your file.';
			}
	    } else {
	        return 'File is not an image.';
	    }
	}

	/**
	 * Display the specified resource.
	 * GET /images/{id}
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
	 * GET /images/{id}/edit
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
	 * PUT /images/{id}
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
	 * DELETE /images/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /images/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroyTemp($id)
	{
		unlink(app_path().'/../public/tmp/'.$id);
	}

}