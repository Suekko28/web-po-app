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
        Schema::create('detail_alat', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pengajuan_id');
            $table->foreignId('peralatan_id');
            $table->unsignedInteger('qty');
            $table->unsignedInteger('harga')->default(0);
            $table->unsignedInteger('total_unit')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_alat');
    }
};
