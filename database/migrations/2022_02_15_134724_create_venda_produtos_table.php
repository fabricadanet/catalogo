<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVendaProdutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendas_produtos', function (Blueprint $table) {
            $table->id();

            $table->foreignID('venda_id')->references('id')->on('vendas');
            $table->foreignId('produto_id')->references('id')->on('produtos');
            $table->integer('quantidade');
            $table->integer('subtotal');
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
        Schema::dropIfExists('vendas_produtos');
    }
}
