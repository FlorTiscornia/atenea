<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

       User::factory()->create([
            'name' => 'Elena',
            'email' => 'elenarjonap@gmail.com',
            'lastName' => 'Perez',
            'img' =>'https://img.freepik.com/foto-gratis/cabeza-gallina-cerca_181624-1232.jpg?w=1380&t=st=1674656113~exp=1674656713~hmac=0329b670bc2e338592eb50f60806ea13af37e0ed4c7ccb7f2667416699b75feb',
            'group' => 1,
            'isTeacher' => false
        ]);

       User::factory()->create([
            'name' => 'Lola',
            'email' => 'canal030w@gmail.com',
            'lastName' => 'Garcia',
            'img' =>'https://img.freepik.com/foto-gratis/primer-plano-lindo-gatito-descansando-sofa_181624-37234.jpg?t=st=1674656384~exp=1674656984~hmac=42705324c66bc0dd01804f182f107e7b346a8ad60963f6c0c46e6482c26dff79',
            'group' => 1,
            'isTeacher' => false
        ]);

        User::factory()->create([
            'name' => 'Carmen',
            'email' => 'carmengallardopozo@gmail.com',
            'lastName' => 'Gallardo',
            'img' =>'https://img.freepik.com/foto-gratis/anade-real-rodeado-flores-vegetacion-campo-luz-sol_181624-15686.jpg?w=996&t=st=1674656436~exp=1674657036~hmac=0525ff9bf663c6beae1a9bcc2dfe8db1a77b04bb6a61a3cbe4414ef7e08199bd',
            'group' => 1,
            'isTeacher' => false
        ]);
        //falta poner imágenes de CLOUDINARY con drag and drop
    }
}
