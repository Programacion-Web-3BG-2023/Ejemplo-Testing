<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Persona;

class PersonaTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_ListarPersonas()
    {
        $response = $this->get('/personas');

        $response->assertStatus(200);
        $response->assertViewHas("personas",Persona::all());
        //$response->assertSee("Juan");
    }

    public function test_ListarUnaPersonaQueNoExiste(){
        $response = $this->get('/personas/9999');

        $response->assertStatus(404);

    }

    public function test_ListarUnaPersonaQueExiste(){
        $p = new Persona();
        $p -> id = 100;
        $p -> nombre = "Pepe";
        $p -> apellido = "Gomez";

        $p -> save();
        $response = $this->get('/personas/100');

        $response->assertStatus(200);

    }
}
