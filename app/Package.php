<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use App\Seo;

class Package extends Model 
{
    use HasSlug;

    protected $table = 'packages';
    public $timestamps = true;
    protected $fillable = array(
        'name', 
        'duration',
        'overview',
        'images',
        'itinerary', 
        'inclusion',
        'trip_map', 
        'client_reviews', 
        'options', 
        'flight_prices', 
        'trip_video', 
        'type', 
        'slug',
        'daly'
        );
    protected $casts = [
        'images' => 'array', // Will convarted to (Array)
        'overview' => 'array', // Will convarted to (Array)
        'itinerary' => 'array', // Will convarted to (Array)
        'inclusion' => 'array', // Will convarted to (Array)
        'options' => 'array', // Will convarted to (Array)
        'daly' => 'array', // Will convarted to (Array)

    ];


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
        $meta = Seo::where('object_id', $this->id)->where('object_model', 'Package')->first();

        if (!empty($meta)) {
            $meta = $meta->toArray();
        }
        $meta['slug'] = $this->slug;
        // $meta['full_url'] = $this->getDetailUrl();
        $meta['service_title'] = $this->name;
        return $meta;
    }

    public function package_prices()
    {
        return $this->hasMany('App\PackagePrice', 'package_id');
    }

       public function package_options()
    {
        return $this->hasMany('App\PackageOption', 'package_id');
    }

    
    // public function Destinations()
    // {
    //     return $this->belongsToMany('App\Destination', 'destination_id');
    // }

    // public function Hotels()
    // {
    //     return $this->belongsToMany('App\Hotel', 'hotel_id');
    // }

}
