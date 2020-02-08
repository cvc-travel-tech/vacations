<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model 
{

    protected $table = 'pages';
    public $timestamps = true;
    protected $fillable = array('slug', 'name', 'templete_id');

    public function Template()
    {
        return $this->belongsTo('App\Template', 'template_id');
    }

}