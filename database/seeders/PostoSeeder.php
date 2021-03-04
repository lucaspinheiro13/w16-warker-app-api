<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Posto;
use Faker\Factory;

class PostoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $postos = [
            [
                'cidade_id'=>1,
                'reservatorio'=> rand(0,100),
                'longitude' => '-3.771743500207963',
                'latitude' => '-38.569450887622466',
            ],
            [
                'cidade_id'=>1,
                'reservatorio'=> rand(0,100),
                'longitude' => '-3.7652364063819896',
                'latitude' => '-38.57694535598716',
            ],
            [
                'cidade_id'=>1,
                'reservatorio'=> rand(0,100),
                'longitude' => '-3.7524329949979522',
                'latitude' => '-38.553476944801716',
            ],
            [
                'cidade_id'=>1,
                'reservatorio'=> rand(0,100),
                'longitude' => '-3.746908766791986',
                'latitude' => '-38.555429592879335',
            ],
            [
                'cidade_id'=>1,
                'reservatorio'=> rand(0,100),
                'longitude' => '-3.7556088251773376',
                'latitude' => '-38.54212973100341',
            ],
            //
            [
                'cidade_id'=>2,
                'reservatorio'=> rand(0,100),
                'longitude' => '-27.592857348592787',
                'latitude' => '-48.52116104548629',
            ],
            [
                'cidade_id'=>2,
                'reservatorio'=> rand(0,100),
                'longitude' => '-27.59118383061328',
                'latitude' => '-48.514122929338384',
            ],
            [
                'cidade_id'=>2,
                'reservatorio'=> rand(0,100),
                'longitude' => '-27.606130484049547',
                'latitude' => '-48.51789947911621',
            ],
            [
                'cidade_id'=>2,
                'reservatorio'=> rand(0,100),
                'longitude' => '-27.6103136605569',
                'latitude' => '-48.52472301855228',
            ],
            [
                'cidade_id'=>2,
                'reservatorio'=> rand(0,100),
                'longitude' => '-27.6003118002517',
                'latitude' => '-48.499875035322795',
            ],
            //
            [
                'cidade_id'=>3,
                'reservatorio'=> rand(0,100),
                'longitude' => '-22.9103639939133',
                'latitude' => '-43.202338175785094',
            ],
            [
                'cidade_id'=>3,
                'reservatorio'=> rand(0,100),
                'longitude' => '-22.915423735220624',
                'latitude' => '-43.21916098999228',
            ],
            [
                'cidade_id'=>3,
                'reservatorio'=> rand(0,100),
                'longitude' => '-22.909573392274275',
                'latitude' => '-43.217959360406056',
            ],
            [
                'cidade_id'=>3,
                'reservatorio'=> rand(0,100),
                'longitude' => '-22.893918530607433',
                'latitude' => '-43.23941703158869',
            ],
            [
                'cidade_id'=>3,
                'reservatorio'=> rand(0,100),
                'longitude' => '-22.897555679800604',
                'latitude' => '-43.2062863872827',
            ],
             //
             [
                'cidade_id'=>4,
                'reservatorio'=> rand(0,100),
                'longitude' => '-12.991688546454805',
                'latitude' => '-38.47123132665181',
            ],
            [
                'cidade_id'=>4,
                'reservatorio'=> rand(0,100),
                'longitude' => '-12.990183136159677',
                'latitude' => '-38.49457727289851',
            ],
            [
                'cidade_id'=>4,
                'reservatorio'=> rand(0,100),
                'longitude' => '-13.000386293892278',
                'latitude' => '-38.482217654297315',
            ],
            [
                'cidade_id'=>4,
                'reservatorio'=> rand(0,100),
                'longitude' => '-13.001724381831764',
                'latitude' => '-38.452176914641626',
            ],
            [
                'cidade_id'=>4,
                'reservatorio'=> rand(0,100),
                'longitude' => '-12.995201134986594',
                'latitude' => '-38.444623814385345',
            ],
             //
             [
                'cidade_id'=>5,
                'reservatorio'=> rand(0,100),
                'longitude' => '-2.919229405834962',
                'latitude' => '-41.76050037810781',
            ],
            [
                'cidade_id'=>5,
                'reservatorio'=> rand(0,100),
                'longitude' => '-2.9271155542989153',
                'latitude' => '-41.77251667397009',
            ],
            [
                'cidade_id'=>5,
                'reservatorio'=> rand(0,100),
                'longitude' => '-2.902256855276471',
                'latitude' => '-41.772859996709',
            ],
            [
                'cidade_id'=>5,
                'reservatorio'=> rand(0,100),
                'longitude' => '-2.9027711787428863',
                'latitude' => '-41.748655743615',
            ],
            [
                'cidade_id'=>5,
                'reservatorio'=> rand(0,100),
                'longitude' => '-2.9091144822338486',
                'latitude' => '-41.72874302475752',
            ],
             //
             [
                'cidade_id'=>6,
                'reservatorio'=> rand(0,100),
                'longitude' => '-8.050606958521868',
                'latitude' => '-34.8864577006296',
            ],
            [
                'cidade_id'=>6,
                'reservatorio'=> rand(0,100),
                'longitude' => '-8.067943487387796',
                'latitude' => '-34.909803646876306',
            ],
            [
                'cidade_id'=>6,
                'reservatorio'=> rand(0,100),
                'longitude' => '-8.057745619180308',
                'latitude' => '-34.90740038770385',
            ],
            [
                'cidade_id'=>6,
                'reservatorio'=> rand(0,100),
                'longitude' => '-8.045422852282142',
                'latitude' => '-34.900533932925406',
            ],
            [
                'cidade_id'=>6,
                'reservatorio'=> rand(0,100),
                'longitude' => '-8.064374262764781',
                'latitude' => '-34.87272479107272',
            ],
        ];

        foreach($postos as $posto) {
            Posto::create($posto);
        }
    }
}