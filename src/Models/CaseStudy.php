<?php

namespace Metadeck\ClientManager\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\Tags\HasTags;

class CaseStudy extends Model implements HasMedia
{
    use HasMediaTrait, HasTags;

    protected $table = "client_manager_case_studies";

    protected $fillable = [
        'client_manager_project_id',
        'title',
        'preview_content',
        'content'
    ];

    /**
     * The project that this case study belongs to
     *
     * @return BelongsTo
     */
    public function project()
    {
        return $this->belongsTo(Project::class);
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
