<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddFieldLaporanPemesanans extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laporan_pemesanans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('nomor_id_ktp');
            $table->string('nama_lengkap');
            $table->string('alamat');
            $table->string('antar_ambil_pesanan');
            $table->string('daftar_pesanan');
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
        Schema::dropIfExists('add_field_laporan_pemesanans');
    }
}
