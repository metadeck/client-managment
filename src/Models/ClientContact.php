<?php

namespace Metadeck\ClientManager\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\Models\Media;

class ClientContact extends Model implements HasMedia
{
    use HasMediaTrait;

    protected $table = "client_manager_client_contacts";

    protected $fillable = [
        'name'
    ];

    /**
     * The tesimonials from this client
     *
     * @return HasMany
     */
    public function testimonials(): HasMany
    {
        return $this->hasMany(Testimonial::class);
    }

    /**
     * Register a media collection for the user profile image
     */
    public function registerMediaCollections()
    {
        $this->addMediaCollection('client_logo')->singleFile();
    }

    /**
     * Register the conversions to perform on the media items
     *
     * @param Media|null $media
     * @throws \Spatie\Image\Exceptions\InvalidManipulation
     */
    public function registerMediaConversions(Media $media = null)
    {
        $this->addMediaConversion('thumb')->width(130)->height(130);
    }
}
