<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Laratrust\Traits\LaratrustUserTrait;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;

class User extends Authenticatable
{
    use LaratrustUserTrait;
    use HasApiTokens, HasFactory, Notifiable;
    use LogsActivity;

    use \Znck\Eloquent\Traits\BelongsToThrough;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'role_id',
        'office_id',
        'division_id',
        'name',
        'email',
        'username',
        'password',
        'designation',
        'file_path'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function fullname()
    {
        return $this->firstname . " " . $this->lastname;
    }
    public function division()
    {
        return $this->belongsTo(Division::class);
    }
   
    public function office()
    {
        return $this->belongsTo(Office::class);
    }

    public function roles()
    {
        // return $this->belongsTo(Role::class);
        return $this->belongsToMany(related: Role::class, table: 'role_user',
        foreignPivotKey: 'user_id', relatedPivotKey: 'role_id');
    }

    public function documents()
    {
        return $this->hasMany(Document::class);
    }

    public function docRoutes()
    {
        return $this->belongsToMany(DocRoutes::class);
    }

    public function docAssigned()
    {
        return $this->belongsToMany(Document::class);
    }

    public function docRouteUsers()
    {
        // return $this->hasMany(DocRouteUser::class);
        return $this->belongsToThrough(Document::class, [DocRoutes::class, DocRouteUser::class]);
    }

    public function getActivitylogOptions(): LogOptions
    {

        return LogOptions::defaults()
            ->logFillable()
            ->logOnlyDirty()
            ->useLogName('User');
        // Chain fluent methods for configuration options
    }
}
