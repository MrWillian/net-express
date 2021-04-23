<?php

namespace Domain\Company\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model {

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'company_name', 'fantasy', 'email', 'site', 'document', 'phone_number', 'state_registration', 'responsible_name', 'responsible_office'
    ];

}