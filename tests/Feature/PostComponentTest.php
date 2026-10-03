<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PostComponentTest extends TestCase
{
    use RefreshDatabase;

    public function test_example(): void
    {
        $response = $this->get('/posts');

        $response->assertStatus(200);
    }

    public function test_alert_dan_card_muncul_saat_post_dibuat()
    {
        $response = $this->post('/posts', [
            'title' => 'Judul Post Testing',
            'body' => 'Ini adalah isi konten post testing minimal 10 karakter.',
        ]);

        $response->assertSessionHas('success');
        $response->assertRedirect('/posts');

        $this->get('/posts')->assertSee('Judul Post Testing');
    }
}
