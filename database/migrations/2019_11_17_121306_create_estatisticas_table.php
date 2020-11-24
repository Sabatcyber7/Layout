<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstatisticasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estatisticas', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('DIA',10)->nullable();

            $table->integer('NR')->nullable();
            $table->integer('VZ')->nullable();
            $table->integer('AT')->nullable();
            $table->integer('MD')->nullable();

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
        Schema::dropIfExists('estatisticas');
    }
}
