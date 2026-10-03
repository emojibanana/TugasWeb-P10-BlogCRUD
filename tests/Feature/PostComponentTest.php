<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PostComponentTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function 
    test_alert_dan_card_muncul_saat_post_dibuat() 
    { 
        $response = $this->post('/posts', 
        [ 
            'title' => 'Judul Post Testing', 
            'body' => 'Ini adalah isi konten post testing minimal 10 karakter.', 
        ]); 
        
        // 1\. Uji apakah session flash 'success' terkirim 
        $response->assertSessionHas('success'); 
        
        // 2\. Uji apakah di-redirect ke /posts 
        $response->assertRedirect('/posts'); 

        // 3\. Ikuti redirect dan cek apakah teks judul dan alert muncul di HTML 
        $follow = $this->get('/posts'); $follow->assertSee('Judul Post Testing'); 
    }
}
