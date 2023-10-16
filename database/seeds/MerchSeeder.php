<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MerchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Merch', 100)->create();
    }
}
