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
        Schema::create('denda', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_anggota'); 
            $table->decimal('jumlah_denda', 8, 2); 
            $table->text('notes')->nullable(); 
            $table->timestamps();

            $table->foreign('id_anggota')->references('id')->on('anggota')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('denda');
    }
};
