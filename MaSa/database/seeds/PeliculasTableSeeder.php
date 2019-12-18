<?php

use App\Pelicula;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
   Pelicula::create([
    'titulo' =>'El señor de los anillos',
    'descripcion'=>'Es una pelicula de avetura y de accion muy entretenida',
     'rating' =>'9',
     'genero_id' =>'1',
      'featured_img'=>'anillos.jpg',

     )]
     Pelicula::create([
      'titulo' =>'El señor de los anillos II',
      'descripcion'=>'Es la secuela del "El señor de los anillos" y sin duda una de las mejores peliculas',
       'rating' =>'8',
       'genero_id' =>'1',
        'featured_img'=>'anillos2.jpg',

       )]
       Pelicula::create([
        'titulo' =>'El señor de los anillos III',
        'descripcion'=>' Es la ultima de la trilogia que nos deparara la pelicula... ',
         'rating' =>'10',
         'genero_id' =>'1',
          'featured_img'=>'anillos3.jpg',

         )]
         Pelicula::create([
          'titulo' =>'Frozen',
          'descripcion'=>'Una pelicula para niños muy entretenida y con unas de las canciones mas pagadisas que existe',
           'rating' =>'7',
           'genero_id' =>'4',
            'featured_img'=>'frozen.jpg',

           )]
           Pelicula::create([
            'titulo' =>'Frozen 2',
            'descripcion'=>'Es la secuela de "Frozen", mirala por aca antes que salga en los cines',
             'rating' =>'8',
             'genero_id' =>'4',
              'featured_img'=>'frozen2.jpg',

             )]
             Pelicula::create([
              'titulo' =>'El Hobbit',
              'descripcion'=>'Es la precuela de la trilogia del "El señor de los anillos" y trata sobre el gran viaje de Bilbo',
               'rating' =>'10',
               'genero_id' =>'1',
                'featured_img'=>'hobbit.jpg',

               )]
               Pelicula::create([
                'titulo' =>'El hobbit II',
                'descripcion'=>'Es la secuela mas esperada, que nos deparara bilbo y sus compañeros',
                 'rating' =>'8',
                 'genero_id' =>'1',
                  'featured_img'=>'hobbit2.jpg',

                 )]
                 Pelicula::create([
                  'titulo' =>'El Hobbit III',
                  'descripcion'=>'El final de una de las mejores aventuras nunca antes contadas',
                   'rating' =>'10',
                   'genero_id' =>'1',
                    'featured_img'=>'hobbit3.jpg',

                   )]
                   Pelicula::create([
                    'titulo' =>'Toy Story',
                    'descripcion'=>'Una pelicula dirigida al publico infantil que marco la infancia de muchas persoas',
                     'rating' =>'10',
                     'genero_id' =>'4',
                      'featured_img'=>'toy story.jpg',

                     )]
                     Pelicula::create([
                      'titulo' =>'Toy Story 2',
                      'descripcion'=>'Nuevos persojes, una gran aventura y un dilema',
                       'rating' =>'7',
                       'genero_id' =>'4',
                        'featured_img'=>'toy story2.jpg',

                       )]
                       Pelicula::create([
                        'titulo' =>'Toy Story 3',
                        'descripcion'=>'Andy se aburre de sus muñecos?, a donde los llevara?',
                         'rating' =>'6',
                         'genero_id' =>'4',
                          'featured_img'=>'toy story3.jpg',

                         )]
                         Pelicula::create([
                          'titulo' =>'Toy Story 4',
                          'descripcion'=>'Sera el fin de saga de peliculas??...',
                           'rating' =>'10',
                           'genero_id' =>'4',
                            'featured_img'=>'toy story4.jpg',

                           )]
                           Pelicula::create([
                            'titulo' =>'La cabaña del terror',
                            'descripcion'=>'Que les deparar a estos jovenes en el bosque',
                             'rating' =>'4',
                             'genero_id' =>'6',
                              'featured_img'=>'cabaña.jpg',

                             )]
                             Pelicula::create([
                              'titulo' =>'Martes 13',
                              'descripcion'=>'Una de las cuantas peliculas de Jason en busca de su venganza',
                               'rating' =>'6',
                               'genero_id' =>'6',
                                'featured_img'=>'martes13.jpg',

                               )]
                               Pelicula::create([
                                'titulo' =>'Star Wars The force Awakens',
                                'descripcion'=>'Despues de ganar la guerra contra el imperio, hubo tiempos de paz pero nadie se imagina que.....',
                                 'rating' =>'8',
                                 'genero_id' =>'5',
                                  'featured_img'=>'starwars8.jpg',

                                 )]
                                 Pelicula::create([
                                  'titulo' =>'Star Wars The rise of Skywalker',
                                  'descripcion'=>'El imperio resurgio y con el un nuevo sid, solo queda ir a por el ultimo jedi ',
                                   'rating' =>'9',
                                   'genero_id' =>'5',
                                    'featured_img'=>'starwars9.jpg',

                                   )]
                                   Pelicula::create([
                                    'titulo' =>'Star Wars The last Jedi',
                                    'descripcion'=>'Rei por fin podra obtener su ansiadad victoria sobre Kylo?',
                                     'rating' =>'10',
                                     'genero_id' =>'5',
                                      'featured_img'=>'starwars10.jgp',

                                     )]
    }
  }
