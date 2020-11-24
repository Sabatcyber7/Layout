<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjetosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projetos', function (Blueprint $table) {
            $table->bigIncrements('id');
            
            $table->string('prospectro',300)->nullable();
            $table->string('tp_solucao',200)->nullable();
            $table->string('linguagem',200)->nullable();
            $table->string('banco_dados',200)->nullable();
            $table->string('suporte',200)->nullable();
            $table->longText('obs')->nullable();
            
            
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
        Schema::dropIfExists('projetos');
    }
}
