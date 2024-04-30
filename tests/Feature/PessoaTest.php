<?php

namespace Tests\Feature;

use App\Models\Pessoa;
use Database\Seeders\PessoaSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Artisan;
use Tests\TestCase;

class PessoaTest extends TestCase
{
    use RefreshDatabase;

    public function setUp(): void
    {
        parent::setUp();
        Artisan::call('migrate');
    }

    public function test_seed_50_pessoas()
    {
        $this->seed(PessoaSeeder::class);
        $this->assertDatabaseCount('pessoas', 50);
    }

    public function test_people_screen_can_be_rendered(): void
    {
        $response = $this->get('/pessoas');

        $response->assertStatus(200);
    }

    function test_create_screen_can_be_rendered(): void
    {
        $this->get(route('pessoas.create'))->assertStatus(200);
    }

    function test_edit_screen_can_be_rendered(): void
    {
        $pessoa = Pessoa::factory()->create();
        $this->get(route('pessoas.edit', [$pessoa]))->assertStatus(200);
    }

    function test_show_screen_can_be_rendered(): void
    {
        $pessoa = Pessoa::factory()->create();
        $this->get(route('pessoas.show', [$pessoa]))->assertStatus(200);
    }
}
