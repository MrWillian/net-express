<?php

namespace Domain\Client\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model {

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'birthday',
        'phone_number',
        'client_type',
        'gender',
        'rg',
        'document',
        'cep',
        'country',
        'state',
        'city',
        'state',
        'city',
        'district',
        'place',
        'number'
    ];

}