<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFieldsClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('clientes', function (Blueprint $table) {
            $table->string('nome_sistema')->nullable();
            $table->string('nome_tef')->nullable();
            $table->string('regime_tributario')->nullable();
            $table->string('telefone_fixo')->nullable();
            $table->string('telefone_movel')->nullable();
            $table->string('contato')->nullable();
            $table->string('insc_estatudal')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('clientes', function (Blueprint $table) {
            //
        });
    }
}
