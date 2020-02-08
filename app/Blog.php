<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{


    protected $table = 'blogs';
    public $timestamps = true;
    protected $fillable = array('title', 'description', 'mainImage', 'innerImage');




  public function mainImage()
    {
        return $this->belongsTo('App\Images', 'mainImage');
    }
}
