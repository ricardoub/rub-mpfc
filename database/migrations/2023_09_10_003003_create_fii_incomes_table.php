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
        /**
         *   T   B   M   m
         *                 100,00 ( 5,2)
         *               1.000,00 ( 6,2)
         *              10.000,00 ( 7,2)
         *             100.000,00 ( 8,2)
         *           1.000.000,00 ( 9,2)
         *          10.000.000,00 (10,2)
         *         100.000.000,00 (11,2)
         *       1.000.000.000,00 (12,2)
         *      10.000.000.000,00 (13,2)
         *     100.000.000.000,00 (14,2)
         * 100.000.000.000.000,00 (17,2)
         */

        Schema::create('fii_incomes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('fii_id');

            $table->date('data_com');
            $table->date('data_pagamento');
            $table->decimal('valor_cota', $precision = 10, $scale = 2);
            $table->decimal('valor_rendimento', $precision = 10, $scale = 2);
            $table->decimal('dividend_yield', $precision = 5, $scale = 2);

            $table->timestamps();

            $table->foreign('fii_id')->references('id')->on('fiis');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fii_incomes');
    }
};
