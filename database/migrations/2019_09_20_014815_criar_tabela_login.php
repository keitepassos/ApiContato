<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarTabelaLogin extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    { 
       // Schema::dropIfExists('login');
        Schema::create('login', function (Blueprint $table) {
            $table->increments('id');
            $table->string('log_login')->unique(); 
            $table->string('log_nome')->nullable();
            $table->string('log_senha'); 
            $table->boolean('log_ativo')->default(true); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('login');
    }
}
