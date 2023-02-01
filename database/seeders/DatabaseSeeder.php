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
            'grade' => 9,
            'isTeacher' => false
        ]);

        User::factory()->create([
            'name' => 'Lola G',
            'email' => 'canal030w@gmail.com',
            'lastName' => 'Garcia',
            'img' =>'https://img.freepik.com/foto-gratis/primer-plano-lindo-gatito-descansando-sofa_181624-37234.jpg?t=st=1674656384~exp=1674656984~hmac=42705324c66bc0dd01804f182f107e7b346a8ad60963f6c0c46e6482c26dff79',
            'grade' => 8,
            'isTeacher' => false
        ]);

        User::factory()->create([
            'name' => 'Carmen G',
            'email' => 'carmengallardopozo@gmail.com',
            'lastName' => 'Gallardo',
            'img' =>'https://img.freepik.com/foto-gratis/anade-real-rodeado-flores-vegetacion-campo-luz-sol_181624-15686.jpg?w=996&t=st=1674656436~exp=1674657036~hmac=0525ff9bf663c6beae1a9bcc2dfe8db1a77b04bb6a61a3cbe4414ef7e08199bd',
            'grade' => 10,
            'isTeacher' => false
        ]);

        User::factory()->create([
            'name' => 'Florencia',
            'email' => 'flora.tiscornia@gmail.com',
            'lastName' => 'Tiscornia',
            'img' =>'https://img.freepik.com/foto-gratis/anade-real-rodeado-flores-vegetacion-campo-luz-sol_181624-15686.jpg?w=996&t=st=1674656436~exp=1674657036~hmac=0525ff9bf663c6beae1a9bcc2dfe8db1a77b04bb6a61a3cbe4414ef7e08199bd',
            'grade' => 10,
            'isTeacher' => false
        ]);
        User::factory()->create([
            'name' => 'Lola N',
            'email' => 'lolanavalop@gmail.com',
            'lastName' => 'Navarro',
            'img' =>'https://img.freepik.com/foto-gratis/anade-real-rodeado-flores-vegetacion-campo-luz-sol_181624-15686.jpg?w=996&t=st=1674656436~exp=1674657036~hmac=0525ff9bf663c6beae1a9bcc2dfe8db1a77b04bb6a61a3cbe4414ef7e08199bd',
            'grade' => 10,
            'isTeacher' => false
        ]);
        User::factory()->create([
            'name' => 'Alesia',
            'email' => 'alesia.nekolethal@gmail.com',
            'lastName' => 'Nekolethal',
            'img' =>'https://img.freepik.com/foto-gratis/anade-real-rodeado-flores-vegetacion-campo-luz-sol_181624-15686.jpg?w=996&t=st=1674656436~exp=1674657036~hmac=0525ff9bf663c6beae1a9bcc2dfe8db1a77b04bb6a61a3cbe4414ef7e08199bd',
            'grade' => 10,
            'isTeacher' => false
        ]);
        User::factory()->create([
            'name' => 'Carmen C',
            'email' => 'karmelacfer@gmail.com',
            'lastName' => 'Cruces',
            'img' =>'https://img.freepik.com/foto-gratis/anade-real-rodeado-flores-vegetacion-campo-luz-sol_181624-15686.jpg?w=996&t=st=1674656436~exp=1674657036~hmac=0525ff9bf663c6beae1a9bcc2dfe8db1a77b04bb6a61a3cbe4414ef7e08199bd',
            'grade' => 10,
            'isTeacher' => false
        ]);
        User::factory()->create([
            'name' => 'Esther',
            'email' => 'esrherdlz1215@gmail.com',
            'lastName' => 'xxx',
            'img' =>'https://img.freepik.com/foto-gratis/anade-real-rodeado-flores-vegetacion-campo-luz-sol_181624-15686.jpg?w=996&t=st=1674656436~exp=1674657036~hmac=0525ff9bf663c6beae1a9bcc2dfe8db1a77b04bb6a61a3cbe4414ef7e08199bd',
            'grade' => 10,
            'isTeacher' => false
        ]);
        User::factory()->create([
            'name' => 'Paloma R',
            'email' => 'ruizpaloma9@gmail.com',
            'lastName' => 'Ruiz',
            'img' =>'https://img.freepik.com/foto-gratis/cabeza-gallina-cerca_181624-1232.jpg?w=1380&t=st=1674656113~exp=1674656713~hmac=0329b670bc2e338592eb50f60806ea13af37e0ed4c7ccb7f2667416699b75feb',
            'grade' => 9,
            'isTeacher' => false
        ]);

        User::factory()->create([
            'name' => 'Paloma B',
            'email' => 'palomita@gmail.com',
            'lastName' => 'Babot',
            'img' =>'https://img.freepik.com/foto-gratis/primer-plano-lindo-gatito-descansando-sofa_181624-37234.jpg?t=st=1674656384~exp=1674656984~hmac=42705324c66bc0dd01804f182f107e7b346a8ad60963f6c0c46e6482c26dff79',
            'grade' => 8,
            'isTeacher' => false
        ]);

        User::factory()->create([
            'name' => 'Veronica',
            'email' => 'komar2002@gmail.com',
            'lastName' => 'Komarova',
            'img' =>'https://img.freepik.com/foto-gratis/anade-real-rodeado-flores-vegetacion-campo-luz-sol_181624-15686.jpg?w=996&t=st=1674656436~exp=1674657036~hmac=0525ff9bf663c6beae1a9bcc2dfe8db1a77b04bb6a61a3cbe4414ef7e08199bd',
            'grade' => 10,
            'isTeacher' => false
        ]);

        User::factory()->create([
            'name' => 'Sandra',
            'email' => 'sandralilder@gmail.com',
            'lastName' => 'Leon',
            'img' =>'https://img.freepik.com/foto-gratis/anade-real-rodeado-flores-vegetacion-campo-luz-sol_181624-15686.jpg?w=996&t=st=1674656436~exp=1674657036~hmac=0525ff9bf663c6beae1a9bcc2dfe8db1a77b04bb6a61a3cbe4414ef7e08199bd',
            'grade' => 10,
            'isTeacher' => false
        ]);
        User::factory()->create([
            'name' => 'Raquel',
            'email' => 'palomofuentesraquel2002@gmail.com',
            'lastName' => 'Palomo',
            'img' =>'https://img.freepik.com/foto-gratis/anade-real-rodeado-flores-vegetacion-campo-luz-sol_181624-15686.jpg?w=996&t=st=1674656436~exp=1674657036~hmac=0525ff9bf663c6beae1a9bcc2dfe8db1a77b04bb6a61a3cbe4414ef7e08199bd',
            'grade' => 10,
            'isTeacher' => false
        ]);
        User::factory()->create([
            'name' => 'Sierri',
            'email' => 'sierri.peri@gmail.com',
            'lastName' => 'Perex',
            'img' =>'https://img.freepik.com/foto-gratis/anade-real-rodeado-flores-vegetacion-campo-luz-sol_181624-15686.jpg?w=996&t=st=1674656436~exp=1674657036~hmac=0525ff9bf663c6beae1a9bcc2dfe8db1a77b04bb6a61a3cbe4414ef7e08199bd',
            'grade' => 10,
            'isTeacher' => false
        ]);
        User::factory()->create([
            'name' => 'Himorell',
            'email' => 'himorellj@gmail.com',
            'lastName' => 'Jaramillo',
            'img' =>'https://img.freepik.com/foto-gratis/anade-real-rodeado-flores-vegetacion-campo-luz-sol_181624-15686.jpg?w=996&t=st=1674656436~exp=1674657036~hmac=0525ff9bf663c6beae1a9bcc2dfe8db1a77b04bb6a61a3cbe4414ef7e08199bd',
            'grade' => 10,
            'isTeacher' => false
        ]);
        User::factory()->create([
            'name' => 'Leidy',
            'email' => 'leidyvi@gmail.com',
            'lastName' => 'Villamil',
            'img' =>'https://img.freepik.com/foto-gratis/anade-real-rodeado-flores-vegetacion-campo-luz-sol_181624-15686.jpg?w=996&t=st=1674656436~exp=1674657036~hmac=0525ff9bf663c6beae1a9bcc2dfe8db1a77b04bb6a61a3cbe4414ef7e08199bd',
            'grade' => 10,
            'isTeacher' => false
        ]);
        User::factory()->create([
            'name' => 'Veronica F',
            'email' => 'veflo13@gmail.com',
            'lastName' => 'Flores',
            'img' =>'https://img.freepik.com/foto-gratis/anade-real-rodeado-flores-vegetacion-campo-luz-sol_181624-15686.jpg?w=996&t=st=1674656436~exp=1674657036~hmac=0525ff9bf663c6beae1a9bcc2dfe8db1a77b04bb6a61a3cbe4414ef7e08199bd',
            'grade' => 10,
            'isTeacher' => false
        ]);
        User::factory()->create([
            'name' => 'Adriana',
            'email' => 'agruad@gmail.com',
            'lastName' => 'Aguilar',
            'img' =>'https://img.freepik.com/foto-gratis/anade-real-rodeado-flores-vegetacion-campo-luz-sol_181624-15686.jpg?w=996&t=st=1674656436~exp=1674657036~hmac=0525ff9bf663c6beae1a9bcc2dfe8db1a77b04bb6a61a3cbe4414ef7e08199bd',
            'grade' => 10,
            'isTeacher' => false
        ]);
        User::factory()->create([
            'name' => 'Beatriz',
            'email' => 'beadeavila10@gmail.com',
            'lastName' => 'De Avila',
            'img' =>'https://img.freepik.com/foto-gratis/anade-real-rodeado-flores-vegetacion-campo-luz-sol_181624-15686.jpg?w=996&t=st=1674656436~exp=1674657036~hmac=0525ff9bf663c6beae1a9bcc2dfe8db1a77b04bb6a61a3cbe4414ef7e08199bd',
            'grade' => 10,
            'isTeacher' => false
        ]);
        User::factory()->create([
            'name' => 'Noa',
            'email' => 'anamaria.tz@hotmail.com',
            'lastName' => 'Trujillo',
            'img' =>'https://img.freepik.com/foto-gratis/anade-real-rodeado-flores-vegetacion-campo-luz-sol_181624-15686.jpg?w=996&t=st=1674656436~exp=1674657036~hmac=0525ff9bf663c6beae1a9bcc2dfe8db1a77b04bb6a61a3cbe4414ef7e08199bd',
            'grade' => 10,
            'isTeacher' => false
        ]);
        User::factory()->create([
            'name' => 'Ana',
            'email' => 'ana_rg95@hotmail.com',
            'lastName' => 'Rueda',
            'img' =>'https://img.freepik.com/foto-gratis/anade-real-rodeado-flores-vegetacion-campo-luz-sol_181624-15686.jpg?w=996&t=st=1674656436~exp=1674657036~hmac=0525ff9bf663c6beae1a9bcc2dfe8db1a77b04bb6a61a3cbe4414ef7e08199bd',
            'grade' => 10,
            'isTeacher' => false
        ]);
        User::factory()->create([
            'name' => 'Alba',
            'email' => 'albamrus@gmail.com',
            'lastName' => 'Rus',
            'img' =>'https://img.freepik.com/foto-gratis/anade-real-rodeado-flores-vegetacion-campo-luz-sol_181624-15686.jpg?w=996&t=st=1674656436~exp=1674657036~hmac=0525ff9bf663c6beae1a9bcc2dfe8db1a77b04bb6a61a3cbe4414ef7e08199bd',
            'grade' => 10,
            'isTeacher' => false
        ]);
        User::factory()->create([
            'name' => 'Camila',
            'email' => 'camilaruiz17@gmail.com',
            'lastName' => 'Ruiz',
            'img' =>'https://img.freepik.com/foto-gratis/anade-real-rodeado-flores-vegetacion-campo-luz-sol_181624-15686.jpg?w=996&t=st=1674656436~exp=1674657036~hmac=0525ff9bf663c6beae1a9bcc2dfe8db1a77b04bb6a61a3cbe4414ef7e08199bd',
            'grade' => 10,
            'isTeacher' => false
        ]);
        User::factory()->create([
            'name' => 'Natalia',
            'email' => 'nataliapalomof@gmail.com',
            'lastName' => 'Palomo',
            'img' =>'https://img.freepik.com/foto-gratis/anade-real-rodeado-flores-vegetacion-campo-luz-sol_181624-15686.jpg?w=996&t=st=1674656436~exp=1674657036~hmac=0525ff9bf663c6beae1a9bcc2dfe8db1a77b04bb6a61a3cbe4414ef7e08199bd',
            'grade' => 10,
            'isTeacher' => false
        ]);
        User::factory()->create([
            'name' => 'Paula',
            'email' => 'npagudelo884@gmail.com',
            'lastName' => 'Agudelo',
            'img' =>'https://img.freepik.com/foto-gratis/anade-real-rodeado-flores-vegetacion-campo-luz-sol_181624-15686.jpg?w=996&t=st=1674656436~exp=1674657036~hmac=0525ff9bf663c6beae1a9bcc2dfe8db1a77b04bb6a61a3cbe4414ef7e08199bd',
            'grade' => 10,
            'isTeacher' => false
        ]);
        User::factory()->create([
            'name' => 'JM',
            'email' => 'josemiguel.quesada@factoriaf5.org',
            'lastName' => 'JotaEme',
            'img' =>'https://img.freepik.com/foto-gratis/anade-real-rodeado-flores-vegetacion-campo-luz-sol_181624-15686.jpg?w=996&t=st=1674656436~exp=1674657036~hmac=0525ff9bf663c6beae1a9bcc2dfe8db1a77b04bb6a61a3cbe4414ef7e08199bd',
            'grade' => 10,
            'isTeacher' => true
        ]);
        //falta poner imágenes de CLOUDINARY con drag and drop
    }
}
