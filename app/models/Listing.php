<?php

class Listing extends Eloquent {

    /**
    * The database table used by the model.
    *
    * @var string
    */
  	protected $table = 'listings';

  	protected $guarded = [];

    // Eloquent relationship
    public function images()
    {
        return $this->hasMany('Image');
    }

    public function city()
    {
        return $this->belongsTo('City');
    }

    public function district()
    {
        return $this->belongsTo('District');
    }

    public function ward()
    {
        return $this->belongsTo('Ward');
    }
}
