<?php

namespace Metadeck\ClientManager\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;

class Testimonial extends Model
{
    protected $table = "client_manager_testimonials";

    protected $fillable = [
        'client_manager_client_id',
        'client_manager_client_contact_id',
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
     * The contact that this testimonial belongs to
     */
    public function clientContact()
    {
        return $this->belongsTo(ClientContact::class);
    }
}
