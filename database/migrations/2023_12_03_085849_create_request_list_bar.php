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
        Schema::create('request_list_bar', function (Blueprint $table) {
            $table->id();            
            $table->string('product_name');
            $table->string('unit');
            $table->string('qty');
            // joinn
            $table->unsignedBigInteger('id_request_bar');
            $table->foreign('id_request_bar')->references('id')->on('bar')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('request_list_bar');
    }
};

