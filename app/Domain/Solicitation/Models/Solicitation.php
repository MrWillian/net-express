<?php

namespace Domain\Solicitation\Models;

use Illuminate\Database\Eloquent\Model;

class Solicitation extends Model {

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name'];

}