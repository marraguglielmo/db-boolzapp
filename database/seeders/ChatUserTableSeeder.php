<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Chat;

class ChatUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 15; $i++) {

            $users = User::inRandomOrder()->first();
            $chats = Chat::inRandomOrder()->first()->id;

            $users->chats()->attach($chats);
        }
    }
}
