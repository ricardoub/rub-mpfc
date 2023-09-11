<?php

namespace Database\Seeders;

use App\Models\FiiCategory;
use App\Models\FiiType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FiiTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->seed_categoryTijolo();

        //$papel = FiiCategory::where('codigo', 'PAPEL')->first();
        //$fof = FiiCategory::where('codigo', 'FOF')->first();
        //$hibrido = FiiCategory::where('codigo', 'HIBRIDO')->first();
        //$desenvolvimento = FiiCategory::where('codigo', 'DESENVOLVIMENTO')->first();

        /**
         * Fundos Imobiliários de escritórios;
         * Fundos Imobiliários de prédios industriais;
         * Fundos Imobiliários de galpões logísticos;
         * Fundos Imobiliários de hotéis;
         * Fundos Imobiliários de shopping centers;
         * Fundos Imobiliários de hospitais;
         * Fundos Imobiliários de escolas;
         * Fundos Imobiliários de agências bancárias.
         */
    }
    private function seed_categoryTijolo()
    {
        $tijolo = FiiCategory::where('sigla', 'TIJOLO')->first();
        $escritorio = FiiType::updateOrCreate(
            ['sigla' => 'ESCRITORIO'],
            [
                'sigla' => 'ESCRITORIO',
                'nome' => 'FII - ESCRITORIO',
                'fii_category_id' => $tijolo->id,
                'descricao' => 'Fundos imobiliários que investem em imóveis reais - escritório',
            ],
        );
        $industria = FiiType::updateOrCreate(
            ['sigla' => 'INDUSTRIA'],
            [
                'sigla' => 'INDUSTRIA',
                'nome' => 'FII - INDUSTRIA',
                'fii_category_id' => $tijolo->id,
                'descricao' => 'Fundos imobiliários que investem em imóveis reais - industria',
            ],
        );
        $logistica = FiiType::updateOrCreate(
            ['sigla' => 'LOGISTICA'],
            [
                'sigla' => 'LOGISTICA',
                'nome' => 'FII - LOGISTICA',
                'fii_category_id' => $tijolo->id,
                'descricao' => 'Fundos imobiliários que investem em imóveis reais - logistica',
            ],
        );
        $hotel = FiiType::updateOrCreate(
            ['sigla' => 'HOTEL'],
            [
                'sigla' => 'HOTEL',
                'nome' => 'FII - HOTEL',
                'fii_category_id' => $tijolo->id,
                'descricao' => 'Fundos imobiliários que investem em imóveis reais - hotel',
            ],
        );
        $shopping = FiiType::updateOrCreate(
            ['sigla' => 'SHOPPING'],
            [
                'sigla' => 'SHOPPING',
                'nome' => 'FII - SHOPPING',
                'fii_category_id' => $tijolo->id,
                'descricao' => 'Fundos imobiliários que investem em imóveis reais - shopping',
            ],
        );
        $hospital = FiiType::updateOrCreate(
            ['sigla' => 'HOSPITAL'],
            [
                'sigla' => 'HOSPITAL',
                'nome' => 'FII - HOSPITAL',
                'fii_category_id' => $tijolo->id,
                'descricao' => 'Fundos imobiliários que investem em imóveis reais - hospital',
            ],
        );
        $escola = FiiType::updateOrCreate(
            ['sigla' => 'ESCOLA'],
            [
                'sigla' => 'ESCOLA',
                'nome' => 'FII - ESCOLA',
                'fii_category_id' => $tijolo->id,
                'descricao' => 'Fundos imobiliários que investem em imóveis reais - escola',
            ],
        );
        $banco = FiiType::updateOrCreate(
            ['sigla' => 'BANCO'],
            [
                'sigla' => 'BANCO',
                'nome' => 'FII - BANCO',
                'fii_category_id' => $tijolo->id,
                'descricao' => 'Fundos imobiliários que investem em imóveis reais - banco',
            ],
        );
    }
}
