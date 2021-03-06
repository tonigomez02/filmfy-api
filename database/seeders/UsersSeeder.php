<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();

        $users = [
            [
                'name' => 'Toni García',
                'email' => 'tonigarcia@email.com',
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'Toni Gómez',
                'email' => 'tonigomez@email.com',
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'Jeroni Mateo',
                'email' => 'jmateo@email.com',
                'password' => Hash::make('password'),
            ],
        ];

        foreach ($users as $user) {
            User::create([
                "name" => $user['name'],
                "email" => $user['email'],
                "password" => $user['password'],
            ]);
        }

        Schema::enableForeignKeyConstraints();
    }
}
