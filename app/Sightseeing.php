<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Sightseeing extends Model implements HasMedia
{
    use HasMediaTrait, HasSlug;

    protected $table = 'sightseeings';
    public $timestamps = true;
    protected $fillable = array('description', 'name',  'img', 'destination_id');
    // protected $casts = [
    //     'locations' => 'array', // Will convarted to (Array)
    // ];

    public function Img()
    {
        return $this->belongsTo('App\Images', 'img');
    }

    /**
     * Get the options for generating the slug.
     */
    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->saveSlugsTo('slug')
            ->usingSeparator('-');
    }

    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }


    public function getSeoMeta()
    {
        $meta = SEO::where('object_id', $this->id)->where('object_model', 'Sightseeing')->first();
        if (!empty($meta)) {
            $meta = $meta->toArray();
        }
        $meta['slug'] = $this->slug;
        // $meta['full_url'] = $this->getDetailUrl();
        $meta['service_title'] = $this->name;
        return $meta;
    }
}
