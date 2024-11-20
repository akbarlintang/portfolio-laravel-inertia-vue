<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProjectImage extends Model
{
    protected $fillable = ['project_id', 'path', 'extension'];

    public function project()
    {
        $this->belongsTo(Project::class);
    }
}
