<?php

use Illuminate\Database\Seeder;
use App\UserDetail;
class FileTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
     {
    UserDetail::insert([[
        'user_id' => '3',
        'profile_pic' =>  "/assets/img/demo/contacts/1.jpg",

     ],
     [
         'user_id' => '5',
         'profile_pic' =>  "/assets/img/demo/contacts/2.jpg",

      ],
      [
        'user_id' => '6',
        'profile_pic' =>  "/assets/img/demo/contacts/3.jpg",

     ],
     [
        'user_id' => '7',
        'profile_pic' =>  "/assets/img/demo/contacts/4.jpg",

     ],
     [
       'user_id' => '8',
       'profile_pic' =>  "/assets/img/demo/contacts/5.jpg",

     ],
     [
       'user_id' => '9',
       'profile_pic' =>  "/assets/img/demo/contacts/6.jpg",

     ],
     [
       'user_id' => '10',
       'profile_pic' =>  "/assets/img/demo/contacts/7.jpg",

     ],
     [
       'user_id' => '11',
       'profile_pic' =>  "/assets/img/demo/contacts/8.jpg",

     ],
     [
       'user_id' => '12',
       'profile_pic' => "/assets/img/demo/contacts/9.jpg",

     ],
     [
       'user_id' => '13',
       'profile_pic' =>  "/assets/img/demo/contacts/11.jpg",

     ],
     [
       'user_id' => '14',
       'profile_pic' =>  "/assets/img/demo/contacts/10.jpg",

     ],
     [
       'user_id' => '15',
       'profile_pic' =>  "/assets/img/demo/contacts/12.jpg",

     ],
     [
       'user_id' => '16',
       'profile_pic' =>  "/assets/img/demo/contacts/14.jpg",

     ],
     [
       'user_id' => '17',
       'profile_pic' =>  "/assets/img/demo/contacts/15.jpg",

     ],
     [
       'user_id' => '18',
       'profile_pic' => "/assets/img/demo/contacts/16.jpg",

     ]

   ]);
}
}
