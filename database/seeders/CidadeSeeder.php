<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Cidade;
use Exception;

class CidadeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $cidades = [
           [
            'nome_da_cidade'=>'Fortaleza',
            'latitude' => '-3.5417106665945703',
            'longitude' => '-38.15618881833694'
           ],
           [
            'nome_da_cidade'=>'Florianopolis',
            'latitude' => '-27.647926875493706',
            'longitude' => '-48.44147344104905'
           ],
           [
            'nome_da_cidade'=>'Rio de Janeiro',
            'latitude' => '-22.956579152468546',
            'longitude' => '-43.1338118307636'
           ],
           [
            'nome_da_cidade'=>'Salvador',
            'latitude' => '-12.881075112897415',
            'longitude' => '-38.56116132250316'
           ],
           [
            'nome_da_cidade'=>'Parnaiba',
            'latitude' => '-2.881284266681368',
            'longitude' => '-41.78834221683234'
           ],
           [
            'nome_da_cidade'=>'Recife',
            'latitude' => '-8.058488293978119',
            'longitude' => '-34.88924911490618'
           ],
        ];

        foreach($cidades as $cidade) {
            try {
                Cidade::create($cidade);
            } catch( Exception $e) {
                echo "Cidade {$cidade['nome_da_cidade']} já cadastrada";
            }
        }
    }
}
