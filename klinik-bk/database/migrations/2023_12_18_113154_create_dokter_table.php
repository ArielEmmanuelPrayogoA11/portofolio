<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDokterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dokter', function (Blueprint $table) {
            $table->id();

           
            $table->unsignedBigInteger('user_id');
            $table->string('nama');
            $table->string('alamat');
            $table->string('no_hp');
            $table->unsignedBigInteger('id_poli');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('id_poli')->references('id')->on('poli');
        });
    }

    public function down()
    {
        Schema::dropIfExists('dokter');
    }
}