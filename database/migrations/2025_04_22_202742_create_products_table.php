<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('photo_product')->nullable();
            $table->string('name');
            $table->integer('price');
            $table->string('supplier')->nullable();
            $table->string('description');
            $table->enum('creation_status', ['Aprovado', 'Em analise', 'Recusado'])->default('Em analise');
            $table->string('product_video_link')->nullable();
            $table->string('store_link')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
