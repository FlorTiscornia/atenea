<?php

namespace Tests\Feature;


use Tests\TestCase;
use App\Models\User;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CRUDUserTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    use RefreshDatabase;

    public function test_listUserAppearInHomeView(){
        $this->withExceptionHandling();
        $users = User::factory(3)->create();
        $user = $users[0];
        $response = $this->get('/');
        $response->assertSee($user->name);
        $response->assertStatus(200)
                ->assertViewIs('home');
    }  
    public function test_aUserCanBeDeleted(){
            $this->withExceptionHandling();
            $users = User::factory()->create();
            $this->assertCount(1, User::all());

            $response = $this->delete(route('deleteUser', $users->id));
            $this->assertCount(0, User::all());
    }

    public function test_aUserCanBeCreated(){
        $this->withExceptionHandling();
        $response = $this->post(route('storeUser'),
        [
            'name' => 'name',
            'email' => 'email',
            'lastName' => 'lastName',
            'img' =>'img',
            'password' => bcrypt('password'),
            'group' => 1,
            'isTeacher' => false
        ]);
        $this->assertCount(1, User::all());
    }

    
}