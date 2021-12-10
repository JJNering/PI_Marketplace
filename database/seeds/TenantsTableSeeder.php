<?php

use App\Models\Plan;
use App\Models\Tenant;
use Illuminate\Database\Seeder;

class TenantsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $plan = Plan::first();

        $plan->tenants()->create([
            'cnpj' => '12123123000150',
            'name' => 'Empresa Fictícia',
            'url' => 'empresa_ficticia',
            'email' => 'ficticia@empresa.com.br'
        ]);
    }
}
