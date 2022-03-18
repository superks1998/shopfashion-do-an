<?php

use App\Enums\ProductSizeType;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('transaction_id')->constrained()->onDelete('CASCADE');
            $table->foreignId('product_id')->constrained()->onDelete('CASCADE');
            $table->enum('size', ProductSizeType::getValues())->default('M');
            $table->unsignedBigInteger('sale')->default(0);
            $table->tinyInteger('qty')->default(0);
            $table->string('price');
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
        Schema::dropIfExists('orders');
    }
}
