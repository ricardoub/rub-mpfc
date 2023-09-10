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
        Schema::create('fiis', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('fii_administrator_id');
            $table->unsignedBigInteger('fii_type_id');


            $table->string('codigo', 25);
            $table->string('nome', 255);
            $table->string('descricao', 255);
            $table->string('cnpj',16);
            $table->string('prazo_duracao', 25);
            $table->smallInteger('dia_data_com');

            $table->decimal('taxa_de_administracao', $precision = 6, $scale = 3);
            $table->decimal('taxa_de_gestao', $precision = 6, $scale = 3);
            $table->decimal('taxa_de_performance', $precision = 6, $scale = 3);

            $table->timestamps();

            $table->foreign('fii_administrator_id')->references('id')->on('fii_administrators');
            $table->foreign('fii_type_id')->references('id')->on('fii_types');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fiis');
    }
};
