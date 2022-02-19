<?php

namespace Database\Seeders;

use App\Models\User;
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

        $user1 = User::create([
            'first_name' => 'John',
            'last_name' => 'Doe',
            'email' => 'john@doe.com',
            'password' => bcrypt('password'),
        ]);

        $user1->userInfo()->create([
            'gender' => 'male',
            'address' => '1st Industrial City',
            'city' => 'Jubail',
            'country' => 'Saudi Arabia',
        ]);

        $user2 = User::create([
            'first_name' => 'Jane',
            'last_name' => 'Doe',
            'email' => 'jane@doe.com',
            'password' => bcrypt('password'),
        ]);

        $user2->userInfo()->create([
                    'gender' => 'female',
                    'address' => '1st Industrial City',
                    'city' => 'Jubail',
                    'country' => 'Saudi Arabia',
                ]);

    }
}
