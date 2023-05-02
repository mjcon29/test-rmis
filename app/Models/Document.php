<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\OriginOffice;
use Carbon\Carbon;

use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;

use Illuminate\Database\Eloquent\Casts\Attribute;



class Document extends Model
{
    use HasFactory;
    use LogsActivity;
    use \Staudenmeir\EloquentHasManyDeep\HasRelationships;

    protected $fillable = [
        'doc_number', 'memo_number', 'origin_id', 'mor_id', 'doctype_id', 'user_id', 'status', 'date_received',
        'deadline', 'control_number', 'subject', 'updated_at','updater_id'
    ];


    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
            ->logFillable()
            ->logOnlyDirty()
            ->useLogName('Document');
        // Chain fluent methods for configuration options
    }

    public function originOffice()
    {
        return $this->belongsTo(OriginOffice::class, 'origin_id');
    }

    public function MeansOfReceiving()
    {
        return $this->belongsTo(MeansOfReceiving::class, 'mor_id');
    }

    public function doctype()
    {

        return $this->belongsTo(DocType::class, 'doctype_id');
    }

    public function user()
    {
        // return $this->belongsTo(employee::class);
        return $this->belongsTo(User::class);
    }

    // public function status(){
    //     return $this->hasMany(Status::class);
    // }


    public function docRoutes()
    {
        return $this->hasMany(DocRoutes::class, 'document_id');
    }

    // ---------------------------------------- This is working -----------------------
    // public function docRouteUsers()
    // {
    //     return $this->hasManyThrough(DocRouteUser::class, DocRoutes::class);
    // }

    public function latestDocRoutes()
    {
        return $this->hasOne(DocRoutes::class)->latest();
    }

    public function docUsers()
    {
        return $this->hasMany(DocUser::class);
    }

    public function docRouteActions()
    {
        return $this->hasManyThrough(DocRouteAction::class, DocRoutes::class);
    }

    public function images()
    {
        return $this->hasMany(images::class);
    }

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }

    public function expired()
    {
        $today =  Carbon::now('Asia/Manila')->format('Y-m-d');
        $thisweek =  Carbon::now('Asia/Manila')->addDays(6)->format('Y-m-d');

        if ($this->deadline >= $today) {
            if ($this->deadline < $thisweek && $this->deadline != $today) return "success";
            else if ($this->deadline == $today) return "warning";
            else return "success";
        } else return "danger";
    }

    public function getDayLapsed()
    {
        $today =  Carbon::now('Asia/Manila')->format('Y-m-d');
        // ($today - $this->deadline)

        if ($this->status !== 1) {
            if ($this->deadline < $today) {
                // return date_diff(date_create(date('d-m-Y', strtotime($this->deadline) )),  date_create(date('d-m-Y', strtotime($today) )));

                return round((strtotime($today) - strtotime($this->deadline)) / (60 * 60 * 24)) . " Days Overdue";
            } else return $this->date_received;
        }
    }

    public function get_status()
    {
        $status = $this->status ? "Closed" : "Open";
        return $status;
    }

    public static function boot()
    {
        parent::boot();
        self::created(function ($model) {
            $model->doc_number = "TN" . "-" . date("Y-m-d") . "-" . str_pad($model->id, 4, "0", STR_PAD_LEFT);
            $model->save();
        });
    }

    public function usersAssignedTo()
    {
        return $this->belongsToMany(related: User::class, table: 'doc_users',
            foreignPivotKey: 'document_id', relatedPivotKey: 'user_id');
    }

}
