<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peminjaman_barang', function (Blueprint $table) {
            $table->id();
            $table->string('id_peminjaman');
            $table->string('id_perangkat');
            $table->string('nama_peminjam');
            $table->string('tgl_peminjaman');
            $table->string('tujuan_peminjaman');
            $table->string('jenis_perangkat');
            $table->string('jumlah_peminjaman');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('peminjaman_barang');
    }
};
