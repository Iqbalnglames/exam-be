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
        Schema::create('imtihans', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('satu');
            $table->string('dua');
            $table->string('tiga');
            $table->string('empat');
            $table->string('lima');
            $table->string('enam');
            $table->string('tujuh');
            $table->string('delapan');
            $table->string('sembilan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('imtihans');
    }
};
