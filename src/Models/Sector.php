<?php

namespace Metadeck\ClientManager\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;

class Sector extends Model implements HasMedia
{
    use HasMediaTrait;

    protected $table = "client_manager_sectors";

    protected $fillable = [
        'name',
        'description'
    ];

    /**
     * Clients attached to this sector
     *
     * @return BelongsToMany
     */
    public function clients(): BelongsToMany
    {
        return $this->belongsToMany(
            Client::class,
            'client_manager_client_sector'
        ) ->withPivot('order');
    }

    /**
     * Register a media collection for the user profile image
     */
    public function registerMediaCollections()
    {
        $this->addMediaCollection('icon')->singleFile();
    }
}
