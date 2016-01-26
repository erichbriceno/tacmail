<?php
use Faker\Generator;
use TacMail\Entities\Sender;

/**
 * Created by PhpStorm.
 * User: Beric
 * Date: 10/12/2015
 * Time: 03:28 PM
 */

class SenderTableSeeder extends BaseSeeder {

    public function getModel()
    {
        return new Sender();
    }

    public function getDummyData(Generator $faker)
    {
        return [
            'description'   => $faker->company,
            'active'        => 'true'
        ];

    }

    public function run()
    {
        //$this->createMultiple(1);

        $senders = [
                    'CNE',
                    'PODER JUDICIAL',
                    'MINISTERIO PUBLICO',
                    'JUSGADO',
                    'GREMIOS Y SINDICATOS',
                    'VALIJA',
                    'REGISTRO CIVIL',
                    'ENTE GUBERNAMENTAL',
                    'PARTIDO POLITICO',
                    'PERSONAL',
                    'OTROS'
        ];

        foreach ($senders as $sender)
        {
            $this->createMultiple(1);
        }

    }
}