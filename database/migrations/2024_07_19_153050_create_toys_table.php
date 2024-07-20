<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('toys', function (Blueprint $table) {
            $table->uuid('toy_id')->primary();
            $table->uuid('category_id');
            $table->string('image');
            $table->string('name');
            $table->text('description');
            $table->integer('stock');
            $table->decimal('price', 8, 2);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('toys');
    }
};
