<?php
use App\Generos;
use Illuminate\Database\Seeder;

class GenerosTableSeeder extends Seeder
{
    /**
     * run the databse seeds
     *
     * @return void
     */
    public function run()
    {
      Generos::insert([
        ['genero'=>'aventura'],
        ['genero'=>'accion'],
        ['genero'=>'comedia'],
        ['genero'=>'infantil'],
        ['genero'=>'ciencia ficcion'],
        ['genero'=>'terror']
      )];
    }
}
