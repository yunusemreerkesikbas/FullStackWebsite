<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->foreignId('category_id')->constrained()->onDelete('cascade');
            $table->text('description')->nullable();
            $table->decimal('price', 10, 2);
//            $table->enum('stock_status', ['in_stock', 'out_of_stock'])->default('in_stock');
            $table->string('sku')->nullable();
            $table->integer('quantity')->default(0);
            $table->string('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->string('cover_image')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('products');
    }
};
