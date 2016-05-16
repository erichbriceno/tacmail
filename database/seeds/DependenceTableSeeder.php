<?php
use Faker\Generator;
use TacMail\Entities\Dependence;


class DependenceTableSeeder extends BaseSeeder {

    public function getModel()
    {
        return new Dependence();
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
        $senders = [
                    'DIRECCION',
                    'SECRETARIA',
                    'GESTION ADMINISTRATIVA',
                    'TALENTO HUMANO',
                    'SEGURIDAD INTEGRAL',
                    'CORRESPONDENCIA',
                    'REGISTRO ELECTORAL',
                    'REGISTRO CIVIL',
                    'SUPERVISION',
                    'JUNTA REGIONAL ELECTORAL',
                    'PARTICIPACION POLITICA',
                    'PARTICIAPACION CUIDADANA',
                    'FINANCIAMIENTO',
                    'LOGISTICA Y PRODUCCION',
                    'AUTOMATIZACION'
        ];

        foreach ($senders as $sender)
        {

            $data = [
                'description'   =>  $sender
            ];
            $this->createMultiple(1, $data);
        }

    }
}