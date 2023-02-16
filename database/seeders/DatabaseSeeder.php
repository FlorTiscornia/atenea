<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Grade;
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
            'name' => 'Elena Mª',
            'email' => 'elenarjonap@gmail.com',
            'lastname' => 'Pérez Arjona',
            'img' =>'https://st2.depositphotos.com/2703645/6084/v/950/depositphotos_60844877-stock-illustration-woman-character-avatar.jpg',
            'group' => 1,
            'isTeacher' => false
        ]);

        User::factory()->create([
            'name' => 'Lola G',
            'email' => 'canal030w@gmail.com',
            'lastname' => 'García Morcillo',
            'img' =>'https://st2.depositphotos.com/2703645/12072/v/950/depositphotos_120725498-stock-illustration-woman-avatar-character.jpg',
            'group' => 1,
            'isTeacher' => false
        ]);

        User::factory()->create([
            'name' => 'Carmen G',
            'email' => 'carmengallardopozo@gmail.com',
            'lastname' => 'Gallardo Pozo',
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
            'lastname' => 'Navarro López',
            'img' =>'https://st2.depositphotos.com/2703645/6084/v/950/depositphotos_60844045-stock-illustration-woman-character-avatar.jpg',
            'group' => 1,
            'isTeacher' => false
        ]);
        User::factory()->create([
            'name' => 'Alesia',
            'email' => 'alesia.nekolethal@gmail.com',
            'lastname' => 'Baldeón Machuca',
            'img' =>'https://st2.depositphotos.com/1006318/5909/v/600/depositphotos_59094217-stock-illustration-businesswoman-profile-icon.jpg',
            'group' => 1,
            'isTeacher' => false
        ]);
        User::factory()->create([
            'name' => 'Carmen C',
            'email' => 'karmelacfer@gmail.com',
            'lastname' => 'Cruces Fernández',
            'img' =>'https://st2.depositphotos.com/2703645/6084/v/950/depositphotos_60848463-stock-illustration-woman-avatar.jpg',
            'group' => 1,
            'isTeacher' => false
        ]);
        User::factory()->create([
            'name' => 'Esther',
            'email' => 'esrherdlz1215@gmail.com',
            'lastname' => 'De Luque Zurita ',
            'img' =>'https://st2.depositphotos.com/2703645/11476/v/950/depositphotos_114764976-stock-illustration-woman-avatar-character.jpg',
            'group' => 1,
            'isTeacher' => false
        ]);
        User::factory()->create([
            'name' => 'Paloma R',
            'email' => 'ruizpaloma9@gmail.com',
            'lastname' => 'Ruiz Ramírez',
            'img' =>'https://st2.depositphotos.com/2703645/12072/v/950/depositphotos_120726078-stock-illustration-woman-avatar-character.jpg',
            'group' => 1,
            'isTeacher' => false
        ]);

        User::factory()->create([
            'name' => 'Paloma B',
            'email' => 'palomita@gmail.com',
            'lastname' => 'Babot León',
            'img' =>'https://st2.depositphotos.com/2703645/6084/v/950/depositphotos_60845379-stock-illustration-woman-character-avatar.jpg',
            'group' => 1,
            'isTeacher' => false
        ]);

        User::factory()->create([
            'name' => 'VeroniKa',
            'email' => 'komar2002@gmail.com',
            'lastname' => 'Komarova',
            'img' =>'https://st2.depositphotos.com/19450650/42951/v/1600/depositphotos_429519474-stock-illustration-woman-silhouette-portrait-vector-illustration.jpg',
            'group' => 1,
            'isTeacher' => false
        ]);

        User::factory()->create([
            'name' => 'Sandra',
            'email' => 'sandralilder@gmail.com',
            'lastname' => 'Leon del Risco',
            'img' =>'https://st2.depositphotos.com/2703645/6084/v/950/depositphotos_60848263-stock-illustration-woman-avatar.jpg',
            'group' => 1,
            'isTeacher' => false
        ]);
        User::factory()->create([
            'name' => 'Raquel',
            'email' => 'palomofuentesraquel2002@gmail.com',
            'lastname' => 'Palomo Fuentes',
            'img' =>'https://st2.depositphotos.com/2703645/11476/v/950/depositphotos_114763844-stock-illustration-woman-avatar-character.jpg',
            'group' => 1,
            'isTeacher' => false
        ]);
        User::factory()->create([
            'name' => 'Sierri',
            'email' => 'sierri.peri@gmail.com',
            'lastname' => 'Pérez Sánchez',
            'img' =>'https://st2.depositphotos.com/2703645/12072/v/950/depositphotos_120728726-stock-illustration-woman-avatar-character.jpg',
            'group' => 1,
            'isTeacher' => false
        ]);
        User::factory()->create([
            'name' => 'Himo',
            'email' => 'himorellj@gmail.com',
            'lastname' => 'Jaramillo González ',
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
            'name' => 'Verónica F',
            'email' => 'veflo13@gmail.com',
            'lastname' => 'Flores Gutiérrez',
            'img' =>'https://st2.depositphotos.com/2703645/11438/v/950/depositphotos_114387610-stock-illustration-woman-avatar-character.jpg',
            'group' => 1,
            'isTeacher' => false
        ]);
        User::factory()->create([
            'name' => 'Adriana',
            'email' => 'agruad@gmail.com',
            'lastname' => 'Aguilar Ruiz',
            'img' =>'https://st2.depositphotos.com/1006318/5909/v/950/depositphotos_59094623-stock-illustration-female-avatar-woman.jpg',
            'group' => 1,
            'isTeacher' => false
        ]);
        User::factory()->create([
            'name' => 'Beatriz',
            'email' => 'beadeavila10@gmail.com',
            'lastname' => 'De Ávila Jiménez',
            'img' =>'https://st4.depositphotos.com/2703645/24892/v/1600/depositphotos_248920644-stock-illustration-colorful-vector-illustration-woman-avatar.jpg',
            'group' => 1,
            'isTeacher' => false
        ]);
        User::factory()->create([
            'name' => 'Noa',
            'email' => 'anamaria.tz@hotmail.com',
            'lastname' => 'Trujillo Zamora',
            'img' =>'https://st2.depositphotos.com/2703645/11438/v/950/depositphotos_114389662-stock-illustration-woman-avatar-character.jpg',
            'group' => 1,
            'isTeacher' => false
        ]);
        User::factory()->create([
            'name' => 'Ana',
            'email' => 'ana_rg95@hotmail.com',
            'lastname' => 'Rueda Guiu',
            'img' =>'https://st2.depositphotos.com/2703645/11326/v/950/depositphotos_113264588-stock-illustration-womaan-avatar-character.jpg',
            'group' => 1,
            'isTeacher' => false
        ]);
        User::factory()->create([
            'name' => 'Alba',
            'email' => 'albamrus@gmail.com',
            'lastname' => 'Rus Martínez',
            'img' =>'https://st2.depositphotos.com/2703645/6084/v/950/depositphotos_60848009-stock-illustration-woman-character-avatar.jpg',
            'group' => 1,
            'isTeacher' => false
        ]);
        User::factory()->create([
            'name' => 'Camila',
            'email' => 'camilaruiz17@gmail.com',
            'lastname' => 'Ruiz Gutiérrez',
            'img' =>'https://st2.depositphotos.com/2703645/6084/v/950/depositphotos_60847945-stock-illustration-woman-character-avatar.jpg',
            'group' => 1,
            'isTeacher' => false
        ]);
        User::factory()->create([
            'name' => 'Natalia',
            'email' => 'nataliapalomof@gmail.com',
            'lastname' => 'Palomo Fuentes',
            'img' =>'https://st2.depositphotos.com/1006318/5909/v/950/depositphotos_59095633-stock-illustration-businesswoman-profile-icon.jpg',
            'group' => 1,
            'isTeacher' => false
        ]);
        User::factory()->create([
            'name' => 'Paula',
            'email' => 'npagudelo884@gmail.com',
            'lastname' => 'Ramírez Agudelo',
            'img' =>'https://st2.depositphotos.com/2703645/12072/v/950/depositphotos_120724058-stock-illustration-woman-avatar-character.jpg',
            'group' => 1,
            'isTeacher' => false
        ]);
        User::factory()->create([
            'name' => 'JM/Celia',
            'email' => 'celieme@factoriaf5.org',
            'lastname' => 'Factorizados',
            'img' =>'https://img.freepik.com/vector-premium/pato-goma-amarillo-juguete-bano-bebes_501173-75.jpg?w=826',
            'group' => 1,
            'isTeacher' => true
        ]);


        Grade::factory()->create([
            'trimester' => 1,
            'subject' => 'Lengua',
            'exam' => 1,
            'year' =>2023,
            'grade' => 8,
            'idUser' => 1
        ]);
        Grade::factory()->create([
            'trimester' => 1,
            'subject' => 'Lengua',
            'exam' => 2,
            'year' =>2023,
            'grade' => 8,
            'idUser' => 1
        ]);
        Grade::factory()->create([
            'trimester' => 1,
            'subject' => 'Lengua',
            'exam' => 3,
            'year' =>2023,
            'grade' => 8,
            'idUser' => 1
        ]);

        Grade::factory()->create([
            'trimester' => 1,
            'subject' => 'Inglés',
            'exam' => 1,
            'year' =>2023,
            'grade' => 2,
            'idUser' => 1
        ]);

        Grade::factory()->create([
            'trimester' => 1,
            'subject' => 'Inglés',
            'exam' => 2,
            'year' =>2023,
            'grade' => 8,
            'idUser' => 1
        ]);
        Grade::factory()->create([
            'trimester' => 1,
            'subject' => 'Inglés',
            'exam' => 3,
            'year' =>2023,
            'grade' => 6,
            'idUser' => 1
        ]);
        Grade::factory()->create([
            'trimester' => 1,
            'subject' => 'Matemáticas',
            'exam' => 1,
            'year' =>2023,
            'grade' => 4,
            'idUser' => 1
        ]);
        Grade::factory()->create([
            'trimester' => 1,
            'subject' => 'Matemáticas',
            'exam' => 2,
            'year' =>2023,
            'grade' => 3,
            'idUser' => 1
        ]);
        Grade::factory()->create([
            'trimester' => 1,
            'subject' => 'Matemáticas',
            'exam' => 3,
            'year' =>2023,
            'grade' => 10,
            'idUser' => 1
        ]);

        Grade::factory()->create([
            'trimester' => 1,
            'subject' => 'Historia',
            'exam' => 1,
            'year' =>2023,
            'grade' => 9,
            'idUser' => 1
        ]);
        Grade::factory()->create([
            'trimester' => 1,
            'subject' => 'Historia',
            'exam' => 1,
            'year' =>2023,
            'grade' => 9,
            'idUser' => 1
        ]);
        Grade::factory()->create([
            'trimester' => 1,
            'subject' => 'Historia',
            'exam' => 2,
            'year' =>2023,
            'grade' => 15,
            'idUser' => 1
        ]);

        Grade::factory()->create([
            'trimester' => 1,
            'subject' => 'Geografía',
            'exam' => 1,
            'year' =>2023,
            'grade' => 15,
            'idUser' => 1
        ]);
        Grade::factory()->create([
            'trimester' => 1,
            'subject' => 'Geografía',
            'exam' => 2,
            'year' =>2023,
            'grade' => 15,
            'idUser' => 1
        ]);
        Grade::factory()->create([
            'trimester' => 1,
            'subject' => 'Geografía',
            'exam' => 3,
            'year' =>2023,
            'grade' => 15,
            'idUser' => 1
        ]);
        Grade::factory()->create([
            'trimester' => 1,
            'subject' => 'Geografía',
            'exam' => 3,
            'year' =>2023,
            'grade' => 15,
            'idUser' => 4
        ]);
        Grade::factory()->create([
            'trimester' => 1,
            'subject' => 'Lengua',
            'exam' => 1,
            'year' =>2023,
            'grade' => 8,
            'idUser' => 1
        ]);
        Grade::factory()->create([
            'trimester' => 1,
            'subject' => 'Lengua',
            'exam' => 2,
            'year' =>2023,
            'grade' => 8,
            'idUser' => 1
        ]);
        Grade::factory()->create([
            'trimester' => 1,
            'subject' => 'Lengua',
            'exam' => 3,
            'year' =>2023,
            'grade' => 8,
            'idUser' => 1
        ]);

        Grade::factory()->create([
            'trimester' => 1,
            'subject' => 'Inglés',
            'exam' => 1,
            'year' =>2023,
            'grade' => 10,
            'idUser' => 4
        ]);

        Grade::factory()->create([
            'trimester' => 1,
            'subject' => 'Inglés',
            'exam' => 2,
            'year' =>2023,
            'grade' => 10,
            'idUser' => 4
        ]);
        Grade::factory()->create([
            'trimester' => 1,
            'subject' => 'Inglés',
            'exam' => 3,
            'year' =>2023,
            'grade' => 10,
            'idUser' => 4
        ]);
        Grade::factory()->create([
            'trimester' => 1,
            'subject' => 'Matemáticas',
            'exam' => 1,
            'year' =>2023,
            'grade' => 10,
            'idUser' => 4
        ]);
        Grade::factory()->create([
            'trimester' => 1,
            'subject' => 'Matemáticas',
            'exam' => 2,
            'year' =>2023,
            'grade' => 10,
            'idUser' => 4
        ]);
        Grade::factory()->create([
            'trimester' => 1,
            'subject' => 'Matemáticas',
            'exam' => 3,
            'year' =>2023,
            'grade' => 10,
            'idUser' => 4
        ]);

        Grade::factory()->create([
            'trimester' => 1,
            'subject' => 'Historia',
            'exam' => 1,
            'year' =>2023,
            'grade' => 10,
            'idUser' => 4
        ]);
        Grade::factory()->create([
            'trimester' => 1,
            'subject' => 'Historia',
            'exam' => 1,
            'year' =>2023,
            'grade' => 10,
            'idUser' => 4
        ]);
        Grade::factory()->create([
            'trimester' => 1,
            'subject' => 'Historia',
            'exam' => 2,
            'year' =>2023,
            'grade' => 10,
            'idUser' => 4
        ]);

        Grade::factory()->create([
            'trimester' => 1,
            'subject' => 'Geografía',
            'exam' => 1,
            'year' =>2023,
            'grade' => 10,
            'idUser' => 4
        ]);
        Grade::factory()->create([
            'trimester' => 1,
            'subject' => 'Geografía',
            'exam' => 2,
            'year' =>2023,
            'grade' => 10,
            'idUser' => 4
        ]);
        Grade::factory()->create([
            'trimester' => 1,
            'subject' => 'Geografía',
            'exam' => 3,
            'year' =>2023,
            'grade' => 10,
            'idUser' => 4
        ]);
        Grade::factory()->create([
            'trimester' => 1,
            'subject' => 'Geografía',
            'exam' => 3,
            'year' =>2023,
            'grade' => 10,
            'idUser' => 4
        ]);
    }
}