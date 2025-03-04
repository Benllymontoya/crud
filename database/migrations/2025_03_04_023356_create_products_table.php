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
        // Elimina la tabla 'products' si existe
        Schema::dropIfExists('products');
        
        // Crea una nueva tabla llamada 'products'
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id'); // Añade una columna 'id' que será la clave primaria y se auto-incrementará
            $table->string('nombre'); // Añade una columna 'nombre' de tipo string
            $table->text('descripcion')->nullable(); // Añade una columna 'descripcion' de tipo texto que puede ser nula
            $table->decimal('precio', 8, 2); // Añade una columna 'precio' de tipo decimal con 8 dígitos en total y 2 decimales
            $table->integer('stock'); // Añade una columna 'stock' de tipo entero
            $table->timestamps(); // Añade columnas 'created_at' y 'updated_at' para registrar las marcas de tiempo de creación y actualización
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products'); // Elimina la tabla 'products' si existe
    }
};