<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'created_at' => "2022-04-06 17:00:00",
            'updated_at' => "2022-04-06 17:00:00",
            'parent_id' => NULL,
            'doctor_id' => 1,
            'name' => "Jrekbcn",
        ]);
        DB::table('categories')->insert([
            'created_at' => "2022-04-06 17:00:00",
            'updated_at' => "2022-04-06 17:00:00",
            'parent_id' => 1,
            'doctor_id' => 1,
            'name' => "frdhfyghjng",
        ]);
        DB::table('categories')->insert([
            'created_at' => "2022-04-06 17:00:00",
            'updated_at' => "2022-04-06 17:00:00",
            'parent_id' => 1,
            'doctor_id' => 2,
            'name' => "frdhfyghjnge",
        ]);
        DB::table('categories')->insert([
            'created_at' => "2022-04-06 17:00:00",
            'updated_at' => "2022-04-06 17:00:00",
            'parent_id' => 1,
            'doctor_id' => 2,
            'name' => "grgdzfgbfrdhfyghjng",
        ]);
        DB::table('categories')->insert([
            'created_at' => "2022-04-06 17:00:00",
            'updated_at' => "2022-04-06 17:00:00",
            'parent_id' => NULL,
            'doctor_id' => 1,
            'name' => "Jrekbcntrtyfrth",
        ]);
        DB::table('categories')->insert([
            'created_at' => "2022-04-06 17:00:00",
            'updated_at' => "2022-04-06 17:00:00",
            'parent_id' => 1,
            'doctor_id' => 2,
            'name' => "fTRtrgfgdr",
        ]);
        DB::table('categories')->insert([
            'created_at' => "2022-04-06 17:00:00",
            'updated_at' => "2022-04-06 17:00:00",
            'parent_id' => 1,
            'doctor_id' => 2,
            'name' => "frdhfyghjngTERGTSe",
        ]);
        DB::table('categories')->insert([
            'created_at' => "2022-04-06 17:00:00",
            'updated_at' => "2022-04-06 17:00:00",
            'parent_id' => 1,
            'doctor_id' => 1,
            'name' => "gTRGygjhhts",
        ]);
    }
}
