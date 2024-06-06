<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            'Guglielmo',
            'Enrico',
            'Oltion',
            'Jomar',
        ];

        foreach ($users as $user) {

            $new_user = new User();
            $new_user->name = $user;
            $new_user->save();
        }
    }
}
