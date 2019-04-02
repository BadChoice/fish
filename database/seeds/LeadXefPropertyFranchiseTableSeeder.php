<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LeadXefPropertyFranchiseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('lead_xef_property_franchise')->truncate();
        DB::table('lead_xef_property_franchise')->insert([
            ['name' => 'Sí','ordern' => 1,'created_at' => new DateTime,'updated_at' => new DateTime],
            ['name' => 'No, local propio','ordern' => 2,'created_at' => new DateTime,'updated_at' => new DateTime],
        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
