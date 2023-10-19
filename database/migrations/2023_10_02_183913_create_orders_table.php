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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('number_order');
            $table->string('platform');
            $table->string('delivery');
            $table->string('bank_name');
            $table->string('account_number');
            $table->string('account_name');
            $table->string('payment_type');
            $table->string('payment_date');
            $table->string('additional_information');                           
            $table->string('grand_total');
            $table->string('diajukan_oleh');
            $table->string('diketahui_oleh');
            $table->string('disetujui_oleh');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
