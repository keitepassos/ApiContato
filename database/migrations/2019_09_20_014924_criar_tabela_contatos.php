<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarTabelaContatos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       // Schema::dropIfExists('contatos');
        Schema::create('contatos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('con_nome');
            $table->string('con_sobrenome');
            $table->string('con_email');
            $table->string('con_instituicao')->nullable();
            $table->binary('con_foto')->nullable();
            $table->date('con_data_nascimento'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contatos');
    }
}
