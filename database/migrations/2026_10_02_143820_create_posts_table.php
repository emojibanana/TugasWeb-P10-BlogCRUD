<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void 
    { Schema::create('posts', function (Blueprint $table) { 
            $table->id(); 
            $table->string('title'); // Kolom untuk judul 
            $table->text('body'); // Kolom untuk isi konten 
            $table->timestamps(); // Otomatis membuat created_at &amp; updated_at 
        }); 
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
