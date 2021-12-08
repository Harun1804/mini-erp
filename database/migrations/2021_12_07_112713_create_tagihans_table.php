<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTagihansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tagihan', function (Blueprint $table) {
            $table->id();
            $table->string('daftar_tagihan_type',200);
            $table->string('daftar_tagihan_no',200);
            $table->date('daftar_tagihan_date');
            $table->date('tanggal_dokumen');
            $table->string('kode_perusahaan',200);
            $table->string('nama_perusahaan',200);
            $table->string('bisnis_area_kode',200);
            $table->string('bisnis_area',200);
            $table->string('code_kolektor',200);
            $table->string('kolektor',200);
            $table->string('no_shipment',200);
            $table->string('shiping_point')->nullable();
            $table->string('total_dokumen',200)->default('0');
            $table->string('total_dokumen_kembali',200)->default('0');
            $table->string('total_giro',200)->default('0');
            $table->date('tanggal_posting')->nullable();
            $table->string('status_tagihan',200);
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
        Schema::dropIfExists('tagihan');
    }
}
