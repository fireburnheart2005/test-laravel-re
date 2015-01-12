<?php

class Property extends Eloquent {

  /**
   * The database table used by the model.
   *
   * @var string
   */
  protected $table = 'properties';
  protected $guarded = ['_token', 'image'];
}
