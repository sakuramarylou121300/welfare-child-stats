<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChildWelfareInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('child_welfare_infos')->insert([
            [
                'target_cdclaa' => 100,
                'issued_cdlaa' => 50,
                'received_petitions_cdlclaa' => 75,
                'endorsed_petitions_nacc' => 30,
                'papa_presented_rmc' => 20,
                'papa_not_presented_rmc' => 10,
                'petition_domestic_adoption_act' => 5,
                'simulated_birth_records_rectification_act' => 3,
                'issued_ica_clearance_regular' => 100,
                'issued_ica_clearance_relative' => 40,
                'target_foster' => 25,
                'foster_care_new_children' => 15,
                'foster_children_subsidized_eligible' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
