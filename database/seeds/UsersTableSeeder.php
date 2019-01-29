<?php

use Illuminate\Database\Seeder;
use App\User;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'              => 'Lucas Van Driessche',
            'email'             => 'lucasvd@msn.com',
            'password'          => bcrypt('lucas'),
            'email_verified_at' => now()
        ]);
    }
}
