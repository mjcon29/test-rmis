<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
class ActivityLog extends Model
{
    

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'activity_logs';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';
    protected $keyType = 'string';
    public $incrementing = false;


    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
                  'log_name',
                  'description',
                  'subject_type',
                  'event',
                  'subject_id',
                  'causer_type',
                  'causer_id',
                  'properties',
                  'batch_uuid'
              ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [];
    
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [];
    
    /**
     * Get the subject for this model.
     *
     * @return App\Models\Subject
     */
    public function subject()
    {
        return $this->belongsTo('App\Models\Subject','subject_id');
    }

    /**
     * Get the causer for this model.
     *
     * @return App\Models\Causer
     */
    public function causer()
    {
        return $this->belongsTo('App\Models\User','causer_id');
    }


    /**
     * Get created_at in array format
     *
     * @param  string  $value
     * @return array
     */
    public function getCreatedAtAttribute($value)
    {
        return \DateTime::createFromFormat($this->getDateFormat(), $value)->format('j/n/Y g:i A');
    }

    /**
     * Get updated_at in array format
     *
     * @param  string  $value
     * @return array
     */
    public function getUpdatedAtAttribute($value)
    {
        return \DateTime::createFromFormat($this->getDateFormat(), $value)->format('j/n/Y g:i A');
    }

}
