<?php

namespace Metadeck\ClientManager\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;

class Testimonial extends Model implements HasMedia
{
    use HasMediaTrait;

    protected $fillable = [
        'employee_name',
        'employee_position',
        'content',
    ];

    /**
     * The client that this testimonial belongs to
     */
    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    /**
    * Register a media collection for the featured Case Study image
     */
    public function registerMediaCollections()
    {
        $this->addMediaCollection('person_image')->singleFile();
    }
}
