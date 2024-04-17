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
            $table->integer('uid');
            $table->integer('pid');
            $table->string('pname');
            $table->string('ppic');
            $table->string('address')->nullable();
            $table->integer('quantity')->default(1);
            $table->decimal('amount');
            $table->decimal('Total_amount');
            $table->decimal('payment_type')->default(1);
            $table->integer('status')->default(0);
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
