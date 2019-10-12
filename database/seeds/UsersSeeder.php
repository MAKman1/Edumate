<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'first_name' => 'Muhammad Arham',
            'last_name' => 'Khan',
            'user_avatar' => '',
            'username' => 'makman',
            'email' => 'arham.khan@ug.bilkent.edu.tr',
            'institute_id' => 1,
            'password' => bcrypt('makman'),
        ]);
        User::create([
            'first_name' => 'Scarlett',
            'last_name' => 'Johannson',
            'user_avatar' => '',
            'username' => 'scarlett',
            'email' => 'scarlett@ug.bilkent.edu.tr',
            'institute_id' => 1,
            'password' => bcrypt('scarlett'),
        ]);
        User::create([
            'first_name' => 'Test',
            'last_name' => 'User',
            'user_avatar' => '',
            'username' => 'test',
            'email' => 'test@test.com',
            'institute_id' => 1,
            'password' => bcrypt('test'),
        ]);
    }
}
