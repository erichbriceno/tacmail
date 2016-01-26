<?php


use Faker\Generator;
use TacMail\Entities\Mail;

class MailTableSeeder extends BaseSeeder {

    public function getModel()
    {
        return new Mail();
    }

    public function getDummyData(Generator $faker)
    {
        return [
            'status'    =>  $faker->randomElement(['open', 'delete', 'block', 'close']),
            'ore_id'    =>  $faker->numberBetween(0,500),
            'date_in'   =>  $faker->date('Y-m-d','now'),
            'type'      =>  $faker->randomElement(['letter', 'suitcase', 'other']),
            'sender_ref'=>  $faker->phoneNumber,
            'sender_id' =>  1,
            'sender_details'    => $faker->company,
            'issue'     =>  $faker->paragraph(2),
            'user_id'   =>  1
        ];
    }

    public function run()
    {
        $this->createMultiple(10);
    }
}