<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('cuentas_corrientes', function (Blueprint $table) {
            $table->engine = "InnoDB";

            $table->bigIncrements('id');
            $table->bigInteger('id_cliente')->unsigned();  //Llave foranea a la tabla clientes
            $table->string('name');
            $table->decimal('saldo', 10, 2);

            $table->timestamps();

            $table->foreign('id_cliente')->references('id')->on('clientes')->onDelete("cascade");
            // llave foranea en CAMPO que referencia al ID de la TABLA clientes
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cuenta_corrientes');
    }
};
