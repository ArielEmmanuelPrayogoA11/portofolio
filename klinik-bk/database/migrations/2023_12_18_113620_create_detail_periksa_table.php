<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailPeriksaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_periksa', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_periksa');
            $table->unsignedBigInteger('id_obat');
            $table->timestamps();

            $table->foreign('id_periksa')->references('id')->on('periksa');
       
            $table->foreign('id_obat')->references('id')->on('obat');
        });
    }

    public function down()
    {
        Schema::dropIfExists('detail_periksa');
    }
}
