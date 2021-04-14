<?php

namespace Domain\Employee\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model {

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name'];

}