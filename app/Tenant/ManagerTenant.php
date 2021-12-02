<?php

namespace App\Tenant;

use App\Models\Tenant;

class ManagerTenant
{
    /**
     * Get tenant id
     */
    public function getTenantIdentify(): int
    {
        return auth()->user()->tenant_id;
    }

    /**
     * Get tenant object
     */
    public function getTenant(): Tenant
    {
        return auth()->user()->tenant;
    }

    /**
     * Get if auth user is admin
     */
    public function isAdmin(): bool
    {
        return in_array(auth()->user()->email, config('tenant.admins'));
    }
}
