<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DocRouteAction extends Model
{
    use HasFactory;
    protected $fillable = [];

    public function action()
    {
        return $this->belongsTo(Action::class);
    }
    public function docRoute()
    {
        return $this->belongsTo(DocRoute::class);
    }
}
