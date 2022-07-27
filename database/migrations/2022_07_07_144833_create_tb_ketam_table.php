<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbKetamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_ketam', function (Blueprint $table) {
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
        Schema::dropIfExists('tb_ketam');
    }
}
