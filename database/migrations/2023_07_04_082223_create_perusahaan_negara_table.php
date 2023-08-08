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
    {
        Schema::create('perusahaan_negara', function (Blueprint $table) {
            $table->id('id_negara_perusahaan');
            $table->string('nama_negara')->nullable();
            $table->integer('id_perusahaan')->nullable();
            $table->integer('negara_id')->nullable();
            $table->string('mata_uang')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('perusahaan_negara');
    }
};
