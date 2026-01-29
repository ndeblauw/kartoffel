<?php

namespace App\Models\Traits;

use App\Models\Tenant;

trait BelongsToTenant
{
    protected static function bootBelongsToTenant(): void
    {
        static::saving( function($model) {
            $model->tenant_id = app('tenant')->id;
        });
    }

    public function tenant()
    {
        return $this->belongsTo(Tenant::class);
    }
}
