<?php

class Listing extends Eloquent {

	/**
	* The database table used by the model.
	*
	* @var string
	*/
  	protected $table = 'listings';

  	protected $guarded = [];

    public function images()
    {
        return $this->hasMany('Image');
    }
}
