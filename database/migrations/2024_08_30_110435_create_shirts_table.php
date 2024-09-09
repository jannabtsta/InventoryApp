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
        Schema::create('shirts', function (Blueprint $table) {
            $table->id();
            $table->string('brand');
            $table->integer('quantity');
            $table->decimal('price', 8, 2);
            $table->unsignedBigInteger('category_id')->nullable(); // Must be unsignedBigInteger
            $table->timestamps();

            // Define the foreign key constraint
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shirts');
    }
};
