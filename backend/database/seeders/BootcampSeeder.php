<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Bootcamp;
use File;
class BootcampSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       // 1. Leer el archivo bootcamps.json
       $json=File::get("database/_data/bootcamps.json");
       // 2. Convertir el contenido json a un arreglo en php
       $arreglo=json_decode($json);
       var_dump($arreglo);
       // 3. Recorrer el arreglo en php
       foreach($arreglo as $b){
       // 4. Por cada uno de los elementos del arreglo crear bootcamp 
           $newBootcamp = new Bootcamp();
           $newBootcamp-> name= $b->name;
           $newBootcamp-> website= $b->website;
           $newBootcamp-> phone= $b->phone;
           $newBootcamp-> description= $b->description;
           $newBootcamp-> average_rating= $b->average_rating;
           $newBootcamp-> average_cost= $b->average_cost;
           $newBootcamp-> user_id= $b->user_id;
           $newBootcamp->save();
       }
    }
}
