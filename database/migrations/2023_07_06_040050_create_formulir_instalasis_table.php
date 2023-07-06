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
        Schema::create('formulir_instalasis', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->string('email');
            $table->string('no_hp');
            $table->string('no_wa');
            $table->string('tanda_tangan');
            $table->string('ktp');
            $table->string('negara');
            $table->string('provinsi');
            $table->string('kota');
            $table->string('alamat_instalasi');
            $table->string('kode_pos');
            $table->boolean('is_accept')->default(0);
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('paket_layanan_id')->constrained('paket_layanans');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('formulir_instalasis');
    }
};
