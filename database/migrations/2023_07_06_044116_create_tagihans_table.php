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
        Schema::create('tagihans', function (Blueprint $table) {
            $table->id();
            $table->string('jumlah_tagihan');
            $table->dateTime('tanggal_dibayar')->nullable();
            $table->boolean('status_pembayaran')->default(0);
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
        Schema::dropIfExists('tagihans');
    }
};
