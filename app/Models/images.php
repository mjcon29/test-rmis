<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;

class images extends Model
{
    use HasFactory;
    use LogsActivity;

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
        ->logFillable()
        ->logOnlyDirty()
        ->useLogName('Document');
        // Chain fluent methods for configuration options
    }
    
    protected $fillable = [
        'document_id',
        'image_path'
    ];

    public function document(){
        return $this->belongsTo(Document::class);
    }
}
