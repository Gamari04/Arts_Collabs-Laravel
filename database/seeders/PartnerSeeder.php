<?php

namespace Database\Seeders;

use App\Models\Partner;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PartnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     
     */
    public function run()
    {
        \App\Models\Partner::factory(10)->create();
    }
}
