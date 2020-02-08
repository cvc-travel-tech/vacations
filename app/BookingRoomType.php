<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookingRoomType extends Model
{

    protected $table = 'booking_room_types';

    public $timestamps = true;

    protected $fillable = array(
        'booking_id',
        'room_type',
    );


    public function booking(){
        return $this->belongsTo('App\Booking','booking_id');
    }



}
