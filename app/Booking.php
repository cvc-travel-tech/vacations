<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{

    protected $table = 'bookings';

    public $timestamps = true;

    protected $fillable = array(
        'gender',
        'language',
        'email',
        'phone',
        'special_requirements',
        'payment_method',
        'no_of_adults',
        'no_of_rooms',
        'no_of_children',
        'status',
        'total_price',
        'package_id',
        'verification_code',
        'is_verified',
        'created_at	',
        'res_at'
    );

    public function package()
    {
        return $this->belongsTo('App\Package', 'package_id');
    }

    public function booking_package_options()
    {
        return $this->hasMany('App\BookingPackageOption', 'booking_id');
    }

    public function booking_room_types()
    {
        return $this->hasMany('App\BookingRoomType', 'booking_id');
    }


}
