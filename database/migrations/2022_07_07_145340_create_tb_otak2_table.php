<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbOtak2Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_otak2', function (Blueprint $table) {
            $table->id();
            $table->string('ulasan');
            $table->string('rate');
            $table->string('sentimen');
            $table->string('datacleaning');
            $table->string('case_folding');
            $table->string('tokenize');
            $table->string('filtering');
            $table->string('normalisasi');
            $table->string('stemming');
            $table->string('prediksi');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_otak2');
    }
}
