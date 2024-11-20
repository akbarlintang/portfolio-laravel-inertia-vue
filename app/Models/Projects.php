<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = ['title', 'description'];

    public function images()
    {
        $this->hasMany(ProjectImage::class);
    }
}
