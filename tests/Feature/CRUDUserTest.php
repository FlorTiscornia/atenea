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
            $user = User::factory()->create();
            $this->assertCount(1, User::all());

            $userNoTeacher = User::factory()->create(['isTeacher' => false]);
            $this->actingAs($userNoTeacher);
            $response = $this->delete(route('deleteUser', $user->id));
            $this->assertCount(1, User::all());

            $userTeacher = User::factory()->create(['isTeacher' => true]);
            $this->actingAs($userTeacher);
            $response = $this->delete(route('deleteUser', $user->id));
            $this->assertCount(0, User::all());
    }


    /* public function test_anAdoptionCanBeCreated(){
            $this->withExceptionHandling();

            $userAdmin = User::factory()->create(['isAdmin' => true]);
            $this->actingAs($userAdmin);

            $response = $this->post((route('storeAdoption')),
            [
                'name' => 'name',
                'description' => 'description',
                'spaces' => '80',
                'img' => 'img',
                'datetime' => '2022/12/24 18:00:00'
            ]);
            $this->assertCount(1, Adoption::all());

            $userNoAdmin = User::factory()->create(['isAdmin' => false]);
            $this->actingAs($userNoAdmin);
            
            $response = $this->post((route('storeAdoption')),
            [
                'name' => 'name',
                'description' => 'description',
                'spaces' => '80',
                'img' => 'img',
                'datetime' => '2022/12/24 18:00:00'
            ]);
            $this->assertCount(1, Adoption::all());
    } */



    /* public function test_anAdoptionCanBeUpdated(){
        $this->withExceptionHandling();
        $adoption = Adoption::factory()->create();
        $this->assertCount(1, Adoption::all());

        $userAdmin = User::factory()->create(['isAdmin' => true]);
        $this->actingAs($userAdmin);
        $response = $this->patch(route('updateAdoption', $adoption->id), ['name' => 'New Name']);
        $this->assertEquals('New Name', Adoption::first()->name);

        $userNoAdmin = User::factory()->create(['isAdmin' => false]);
        $this->actingAs($userNoAdmin);
        $response = $this->patch(route('updateAdoption', $adoption->id), ['name' => 'New Name if not Admin']);
        $this->assertEquals('New Name', Adoption::first()->name);
    } */


    /* public function test_anAdoptionCanBeShowed(){
        $this->withExceptionHandling();
        $adoption = Adoption::factory()->create();
        $this->assertCount(1, Adoption::all());
        $response = $this->get(route('showAdoption', $adoption->id));
        $response->assertSee($adoption->name);
        $response->assertStatus(200)->assertViewIs('showAdoption');
    } */
}