<?php

use App\Enums\ProductSizeType;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id('id');
            $table->string('name');
            $table->string('price');
            $table->string('sku');
            $table->enum('size', ProductSizeType::getValues())->default('M');
            $table->text('description')->nullable();
            $table->string('slug')->unique();
            $table->string('feature_image_before');
            $table->string('feature_image_after');
            $table->foreignId('user_id')->nullable()->constrained()->onDelete('SET NULL');
            $table->foreignId('category_id')->nullable()->constrained()->onDelete('SET NULL');
            $table->tinyinteger('active')->default(1)->index();
            $table->tinyinteger('hot')->default(0);
            $table->integer('sale')->default(0);
            $table->integer('product_number')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
}
