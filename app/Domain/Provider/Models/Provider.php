<?php

namespace Domain\Provider\Models;

use Illuminate\Database\Eloquent\Model;

class Provider extends Model {

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name'];

}