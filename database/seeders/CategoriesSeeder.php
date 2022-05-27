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
            'name' => "Категория 1",
        ]);
        DB::table('categories')->insert([
            'created_at' => "2022-04-06 17:00:00",
            'updated_at' => "2022-04-06 17:00:00",
            'parent_id' => 1,
            'name' => "Окулист",
        ]);
        DB::table('categories')->insert([
            'created_at' => "2022-04-06 17:00:00",
            'updated_at' => "2022-04-06 17:00:00",
            'parent_id' => 1,
            'name' => "Лор",
        ]);
        DB::table('categories')->insert([
            'created_at' => "2022-04-06 17:00:00",
            'updated_at' => "2022-04-06 17:00:00",
            'parent_id' => 1,
            'name' => "Для ушей",
        ]);
        DB::table('categories')->insert([
            'created_at' => "2022-04-06 17:00:00",
            'updated_at' => "2022-04-06 17:00:00",
            'parent_id' => NULL,
            'name' => "Категория 2",
        ]);
        DB::table('categories')->insert([
            'created_at' => "2022-04-06 17:00:00",
            'updated_at' => "2022-04-06 17:00:00",
            'parent_id' => 2,
            'name' => "Зубной",
        ]);
        DB::table('categories')->insert([
            'created_at' => "2022-04-06 17:00:00",
            'updated_at' => "2022-04-06 17:00:00",
            'parent_id' => 1,
            'name' => "Терапевт",
        ]);
        DB::table('categories')->insert([
            'created_at' => "2022-04-06 17:00:00",
            'updated_at' => "2022-04-06 17:00:00",
            'parent_id' => 2,
            'name' => "Кто-то",
        ]);
    }
}
