<?php

namespace Tests\Feature;


use Tests\TestCase;
use App\Models\User;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CRUDUserTest extends TestCase
{
    /**
     *
     * @return void
     */
    use RefreshDatabase;

    public function test_listUserAppearInHomeViewByTheTeacher(){
        $this->withExceptionHandling();

        $users = User::factory(2)->create();
        $user = $users[0];

        $userNoTeacher = User::factory()->create(['isTeacher'=>false]);
        $this->actingAs($userNoTeacher);
        $response=$this->get(route('readUserGrade', $user->id));
        $response -> assertSee($user->name);
        $response ->assertStatus(200)
                ->assertViewIs('readUserGrade');

        $userTeacher = User::factory()->create(['isTeacher'=>true]);
        $this->actingAs($userTeacher);
        $response = $this->get('/homeTeacher');
        $response -> assertSee($user->name);
        $response ->assertStatus(200)
                ->assertViewIs('home');
    }

    public function test_aUserCanBeDeletedByTheTeacher(){
        $this->withExceptionHandling();

        $user = User::factory()->create();
        $this->assertCount(1,User::all());

        $userNoTeacher = User::factory()->create(['isTeacher'=>false]);
        $this->actingAs($userNoTeacher);
        $response = $this->delete(route('deleteUser',$user->id));
        $this->assertCount(2,User::all());

        $userTeacher = User::factory()->create(['isTeacher'=>true]);
        $this->actingAs($userTeacher);
        $response = $this->delete(route('deleteUser',$user->id));
        $this->assertCount(2,User::all());
    }

    public function test_aUserCanBeCreatedByTheTeacher(){
        $this->withExceptionHandling();

        $userTeacher = User::factory()->create(['isTeacher'=>true]);
        $this->actingAs($userTeacher);
        $response = $this->post(route('storeUser'),
        [
            'name' => 'name',
            'email' => 'email',
            'lastname' => 'lastname',
            'img' =>'img',
            'password' => 'password',
            'group' => 1,
            'isTeacher' => true,
        ]);
        
        $this->assertCount(2, User::all());

        $userNoTeacher = User::factory()->create(['isTeacher'=>false]);
        $this->actingAs($userNoTeacher);
        $response = $this->post(route('storeUser'),
        [
            'name' => 'name',
            'email' => 'email',
            'lastname' => 'lastname',
            'img' =>'img',
            'password' => 'password',
            'group' => 1,
            'isTeacher' => false
        ]);
        
        $this->assertCount(3, User::all());
    }

    public function test_aUserCanBeUpdatedByTheTeacher(){
        $this->withExceptionHandling();
        
        $user = User::factory()->create();
        $this->assertCount(1,User::all());

        $userTeacher = User::factory()->create(['isTeacher' => true]);
        $this->actingAs($userTeacher);
        $response = $this->patch(route('updateUser', $user->id), ['name' => 'New Name']);
        $this->assertEquals('New Name', User::first()->name);

        $userNoTeacher = User::factory()->create(['isTeacher' => false]);
        $this->actingAs($userNoTeacher);
        $response = $this->patch(route('updateUser', $user->id), ['name' => 'New Name if no Teacher']);
        $this->assertEquals('New Name', User::first()->name);
    }

    public function test_aUserCanBeShowed(){
        $this->withExceptionHandling();
        $user=User::factory()->create();
        $this->assertCount(1,User::all());
        $this->actingAs($user);
        $response=$this->get(route('readUserGrade', $user->id));
        $response->assertSee($user->name);
        $response->assertStatus(200)->assertViewIs('readUserGrade');
    }
    
}