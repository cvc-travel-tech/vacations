<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Template extends Model 
{

    protected $table = 'templates';
    public $timestamps = true;
    protected $fillable = array('title', 'content');

    public function Pages()
    {
        return $this->hasMany('App\Page', 'template_id');
    }

}