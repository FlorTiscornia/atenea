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
            'lastname' => 'Perez',
            'img' =>'https://st2.depositphotos.com/2703645/6084/v/950/depositphotos_60844877-stock-illustration-woman-character-avatar.jpg',
            'group' => 1,
            'isTeacher' => false
        ]);

        User::factory()->create([
            'name' => 'Lola G',
            'email' => 'canal030w@gmail.com',
            'lastname' => 'Garcia',
            'img' =>'https://st2.depositphotos.com/2703645/12072/v/950/depositphotos_120725498-stock-illustration-woman-avatar-character.jpg',
            'group' => 1,
            'isTeacher' => false
        ]);

        User::factory()->create([
            'name' => 'Carmen G',
            'email' => 'carmengallardopozo@gmail.com',
            'lastname' => 'Gallardo',
            'img' =>'https://st2.depositphotos.com/2703645/11507/v/950/depositphotos_115077884-stock-illustration-woman-avatar-character.jpg',
            'group' => 1,
            'isTeacher' => false
        ]);

        User::factory()->create([
            'name' => 'Florencia',
            'email' => 'flora.tiscornia@gmail.com',
            'lastname' => 'Tiscornia',
            'img' =>'https://st2.depositphotos.com/1006318/5909/v/950/depositphotos_59094817-stock-illustration-female-avatar-woman.jpg',
            'group' => 1,
            'isTeacher' => false
        ]);
        User::factory()->create([
            'name' => 'Lola N',
            'email' => 'lolanavalop@gmail.com',
            'lastname' => 'Navarro',
            'img' =>'https://st2.depositphotos.com/2703645/6084/v/950/depositphotos_60844045-stock-illustration-woman-character-avatar.jpg',
            'group' => 1,
            'isTeacher' => false
        ]);
        User::factory()->create([
            'name' => 'Alesia',
            'email' => 'alesia.nekolethal@gmail.com',
            'lastname' => 'Nekolethal',
            'img' =>'https://st2.depositphotos.com/1006318/5909/v/600/depositphotos_59094217-stock-illustration-businesswoman-profile-icon.jpg',
            'group' => 1,
            'isTeacher' => false
        ]);
        User::factory()->create([
            'name' => 'Carmen C',
            'email' => 'karmelacfer@gmail.com',
            'lastname' => 'Cruces',
            'img' =>'https://st2.depositphotos.com/2703645/6084/v/950/depositphotos_60848463-stock-illustration-woman-avatar.jpg',
            'group' => 1,
            'isTeacher' => false
        ]);
        User::factory()->create([
            'name' => 'Esther',
            'email' => 'esrherdlz1215@gmail.com',
            'lastname' => 'xxx',
            'img' =>'https://st2.depositphotos.com/2703645/11476/v/950/depositphotos_114764976-stock-illustration-woman-avatar-character.jpg',
            'group' => 1,
            'isTeacher' => false
        ]);
        User::factory()->create([
            'name' => 'Paloma R',
            'email' => 'ruizpaloma9@gmail.com',
            'lastname' => 'Ruiz',
            'img' =>'https://st2.depositphotos.com/2703645/12072/v/950/depositphotos_120726078-stock-illustration-woman-avatar-character.jpg',
            'group' => 1,
            'isTeacher' => false
        ]);

        User::factory()->create([
            'name' => 'Paloma B',
            'email' => 'palomita@gmail.com',
            'lastname' => 'Babot',
            'img' =>'https://st2.depositphotos.com/2703645/6084/v/950/depositphotos_60845379-stock-illustration-woman-character-avatar.jpg',
            'group' => 1,
            'isTeacher' => false
        ]);

        User::factory()->create([
            'name' => 'Veronica',
            'email' => 'komar2002@gmail.com',
            'lastname' => 'Komarova',
            'img' =>'https://st2.depositphotos.com/19450650/42951/v/1600/depositphotos_429519474-stock-illustration-woman-silhouette-portrait-vector-illustration.jpg',
            'group' => 1,
            'isTeacher' => false
        ]);

        User::factory()->create([
            'name' => 'Sandra',
            'email' => 'sandralilder@gmail.com',
            'lastname' => 'Leon',
            'img' =>'https://st2.depositphotos.com/2703645/6084/v/950/depositphotos_60848263-stock-illustration-woman-avatar.jpg',
            'group' => 1,
            'isTeacher' => false
        ]);
        User::factory()->create([
            'name' => 'Raquel',
            'email' => 'palomofuentesraquel2002@gmail.com',
            'lastname' => 'Palomo',
            'img' =>'https://st2.depositphotos.com/2703645/11476/v/950/depositphotos_114763844-stock-illustration-woman-avatar-character.jpg',
            'group' => 1,
            'isTeacher' => false
        ]);
        User::factory()->create([
            'name' => 'Sierri',
            'email' => 'sierri.peri@gmail.com',
            'lastname' => 'Perez',
            'img' =>'https://st2.depositphotos.com/2703645/12072/v/950/depositphotos_120728726-stock-illustration-woman-avatar-character.jpg',
            'group' => 1,
            'isTeacher' => false
        ]);
        User::factory()->create([
            'name' => 'Himorell',
            'email' => 'himorellj@gmail.com',
            'lastname' => 'Jaramillo',
            'img' =>'https://st2.depositphotos.com/2703645/11476/v/950/depositphotos_114764242-stock-illustration-woman-avatar-character.jpg',
            'group' => 1,
            'isTeacher' => false
        ]);
        User::factory()->create([
            'name' => 'Leidy',
            'email' => 'leidyvi@gmail.com',
            'lastname' => 'Villamil',
            'img' =>'https://st2.depositphotos.com/2703645/12072/v/950/depositphotos_120727710-stock-illustration-woman-avatar-character.jpg',
            'group' => 1,
            'isTeacher' => false
        ]);
        User::factory()->create([
            'name' => 'Veronica F',
            'email' => 'veflo13@gmail.com',
            'lastname' => 'Flores',
            'img' =>'https://st2.depositphotos.com/2703645/11438/v/950/depositphotos_114387610-stock-illustration-woman-avatar-character.jpg',
            'group' => 1,
            'isTeacher' => false
        ]);
        User::factory()->create([
            'name' => 'Adriana',
            'email' => 'agruad@gmail.com',
            'lastname' => 'Aguilar',
            'img' =>'https://st2.depositphotos.com/1006318/5909/v/950/depositphotos_59094623-stock-illustration-female-avatar-woman.jpg',
            'group' => 1,
            'isTeacher' => false
        ]);
        User::factory()->create([
            'name' => 'Beatriz',
            'email' => 'beadeavila10@gmail.com',
            'lastname' => 'De Avila',
            'img' =>'https://st4.depositphotos.com/2703645/24892/v/1600/depositphotos_248920644-stock-illustration-colorful-vector-illustration-woman-avatar.jpg',
            'group' => 1,
            'isTeacher' => false
        ]);
        User::factory()->create([
            'name' => 'Noa',
            'email' => 'anamaria.tz@hotmail.com',
            'lastname' => 'Trujillo',
            'img' =>'https://st2.depositphotos.com/2703645/11438/v/950/depositphotos_114389662-stock-illustration-woman-avatar-character.jpg',
            'group' => 1,
            'isTeacher' => false
        ]);
        User::factory()->create([
            'name' => 'Ana',
            'email' => 'ana_rg95@hotmail.com',
            'lastname' => 'Rueda',
            'img' =>'https://st2.depositphotos.com/2703645/11326/v/950/depositphotos_113264588-stock-illustration-womaan-avatar-character.jpg',
            'group' => 1,
            'isTeacher' => false
        ]);
        User::factory()->create([
            'name' => 'Alba',
            'email' => 'albamrus@gmail.com',
            'lastname' => 'Rus',
            'img' =>'https://st2.depositphotos.com/2703645/6084/v/950/depositphotos_60848009-stock-illustration-woman-character-avatar.jpg',
            'group' => 1,
            'isTeacher' => false
        ]);
        User::factory()->create([
            'name' => 'Camila',
            'email' => 'camilaruiz17@gmail.com',
            'lastname' => 'Ruiz',
            'img' =>'https://st2.depositphotos.com/2703645/6084/v/950/depositphotos_60847945-stock-illustration-woman-character-avatar.jpg',
            'group' => 1,
            'isTeacher' => false
        ]);
        User::factory()->create([
            'name' => 'Natalia',
            'email' => 'nataliapalomof@gmail.com',
            'lastname' => 'Palomo',
            'img' =>'https://st2.depositphotos.com/1006318/5909/v/950/depositphotos_59095633-stock-illustration-businesswoman-profile-icon.jpg',
            'group' => 1,
            'isTeacher' => false
        ]);
        User::factory()->create([
            'name' => 'Paula',
            'email' => 'npagudelo884@gmail.com',
            'lastname' => 'Agudelo',
            'img' =>'https://st2.depositphotos.com/2703645/12072/v/950/depositphotos_120724058-stock-illustration-woman-avatar-character.jpg',
            'group' => 1,
            'isTeacher' => false
        ]);
        User::factory()->create([
            'name' => 'JM/Celia',
            'email' => 'celieme@factoriaf5.org',
            'lastname' => 'Factorizados',
            'img' =>'https://img.freepik.com/foto-gratis/anade-real-rodeado-flores-vegetacion-campo-luz-sol_181624-15686.jpg?w=996&t=st=1674',
            'group' => 1,
            'isTeacher' => true
        ]);
        //falta poner imágenes de CLOUDINARY con drag and drop
    }
}
