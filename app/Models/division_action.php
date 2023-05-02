<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class division_action extends Model
{


    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'division_actions';

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
        'division_id',
        'action_id'
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
     * Get the Division for this model.
     *
     * @return App\Models\Division
     */
    public function division()
    {
        return $this->belongsTo('App\Models\Division', 'division_id', 'id');
    }

    /**
     * Get the Action for this model.
     *
     * @return App\Models\Action
     */
    public function action()
    {
        return $this->belongsTo('App\Models\Action', 'action_id', 'id');
    }


    /**
     * Get created_at in array format
     *
     * @param  string  $value
     * @return array
     */
    // public function getCreatedAtAttribute($value)
    // {
    //     return \DateTime::createFromFormat($this->getDateFormat(), $value)->format('j/n/Y g:i A');
    // }

    // /**
    //  * Get updated_at in array format
    //  *
    //  * @param  string  $value
    //  * @return array
    //  */
    // public function getUpdatedAtAttribute($value)
    // {
    //     return \DateTime::createFromFormat($this->getDateFormat(), $value)->format('j/n/Y g:i A');
    // }

}
