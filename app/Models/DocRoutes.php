<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;


class DocRoutes extends Model
{
    use HasFactory;
    use LogsActivity;

    protected $fillable = [
        'date_received',
        'remarks',
        'employee_id'
    ];


    public function document()
    {
        return $this->belongsTo(Document::class, 'document_id');
    }

    public function action()
    {
        return $this->belongsTo(Action::class);
    }


    public function routeOwner()
    {
        return $this->belongsTo(User::class,'user_id');
    }

    public function users()
    {
        return $this->belongsToMany(related: User::class, table: 'doc_routes_user',
            foreignPivotKey: 'doc_routes_id', relatedPivotKey: 'user_id');
    }

    public function actions()
    {
        return $this->belongsToMany(related: Action::class, table: 'doc_route_actions',
            foreignPivotKey: 'doc_routes_id', relatedPivotKey: 'action_id');
    }

    public function docRouteUsers()
    {
        return $this->hasMany(DocRouteUser::class, 'doc_routes_id');
    }

    public function latestdocRouteUsers() {
        // return $this->docRouteUsers()->last();
    }

    public function docRouteActions()
    {
        return $this->hasMany(DocRouteAction::class);
    }

    public function recepients()
    {
        // $users = $this::with('doc_route_users')->get();

        // foreach ($users as $userlist) {
        //     foreach ($userlist->doc_route_users as $user) {
        //         Log::info($user->user_id);
        //     }
        // }

        return "hello";
    }

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
            ->logFillable()
            ->logOnlyDirty()
            ->useLogName('Document Route');
        // Chain fluent methods for configuration options
    }
}
