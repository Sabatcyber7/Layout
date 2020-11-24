<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContratantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contratantes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome',50)->nullable();
            $table->string('nacionalidade',20)->nullable();
            $table->string('estado_civil',20)->nullable();
            $table->string('profissao',50)->nullable();
            $table->string('identidade',15)->nullable();
            $table->string('bairro',100)->nullable();
            $table->string('cep',15)->nullable();
            $table->string('cidade',40)->nullable();
            $table->string('estado',40)->nullable();
            $table->string('representante',50)->nullable();
            $table->string('nome_empresa',50)->nullable();
            $table->string('cnpj',20)->nullable();
            $table->string('IM',30)->nullable();
            $table->string('IM_rua',300)->nullable();
            $table->string('IM_bairro',40)->nullable();
            $table->string('IM_cep',15)->nullable();
            $table->string('IM_cidade',40)->nullable();
            $table->string('IM_estado',40)->nullable();
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
        Schema::dropIfExists('contratantes');
    }
}
