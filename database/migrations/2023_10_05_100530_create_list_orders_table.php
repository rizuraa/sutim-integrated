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
        Schema::create('list_orders', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('unit');
            $table->integer('qty');
            $table->decimal('price', 10, 2);
            $table->decimal('disc', 10, 2);
            $table->decimal('total', 10, 2);
            $table->decimal('sub_total', 10, 2);
            // join
            $table->unsignedBigInteger('id_order');
            $table->foreign('id_order')->references('id')->on('orders')->onDelete('cascade');
            // endjoin 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('list_orders');
    }
};
