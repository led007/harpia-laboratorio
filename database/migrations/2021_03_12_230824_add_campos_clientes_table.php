<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCamposClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('clientes', function (Blueprint $table) {
            $table->string('telefone', 15)->nullable();
            $table->string('cep', 9)->nullable();
            $table->string('logradouro', 150)->nullable();
            $table->string('bairro', 70)->nullable();
            $table->string('numero', 10)->nullable();
            $table->string('complemento', 100)->nullable();
            $table->string('cidade', 70)->nullable();
            $table->string('uf', 2)->nullable();

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
            $table->dropColumn('telefone');
            $table->dropColumn('cep');
            $table->dropColumn('logradouro');
            $table->dropColumn('bairro');
            $table->dropColumn('numero');
            $table->dropColumn('complemento');
            $table->dropColumn('cidade');
            $table->dropColumn('uf');
        });
    }
}
