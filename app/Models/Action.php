<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Action extends Model
{
    use HasFactory;

    public function docRoutes()
    {
        // return $this->hasMany(DocRoutes::class);
        return $this->belongsToMany(DocRoutes::class);
    }
}
