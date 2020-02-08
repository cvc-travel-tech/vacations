<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class PackagePrice extends Model 
{

    protected $table = 'package_prices';
    public $timestamps = true;
    protected $fillable = array(
        'package_id', 
        'date',
        'end_date',
        'solo',
        'p_p',
        'three_person', 
        'sgl',
        'hotel_solo', 
        'hotel_p_p', 
        'hotel_3_person', 
        'hotel_sgl'
        );


    
    public function package()
    {
        return $this->belongsTo('App\Package', 'package_id');
    }

}
