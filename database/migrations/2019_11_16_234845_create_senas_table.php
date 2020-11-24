<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSenasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('senas', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('CON',10)->nullable();
            $table->integer('A');
            $table->integer('B');
            $table->integer('C');
            $table->integer('D');
            $table->integer('E');
            $table->integer('F');
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
        Schema::dropIfExists('senas');
    }
}
