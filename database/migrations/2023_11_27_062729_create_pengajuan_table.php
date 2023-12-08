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
        Schema::create('pengajuans', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->unsignedInteger('total_penawaran')->default(0);
            $table->integer('status')->default(201); //status = [201, menunggu penawaran], [202, k3 sudah apply harga],
                                                     //         [203, ditolak/ajukan penawaran baru], [200, diterima]
            $table->integer('status_po')->default(201); //status = [201, menunggu penawaran], [202, k3 sudah generate PO],
                                                        //       [203, ditolak/ajukan penawaran baru], [200, diterima & sudah dijadwalkan]
            $table->date('tanggal_penawaran')->nullable();
            $table->date('tanggal_penjadwalan')->nullable(); // [jika tidak null artinya sudah dijadwalkan]
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengajuan');
    }
};
