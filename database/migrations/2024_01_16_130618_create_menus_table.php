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
        Schema::create('menus', function (Blueprint $table) {
            $table->id();
            $table->string('dishname');
            $table->string('dishdescription');
            $table->string('ingredient');
            $table->string('price');
            $table->string('ctype')->nullable();
            $table->string('pic1',300);
            $table->string('pic2',300)->nullable();
            $table->string('pic3',300)->nullable();
            $table->string('pic4',300)->nullable();
            $table->boolean('fav')->default(false);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menus');
    }
};
