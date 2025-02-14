<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Http\Controller\GaleriController;
use Http\Models\Galeri;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('galeris', function (Blueprint $table) {
            $table->id();
            $table->string('username');
            $table->string('password');
            $table->string('email');
            $table->string('namalengkap');
            $table->string('alamat');
            $table->string('foto')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('galeris');
    }
};
