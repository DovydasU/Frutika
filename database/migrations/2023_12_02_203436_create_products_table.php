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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            // $table->foreignId('category_id')->default(1);
            $table->string('name'); // Product name
            $table->string('image')->nullable(); // Product image
            $table->decimal('price', $precision = 5, $scale = 2); // Product price
            $table->decimal('left', $precision = 8, $scale = 2)->default(0); // Product left
            $table->longText('description'); // Product description
            $table->boolean('active')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
