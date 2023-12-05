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
        Schema::create('request_list_kitchen', function (Blueprint $table) {
            $table->id();
            $table->string('product_name');
            $table->string('unit');
            $table->string('qty');
            // join
            $table->unsignedBigInteger('id_request_kitchen');
            $table->foreign('id_request_kitchen')->references('id')->on('request_kitchen')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('request_list_kitchen');
    }
};
