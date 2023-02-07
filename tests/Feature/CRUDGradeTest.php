<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CRUDGradeTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    use RefreshDatabase;

    public function test_listGradesAppearInShowUserView(){

        $this->withExceptionHandling();
        $grades = Grade::factory(3)->create();
        $grade = $grades[0];

        $response = $this->get('/home');
        $response->assertSee($grade->trimester);
        $response->assertStatus(200)
                ->assertViewIs('home');
    }

}


