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
        Schema::create('product_cats', function (Blueprint $table) {
            $table->id();
            $table->string('Product_Category');
            $table->string('Product_Name');
            $table->string('Price');
            $table->string('Offer');
            $table->text('Product_Description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_cats');
    }
};
