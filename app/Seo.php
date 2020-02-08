<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;

class Seo extends Model implements HasMedia
{
    use HasMediaTrait;
    protected $table = 'seo';
    public $timestamps = true;
    protected $fillable = array('object_id', 'object_model',  'seo_index', 'seo_title', 'seo_desc', 'seo_image', 'seo_share');
    protected $casts = [
        'seo_share' => 'array', // Will convarted to (Array)
    ];
}
