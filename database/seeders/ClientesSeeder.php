<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory;
use Faker\Provider\pt_BR\Person;

class ClientesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        for ($i=0; $i < 100; $i++) { 
            DB::table('clientes')->insert([
                'nome' => $faker->name(),
                'email' => $faker->email(),
                'cpf_cnpj' => $faker->numberBetween($min = 100, $max = 999).'.'.$faker->numberBetween($min = 100, $max = 999).'.'.$faker->numberBetween($min = 100, $max = 999).'-'.$faker->numberBetween($min = 10, $max = 99),
                'telefone' => '('.$faker->numberBetween($min = 10, $max = 99).') '.$faker->numberBetween($min = 10000, $max = 99999).'-'.$faker->numberBetween($min = 1000, $max = 9999)
            ]);
        }
    }
}
