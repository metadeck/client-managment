<?php

namespace Metadeck\ClientManager\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\Image\Exceptions\InvalidManipulation;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\Models\Media;

class Client extends Model implements HasMedia
{
    use HasMediaTrait;

    protected $table = "client_manager_clients";

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
     * @throws InvalidManipulation
     */
    public function registerMediaConversions(Media $media = null)
    {
        $this->addMediaConversion('thumb')->width(130)->height(130);
    }
}
