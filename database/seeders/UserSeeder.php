<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'created_at' => "2022-04-06 17:00:00",
            'updated_at' => "2022-04-06 17:00:00",
            'role' => "Главврач",
            'first_name' => "Иван",
            'second_name' => "Иван",
            'patronymic' => "Иван",
            'document' => 5985,
            'work_expirience' => 124,
            'qualification_id' => 4563,
            'password' => 3254,
            'remember_token' => "Иван",
        ]);
        DB::table('users')->insert([
            'created_at' => "2022-04-06 17:00:00",
            'updated_at' => "2022-04-06 17:00:00",
            'role' => "Доктор",
            'first_name' => "Иван",
            'first_name' => "Иван",
            'second_name' => "Иван",
            'patronymic' => "Иван",
            'document' => 5985,
            'work_expirience' => 3546,
            'qualification_id' => 46545,
            'password' => "Иван",
            'remember_token' => "Иван",
        ]);
        DB::table('users')->insert([
            'created_at' => "2022-04-06 17:00:00",
            'updated_at' => "2022-04-06 17:00:00",
            'role' => "Пациент",
            'first_name' => "Иван",
            'second_name' => "Иван",
            'patronymic' => "Иван",
            'document' => 5985,
            'work_expirience' => 8534,
            'qualification_id' => 78567458,
            'password' => 7865,
            'remember_token' => "Иван",
        ]);
        DB::table('users')->insert([
            'created_at' => "2022-04-06 17:00:00",
            'updated_at' => "2022-04-06 17:00:00",
            'role' => "Пациент",
            'first_name' => "Иван",
            'second_name' => "Иван",
            'patronymic' => "Иван",
            'document' => 5985,
            'work_expirience' => 7895,
            'qualification_id' => 87657,
            'password' => 7687,
            'remember_token' => "Иван",
        ]);
        DB::table('users')->insert([
            'created_at' => "2022-04-06 17:00:00",
            'updated_at' => "2022-04-06 17:00:00",
            'role' => "Доктор",
            'first_name' => "Иван",
            'second_name' => "Иван",
            'patronymic' => "Иван",
            'document' => 5985,
            'work_expirience' => 876768,
            'qualification_id' => 78568796,
            'password' => 78967896378,
            'remember_token' => "Иван",
        ]);
        DB::table('users')->insert([
            'created_at' => "2022-04-06 17:00:00",
            'updated_at' => "2022-04-06 17:00:00",
            'role' => "Пациент",
            'first_name' => "Иван",
            'second_name' => "Иван",
            'patronymic' => "Иван",
            'document' => 5985,
            'work_expirience' => 78678,
            'qualification_id' => 78568796,
            'password' => 78967896378,
            'remember_token' => "Иван",
        ]);
        DB::table('users')->insert([
            'created_at' => "2022-04-06 17:00:00",
            'updated_at' => "2022-04-06 17:00:00",
            'role' => "Доктор",
            'first_name' => "Иван",
            'second_name' => "Иван",
            'patronymic' => "Иван",
            'document' => 5985,
            'work_expirience' => 785684,
            'qualification_id' => 78568796,
            'password' => 78967896378,
            'remember_token' => "Иван",
        ]);
    }
}
