<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Http\Controller\Galeri2Controller;
use Http\Models\Galeri2;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('galerisfoto', function (Blueprint $table) {
            $table->id();
            $table->text('judulfoto');
            $table->text('deskripsifoto');
            $table->date('tanggalunggah');
            $table->string('lokasifile');
            $table->string('masukkanfoto')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('galerisfoto');
    }
};
