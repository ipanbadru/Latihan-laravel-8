<?php

namespace Database\Seeders;

use App\Models\User;
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
        User::factory()->count(10)->create();
        // collect([
        //     [
        //     'name' => 'Ipan Badruzzaman',
        //     'email' => 'ipanbzn1@gmail',
        //     'password' => bcrypt('password'),
        //     'email_verified_at' => now(),
        //     'created_at' => now(),
        //     'updated_at' => now(),
        //     ],
        //     [
        //         'name' => 'Susan Nuraeni',
        //         'email' => 'susan@gmail',
        //         'password' => bcrypt('password'),
        //         'email_verified_at' => now(),
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ]
        // ])->each(function ($user) {
        //     DB::table('users')->insert($user);
        // });
    }
}
