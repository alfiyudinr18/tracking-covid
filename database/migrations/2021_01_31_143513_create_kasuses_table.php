<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKasusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kasuses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_rw');
            $table->bigInteger('positif');
            $table->bigInteger('sembuh');
            $table->bigInteger('meninggal');
            $table->date('tanggal');
            $table->foreign('id_rw')->references('id')->on('rws')->onDelete('cascade');
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
        Schema::dropIfExists('kasuses');
    }
}
