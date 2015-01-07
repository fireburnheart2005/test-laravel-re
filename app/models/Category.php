<?php

class Category extends \Eloquent {
	protected $fillable = [];
    public function subcategories() {
        return $this->hasMany('Subcategory');
    }
}