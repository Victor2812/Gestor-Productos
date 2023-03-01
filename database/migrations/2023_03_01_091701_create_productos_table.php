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
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->string('description', 400)->nullable();
            $table->string('tipo_vender', 100);
            $table->decimal('precio_base', 8, 2);
            $table->integer('pedido_minimo');
            $table->string('alt')->nullable();
            $table->foreignId('categoria_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};
