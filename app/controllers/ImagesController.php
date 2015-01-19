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
		$baseName = basename($_FILES['image']['name']);
		$extension = pathinfo($baseName, PATHINFO_EXTENSION);
		$targetDir = app_path().'/../public/tmp';
		$targetBaseName = date('Y_m_d_').time().'_'.str_random(5);
	    if ($_FILES['image']['size'] > 500000) {
		    return 'Sorry, your file is too large.';
		}
		if($extension != 'jpg' && $extension != 'png' && $extension != 'jpeg') {
		    return "Sorry, only JPG, JPEG and PNG files are allowed.";
		}
		// Check if image file is a actual image or fake image
	    $check = getimagesize($_FILES['image']['tmp_name']);
	    if($check !== false) {
			// move uploaded image
			move_uploaded_file($_FILES['image']['tmp_name'], $targetDir.'/'.$targetBaseName.'.'.$extension);
			// create list image from copied file
			$image = new Gmagick($targetDir.'/'.$targetBaseName.'.'.$extension);
			$image->thumbnailImage(120, 90);
			try {
				$image->writeImage($targetDir.'/'.$targetBaseName.'_list.'.$extension);
				return Response::json(['basename' => $targetBaseName, 'extension' => $extension]);
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
	 * DELETE /images/tmp/{filename}
	 *
	 * @param  int  $filename
	 * @return Response
	 */
	public function destroyTemp($filename)
	{
		$extension = pathinfo($filename, PATHINFO_EXTENSION);
		$basename = rtrim($filename, '.'.$extension);
		foreach (glob(app_path().'/../public/tmp/'.$basename.'*') as $file) {
		   unlink($file);
		}
	}

}