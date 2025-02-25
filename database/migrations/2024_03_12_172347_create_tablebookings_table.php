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
        Schema::create('tablebookings', function (Blueprint $table) {
            $table->id();
            $table->string('uid')->default(1);
            $table->string('tnumber');
            $table->string('guest');
            $table->string('date');
            $table->string('time');
            $table->string('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tablebookings');
    }
};
