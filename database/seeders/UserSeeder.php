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
            'role' => "doctor",
            'first_name' => "Иван",
            'second_name' => "Распутин",
            'patronymic' => "Иванович",
            'document' => 5985753,
            'work_expirience' => 124,
            'category_id' => 2,
            'password' => 3254,
            'remember_token' => "Иван",
        ]);
        DB::table('users')->insert([
            'created_at' => "2022-04-06 17:00:00",
            'updated_at' => "2022-04-06 17:00:00",
            'role' => "doctor",
            'first_name' => "Джорно",
            'second_name' => "Джованна",
            'patronymic' => "Иванович",
            'document' => 757576,
            'work_expirience' => 15,
            'category_id' => 2,
            'password' => "GoldExpirienceRequem",
            'remember_token' => "Иван",
        ]);
        DB::table('users')->insert([
            'created_at' => "2022-04-06 17:00:00",
            'updated_at' => "2022-04-06 17:00:00",
            'role' => "patient",
            'first_name' => "Иван",
            'second_name' => "Иван",
            'patronymic' => "Иван",
            'document' => 5985685,
            'work_expirience' => NULL,
            'category_id' => NULL,
            'password' => 6534,
            'remember_token' => "Иван",
        ]);
        DB::table('users')->insert([
            'created_at' => "2022-04-06 17:00:00",
            'updated_at' => "2022-04-06 17:00:00",
            'role' => "patient",
            'first_name' => "Иван",
            'second_name' => "Иван",
            'patronymic' => "Иван",
            'document' => 567567,
            'work_expirience' => NULL,
            'category_id' => NULL,
            'password' => 7687,
            'remember_token' => "Иван",
        ]);
        DB::table('users')->insert([
            'created_at' => "2022-04-06 17:00:00",
            'updated_at' => "2022-04-06 17:00:00",
            'role' => "doctor",
            'first_name' => "Ира",
            'second_name' => "Плотникова",
            'patronymic' => "Ивановна",
            'document' => 5967568885,
            'work_expirience' => 876768,
            'category_id' => 3,
            'password' => 78967896378,
            'remember_token' => "Иван",
        ]);
        DB::table('users')->insert([
            'created_at' => "2022-04-06 17:00:00",
            'updated_at' => "2022-04-06 17:00:00",
            'role' => "patient",
            'first_name' => "Арсений",
            'second_name' => "Ивонович",
            'patronymic' => "Ированов",
            'document' => 598459723,
            'work_expirience' => NULL,
            'category_id' => NULL,
            'password' => 784444967896378,
            'remember_token' => "Иван",
        ]);
        DB::table('users')->insert([
            'created_at' => "2022-04-06 17:00:00",
            'updated_at' => "2022-04-06 17:00:00",
            'role' => "doctor",
            'first_name' => "Аркадий",
            'second_name' => "Стуков",
            'patronymic' => "Иванович",
            'document' => 6565554,
            'work_expirience' => 785684,
            'category_id' => 4,
            'password' => 47777,
            'remember_token' => "Иван",
        ]);
    }
}
