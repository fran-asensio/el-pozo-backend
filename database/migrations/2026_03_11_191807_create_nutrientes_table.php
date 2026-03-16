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
        Schema::create('nutrientes', function (Blueprint $table) {
            $table->id('id_nutriente');
            $table->unsignedBigInteger('id_producto');
            $table->decimal('calorias', 8, 2);
            $table->decimal('grasas', 8, 2);
            $table->decimal('azucares', 8, 2);
            $table->decimal('proteinas', 8, 2);
            $table->decimal('hidratos', 8, 2);

            $table->foreign('id_producto')->references('id_producto')->on('productos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nutrientes');
    }
};
