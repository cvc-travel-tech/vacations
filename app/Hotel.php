<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Hotel extends Model
{
    use HasSlug;

    protected $table = 'hotels';
    public $timestamps = true;
    protected $fillable = array('name', 'images', 'email', 'phone', 'overview', 'destination_id');
    protected $casts = [
        'images' => 'array', // Will convarted to (Array)
    ];

    public function Destination()
    {
        return $this->belongsTo('App\Destination', 'destination_id');
    }

    public function Packages()
    {
        return $this->belongsToMany('App\Package', 'package_id');
    }


    public function Img()
    {
        return $this->belongsTo('App\Images', 'images');
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
        $meta = SEO::where('object_id', $this->id)->where('object_model', 'Hotel')->first();

        if (!empty($meta)) {
            $meta = $meta->toArray();
        }
        $meta['slug'] = $this->slug;
        // $meta['full_url'] = $this->getDetailUrl();
        $meta['service_title'] = $this->name;
        return $meta;
    }
}
