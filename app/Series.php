<?php

namespace series;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Series extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'series';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'photo'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}
