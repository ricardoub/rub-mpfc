<?php

namespace App\Http\Controllers\Fiis;

use App\Http\Controllers\Controller;
use App\Models\Fiis\Fii_Administrator;
use Illuminate\Http\Request;

class FiiAdministratorController extends Controller
{
    public function index()
    {
        $fiiAdministrators = Fii_Administrator::all();

        return view('fiis.administrator.index', [
            'fiiAdministrators' => $fiiAdministrators,
        ]);
    }

}
