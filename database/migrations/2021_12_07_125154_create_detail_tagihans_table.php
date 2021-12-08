<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailTagihansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_tagihan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tagihan_id')->constrained('tagihan');
            $table->foreignId('pelanggan_id')->constrained('pelanggan');
            $table->string('payment_term',200)->nullable();
            $table->string('document',200)->nullable();
            $table->date('due_date',200)->nullable();
            $table->string('type',200)->nullable();
            $table->string('outstanding',200)->nullable();
            $table->enum('status',[0,1,2])->default(0);
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
        Schema::dropIfExists('detail_tagihan');
    }
}
