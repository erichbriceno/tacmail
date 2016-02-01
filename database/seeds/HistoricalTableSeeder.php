<?php

use Faker\Generator;
use App\Entities\Historical;

class HistoricalTableSeeder extends BaseSeeder {

    public function getModel()
    {
        return new Historical();
    }

    public function getDummyData(Generator $faker)
    {
        return [
            'user_id'   =>  2,
            'mail_id'   =>  1,
            'action'    =>  $faker->randomElement(['create', 'refer', 'comment', 'delete', 'block', 'close']),
            'comment'   =>  $faker->paragraph(1),
            'refer_user_id' => 3

        ];
    }

    public function run()
    {
        $this->createMultiple(10);
    }
}