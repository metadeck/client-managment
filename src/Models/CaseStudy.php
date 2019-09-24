<?php

namespace Metadeck\ClientManager\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\Tags\HasTags;

class CaseStudy extends Model implements HasMedia
{

    use HasMediaTrait, HasTags;

    protected $fillable = [
        'title',
        'preview_content',
        'content',
        'project_type'
    ];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    /**
     * Register a media collection for the featured Case Study image
     */
    public function registerMediaCollections()
    {
        $this->addMediaCollection('featured_image')->singleFile();
        $this->addMediaCollection('screenshots');
    }
}
