<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Routing\Route;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'division_id',
        'firstname',
        'lastname',
        'designation',
        'file_path' 
    ];

    public function fullname(){
        return $this->firstname . " " . $this->lastname;
    }

    // public function route(){
    //     return $this->belongsTo(Route::class);
    // }

    public function document(){
        return $this->hasMany(Document::class);
    }

    public function division(){
        return $this->belongsTo(Division::class);
    }
    
    public function doc_routes(){
        return $this->hasMany(DocRoutes::class);
    }
}
