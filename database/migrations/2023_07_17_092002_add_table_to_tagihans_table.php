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
        Schema::table('tagihans', function (Blueprint $table) {
            $table->dateTime('tanggal_awal_tagihan')->nullable();
            $table->dateTime('tanggal_akhir_tagihan')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tagihans', function (Blueprint $table) {
            $table->dropColumn('tanggal_awal_tagihan');
            $table->dropColumn('tanggal_akhir_tagihan');
        });
    }
};
