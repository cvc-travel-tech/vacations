<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class PackageOption extends Model 
{

    protected $table = 'package_options';
    public $timestamps = true;
    protected $fillable = array(
        'name', 
        'price',
        'package_id'
        );


    
    public function package()
    {
        return $this->belongsTo('App\Package', 'package_id');
    }

}
