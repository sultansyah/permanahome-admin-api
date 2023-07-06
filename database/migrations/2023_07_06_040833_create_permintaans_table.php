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
        Schema::create('permintaans', function (Blueprint $table) {
            $table->id();
            $table->string('jenis')->nullable();
            $table->string('status')->default('Dalam Pemeriksaan');
            $table->string('prioritas')->default('Normal');
            $table->string('deskripsi');
            $table->dateTime('tanggal_diselesaikan');
            $table->string('tindakan')->nullable();
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('permana_home_number_id')->constrained('permana_home_numbers');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('permintaans');
    }
};
