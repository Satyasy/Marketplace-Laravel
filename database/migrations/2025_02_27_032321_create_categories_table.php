<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            // Pastikan kolom 'name' ada di sini
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('icon')->nullable();
            $table->text('description')->nullable();
            $table->timestamps();
        });
    }
    
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }

    // Dalam CategorySeeder.php
public function run()
{
    // Hapus data yang sudah ada
    \App\Models\Category::truncate();
    
    $categories = [
        // data kategori
    ];
    
    // lanjutkan dengan kode seeder
}

};