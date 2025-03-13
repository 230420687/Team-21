<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RegistrationControllerTest extends TestCase
{
    use RefreshDatabase;
//this tests the registration page
    /** @test */
    public function display_registration()
    {
        //assert registration page can be viewed
        $response = $this->get('/register');
        $response->assertStatus(200)
                ->assertViewIs('Register');
    }
    /** @test */
    public function test_registration()
    {
        //assert registration page can be viewed
        $data = $this->post('/register', [
            'name' => 'Lebron James',
            'email' => 'lebron.james@aston.ac.uk',
            'password' => 'football123',
        ]);

        $response->$this->post('/register',$data);
        
        // Assert that the session has a success message
        $response->assertSessionHas('success', 'You have completed Registration');

        // Assert the user was added to the database
        $this->assertDatabaseHas('users', [
            'name'  => 'Lebron James',
            'email' => 'lebron.james@aston.ac.uk',
        ]);
    }
        
        /** @test */
        public function invalid_data()
        {
            // Send an empty POST request for error to apear
            $response = $this->post('/register', []);
    
            // Assert errors show for each empty field
            $response->assertSessionHasErrors(['name', 'email', 'password']);
        }
    }



