<?php

namespace Domain\Installation\Models;

use Illuminate\Database\Eloquent\Model;

class Installation extends Model {

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['description'];

}