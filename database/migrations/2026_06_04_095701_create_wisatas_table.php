<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('wisatas', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->text('alamat')->nullable();
            $table->string('kategori'); // pantai, gunung_bukit, hutan_alamLiar, airTerjun, budaya_sejarah, pulau_bahari
            $table->decimal('latitude', 10, 7);
            $table->decimal('longitude', 10, 7);
            $table->string('gambar1')->nullable();
            $table->string('gambar2')->nullable();
            $table->string('gambar3')->nullable();
            $table->string('gambar4')->nullable();
            $table->string('gambar5')->nullable();
            $table->string('gambar6')->nullable();
            $table->string('gambar7')->nullable();
            $table->string('gambar8')->nullable();
            $table->string('gambar9')->nullable();
            $table->string('gambar10')->nullable();
            $table->text('deskripsi')->nullable();
            $table->string('elevasi')->nullable();
            $table->boolean('status')->default(true);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('wisatas');
    }
};