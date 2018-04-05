<?php

use Illuminate\Database\Seeder;
use App\User;
class UserDetailTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
     {
       User::insert(  [
       'name' => 'Stella Flores',
       'email' =>  'stella@example.com',
       'password' => 'password'
   ],
     [
        'name' => 'Marilyn Thomas',
        'email' =>  'marilyn@example.com',
        'password' => 'password'
     ],
     [
        'name' => 'Dwight Gilbert',
        'email' =>  'dwight@example.com',
        'password' => 'password'
     ],
     [
       'name' => 'Cody Moreno',
       'email' =>  'moreno@example.com',
       'password' => 'password'
     ],
     [
       'name' => 'Jamie Freeman',
       'email' =>  'freeman@example.com',
       'password' => 'password'
     ],
     [
       'name' => 'Vickie Reed',
       'email' =>  'reed@example.com',
       'password' => 'password'
     ],
     [
       'name' => 'Charles Spencer',
       'email' =>  'charles@example.com',
       'password' => 'password'
     ],
     [
       'name' => 'Lauren Ruiz',
       'email' =>  'ruiz@example.com',
       'password' => 'password'
     ],
     [
       'name' => 'Marlene Vasquez',
       'email' =>  'vasquez@example.com',
       'password' => 'password'
     ],
     [
       'name' => 'Loretta Morrisonz',
       'email' =>  'morrisonz@example.com',
       'password' => 'password'
     ],
     [
       'name' => 'Yvonne Wood',
       'email' =>  'wood@example.com',
       'password' => 'password'
     ],
     [
       'name' => 'Denise Franklin',
       'email' =>  'franklin@example.com',
       'password' => 'password'
     ],
     [
       'name' => 'Joseph Gonzalez',
       'email' =>  'gonzalez@example.com',
       'password' => 'password'
     ],
     [
       'name' => 'Rick Graham',
       'email' =>  'graham@example.com',
       'password' => 'password'
     ],
     [
       'name' => 'Alexander Bailey',
       'email' =>  'bailey@example.com',
       'password' => 'password'
     ]
       );
     }
}
