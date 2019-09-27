<?php

namespace Metadeck\ClientManager\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;

class Sector extends Model implements HasMedia
{
    use HasMediaTrait;

    protected $table = "client_manager_sectors";

    protected $fillable = ['name'];

    /**
     * Clients attached to this sector
     *
     * @return void
     */
    public function clients()
    {
        return $this->belongsToMany(Client::class, 'client_manager_client_sector')
            ->withPivot('order');
    }

    /**
     * Register a media collection for the user profile image
     */
    public function registerMediaCollections()
    {
        $this->addMediaCollection('sector_icon')->singleFile();
    }
}
