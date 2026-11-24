<?php

namespace Tests\Feature;

use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    public function test_the_application_returns_a_successful_response(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertHeader('X-Content-Type-Options', 'nosniff');
        $response->assertSee('Senior Full-Stack Engineer');
        $response->assertSee('Weenha');
    }

    public function test_admin_login_uses_a_hash_and_creates_an_authenticated_session(): void
    {
        config([
            'services.admin.password_hash' => Hash::make('test-password'),
            'services.admin.password' => null,
        ]);

        $response = $this->post('/login', ['password' => 'test-password']);

        $response->assertRedirect(route('dashboard'));
        $this->assertTrue(session('authenticated'));
    }

    public function test_logout_requires_post_and_invalidates_admin_access(): void
    {
        $this->withSession(['authenticated' => true]);

        $this->get('/logout')->assertStatus(405);
        $this->post('/logout')->assertRedirect(route('app'));
        $this->assertNull(session('authenticated'));
    }
}
