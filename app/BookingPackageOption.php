<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookingPackageOption extends Model
{

    protected $table = 'booking_options';

    public $timestamps = true;

    protected $fillable = array(
        'booking_id',
        'package_option_id',
        'no_of_pax',
        'price'
    );


    public function booking()
    {
        return $this->belongsTo('App\Booking', 'booking_id');
    }

    public function package_option()
    {
        return $this->belongsTo('App\PackageOption', 'package_option_id');
    }

}


