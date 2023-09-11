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
        Schema::create('fii_types', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('fii_category_id');

            $table->string('sigla', 15);
            $table->string('nome', 100);
            $table->string('descricao', 255);

            $table->timestamps();

            $table->foreign('fii_category_id')->references('id')->on('fii_categories');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fii_types');
    }
};
