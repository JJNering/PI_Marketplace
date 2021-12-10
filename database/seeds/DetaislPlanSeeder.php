<?php

use App\Models\DetailPlan;
use Illuminate\Database\Seeder;

class DetaislPlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $details = [
            [
                'plan_id' => 1,
                'name' => 'Categorias',
                'created_at' => '2021-12-05 00:00:00',
                'updated_at' => '2021-12-05 00:00:00'
            ],
            [
                'plan_id' => 1,
                'name' => 'Produtos',
                'created_at' => '2021-12-05 00:00:00',
                'updated_at' => '2021-12-05 00:00:00'
            ],

            [
                'plan_id' => 2,
                'name' => 'Categorias',
                'created_at' => '2021-12-05 00:00:00',
                'updated_at' => '2021-12-05 00:00:00'
            ],
            [
                'plan_id' => 2,
                'name' => 'Produtos',
                'created_at' => '2021-12-05 00:00:00',
                'updated_at' => '2021-12-05 00:00:00'
            ],
            [
                'plan_id' => 2,
                'name' => 'Mesas',
                'created_at' => '2021-12-05 00:00:00',
                'updated_at' => '2021-12-05 00:00:00'
            ],
            [
                'plan_id' => 2,
                'name' => 'Cardápio',
                'created_at' => '2021-12-05 00:00:00',
                'updated_at' => '2021-12-05 00:00:00'
            ],

            [
                'plan_id' => 3,
                'name' => 'Categorias',
                'created_at' => '2021-12-05 00:00:00',
                'updated_at' => '2021-12-05 00:00:00'
            ],
            [
                'plan_id' => 3,
                'name' => 'Produtos',
                'created_at' => '2021-12-05 00:00:00',
                'updated_at' => '2021-12-05 00:00:00'
            ],
            [
                'plan_id' => 3,
                'name' => 'Mesas',
                'created_at' => '2021-12-05 00:00:00',
                'updated_at' => '2021-12-05 00:00:00'
            ],
            [
                'plan_id' => 3,
                'name' => 'Cardápio',
                'created_at' => '2021-12-05 00:00:00',
                'updated_at' => '2021-12-05 00:00:00'
            ],
            [
                'plan_id' => 3,
                'name' => 'Suporte',
                'created_at' => '2021-12-05 00:00:00',
                'updated_at' => '2021-12-05 00:00:00'
            ],
        ];

        foreach($details as $detail) {
            DetailPlan::create($detail);
        }
    }
}
