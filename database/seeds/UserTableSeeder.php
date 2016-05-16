<?php

use Faker\Generator;
use TacMail\Entities\User;

class UserTableSeeder extends BaseSeeder {

    public function getModel()
    {
        return new User();
    }

    public function getDummyData(Generator $faker)
    {
        return [
            'first_name'    =>  $faker->firstName,
            'last_name'     =>  $faker->lastName,
            'nick_name'     =>  $faker->userName,
            'email'         =>  $faker->email,
            'password'      =>  bcrypt('1234'),
            'active'        =>  true,
            'dependence_id' =>  2
        ];

    }


    public function run()
    {
        $admin = [
            'first_name'    =>  'Erich',
            'last_name'     =>  'Briceno',
            'nick_name'     =>  'Beric',
            'email'         =>  'erichbriceno@gmail.com',
            'password'      =>  bcrypt('3r1c4cne'),
            'active'        =>  true,
            'dependence_id' =>  15
        ];

        $this->createMultiple(1,$admin);
        $this->createMultiple(10);

    }

}