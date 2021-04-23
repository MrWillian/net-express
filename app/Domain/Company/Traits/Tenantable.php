<?php

namespace Domain\Company\Traits;

use Domain\Company\Models\Company;
use Domain\Company\Scopes\TenantScope;

trait Tenantable {
    protected static function bootTenantable() {
        if (session()->has('company_id') && !is_null($session->get('company_id'))) {
            static::creating(function($model) {
                $model->company_id = session()->get('company_id');
            });
        }
        static::addGlobalScope(new TenantScope);
    }

    public function company()
    {
       return $this->belongsTo(Company::class);
    }
}