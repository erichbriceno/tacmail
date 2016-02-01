<?php

use Faker\Generator;
use App\Entities\Historical;

class HistoricalTableSeeder extends BaseSeeder {

    protected $total = 100;

    public function getModel()
    {
        return new Historical();
    }

    public function getDummyData(Generator $faker)
    {
        return [
            'user_id'   =>  $this->getRandom('User')->id,
            'mail_id'   =>  $this->getRandom('Mail')->id,
            'action'    =>  $faker->randomElement(['create', 'refer', 'comment', 'delete', 'block', 'close']),
            'comment'   =>  $faker->paragraph(1),
            'refer_user_id' => $this->getRandom('User')->id

        ];
    }

}