<?php

use Illuminate\Database\Seeder;
use App\User;
class UserDetailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
     {
      $users =  [[
        'name' => 'Marilyn Thomas',
        'email' =>  'marilyn@example.com',
        'password' => bcrypt('password')
     ],
     [
        'name' => 'Dwight Gilbert',
        'email' =>  'dwight@example.com',
        'password' => bcrypt('password')
     ],
     [
       'name' => 'Cody Moreno',
       'email' =>  'moreno@example.com',
       'password' => bcrypt('password')
     ],
     [
       'name' => 'Jamie Freeman',
       'email' =>  'freeman@example.com',
       'password' => bcrypt('password')
     ],
     [
       'name' => 'Vickie Reed',
       'email' =>  'reed@example.com',
       'password' => bcrypt('password')
     ],
     [
       'name' => 'Charles Spencer',
       'email' =>  'charles@example.com',
       'password' => bcrypt('password')
     ],
     [
       'name' => 'Lauren Ruiz',
       'email' =>  'ruiz@example.com',
       'password' => bcrypt('password')
     ],
     [
       'name' => 'Marlene Vasquez',
       'email' =>  'vasquez@example.com',
       'password' => bcrypt('password')
     ],
     [
       'name' => 'Loretta Morrisonz',
       'email' =>  'morrisonz@example.com',
       'password' => bcrypt('password')
     ],
     [
       'name' => 'Yvonne Wood',
       'email' =>  'wood@example.com',
       'password' => bcrypt('password')
     ],
     [
       'name' => 'Denise Franklin',
       'email' =>  'franklin@example.com',
       'password' => bcrypt('password')
     ],
     [
       'name' => 'Joseph Gonzalez',
       'email' =>  'gonzalez@example.com',
       'password' => bcrypt('password')
     ],
     [
       'name' => 'Rick Graham',
       'email' =>  'graham@example.com',
       'password' => bcrypt('password')
     ],
     [
       'name' => 'Alexander Bailey',
       'email' =>  'bailey@example.com',
       'password' => bcrypt('password')
     ]
   ];
   foreach($users as $user){}
     }
}
