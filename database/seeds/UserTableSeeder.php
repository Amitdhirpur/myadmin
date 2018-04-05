<?php

use Illuminate\Database\Seeder;
use App\User;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      User::create([
      'name' => 'Cathy Shelton',
      'email' =>  'cathy.shelton31@example.com',
      'password' => 'password'
    ]

      );
    }
}
