<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users =  [
            [
                'name' => 'Aldri Golis',
                'email' => 'aldrigolis@yahoo.com',
                'email_verified_at' => Carbon::now(),
                'password' => bcrypt('aldri123')
            ],
            [
                'name' => 'John Gold',
                'email' => 'johngold@yahoo.com',
                'email_verified_at' => Carbon::now(),
                'password' => bcrypt('john123')
            ],
            [
                'name' => 'Robert Dawn',
                'email' => 'robertdawn@yahoo.com',
                'email_verified_at' => Carbon::now(),
                'password' => bcrypt('robert123')
            ],
            [
                'name' => 'Jane Doe',
                'email' => 'janedoe@yahoo.com',
                'email_verified_at' => Carbon::now(),
                'password' => bcrypt('jane123')
            ],
        ];

        foreach($users as $user) {
            User::create($user);
        }
    }
}
