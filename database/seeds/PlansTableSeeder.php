<?php

use App\Models\Plan;
use Illuminate\Database\Seeder;

class PlansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $plans = [
            [
                'name' => 'Free',
                'url' => 'free',
                'price' => 0.00,
                'description' => 'Plano grátis'
            ],
            [
                'name' => 'Premium',
                'url' => 'premium',
                'price' => 299.99,
                'description' => 'Plano Premium'
            ],
            [
                'name' => 'Business',
                'url' => 'business',
                'price' => 499.99,
                'description' => 'Plano Business'
            ]
        ];

        foreach ($plans as $plan) {
            Plan::create($plan);
        }
    }
}
