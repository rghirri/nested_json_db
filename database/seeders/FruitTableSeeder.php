<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use \Staudenmeir\LaravelAdjacencyList\Eloquent\HasRecursiveRelationships;
use App\Models\Fruit;

class FruitTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json   = Storage::disk('local')->get('/json/fruit.json');
        $fruits = json_decode($json, true); 

        dd($fruits);

        
        
    }
}