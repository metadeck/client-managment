<?php

namespace Metadeck\ClientManager\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Project extends Model
{

    protected $table = "client_manager_projects";

    protected $fillable = [
        'name',
        'description',
        'estimate_price',
        'actual_cost',
        'billed_price',
        'client_manager_client_id',
        'client_manager_project_type_id'
    ];

    /**
     * The project type associated with this project
     *
     * @return BelongsTo
     */
    public function type()
    {
        return $this->belongsTo(ProjectType::class, 'client_manager_project_type_id');
    }

    /**
     * The client this project belongs to
     *
     * @return BelongsTo
     */
    public function client()
    {
        return $this->belongsTo(Client::class, 'client_manager_client_id');
    }
}
