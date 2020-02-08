<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{

    protected $table = 'settings';
    public $timestamps = true;
    protected $fillable = array('name', 'group', 'val');
    protected $casts = [
        'val' => 'array', // Will convarted to (Array)
    ];

}
