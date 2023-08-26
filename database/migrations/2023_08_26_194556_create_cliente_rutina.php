<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClienteRutina extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cliente_rutina', function (Blueprint $table) {
            $table->id();
			$table->integer("user_id");
			$table->integer("rutina_id");
			$table->integer("cliente_id");
			$table->integer("cliente_rutina_id");
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
        Schema::dropIfExists('cliente_rutina');
    }
}
