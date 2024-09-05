<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            ['name' => 'Nike Air Max', 'details' => 'Tênis confortável e estiloso para corrida', 'price' => 120.00],
            ['name' => 'Adidas Ultraboost', 'details' => 'Tênis de alto desempenho com amortecimento', 'price' => 150.00],
            ['name' => 'Puma Suede Classic', 'details' => 'Design clássico com cabedal em suede', 'price' => 90.00,],
            ['name' => 'Converse Chuck Taylor', 'details' => 'Tênis de lona icônico com design versátil', 'price' => 60.00],
            ['name' => 'New Balance 990v5', 'details' => 'Tênis premium com estabilidade e suporte', 'price' => 180.00],
        ];

        DB::table('products')->insert($products);
    }
}
