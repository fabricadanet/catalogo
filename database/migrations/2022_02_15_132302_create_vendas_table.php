<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVendasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendas', function (Blueprint $table) {
            $table->id();
            $table->integer('total');
            $table->integer('frete');
            $table->enum('status', ['Aguardando Pagamento', 'Pagamento Confirmado', 'Pagamento Cancelado', 'Preparando para entrega', 'Em trânsito', 'Entregue', 'Cancelado', 'Devolvido']);
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
      Schema::dropIfExists('vendas');
    }
}
