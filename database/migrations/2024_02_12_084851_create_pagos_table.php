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
        Schema::create('pagos', function (Blueprint $table) {
            $table->engine = "InnoDB";

            $table->bigIncrements('id');
            $table->bigInteger('id_cuenta')->unsigned();  //Llave foranea a la tabla clientesphp
            $table->bigInteger('id_servicio')->unsigned();  //Llave foranea a la tabla clientesphp

            $table->decimal('monto', 10, 2);
            $table->string('detalles');
            $table->date('fecha');

            $table->timestamps();

            $table->foreign('id_cuenta')->references('id')->on('cuentas')->onDelete("cascade");
            $table->foreign('id_servicio')->references('id')->on('servicios')->onDelete("cascade");

            // llave foranea en CAMPO que referencia al ID de la TABLA clientes
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pagos');
    }
};
