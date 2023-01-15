<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Action;
use App\Models\BibleBook;
use App\Models\Thing;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Thing::factory(10)->create();
        BibleBook::factory(66)->create();
        \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'James',
            'email' => 'james.smeda@gmail.com',
            'password' => Hash::make('Password'),
            'email_verified_at' => Carbon::now()
        ]);
        Action::factory(10)->create();
    }
}
