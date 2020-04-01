<?php

namespace App\Http\Controllers;

use App\Integrante;
use Illuminate\Http\Request;

class BandaController extends Controller
{
    private $integrante;

    public function __construct()
    {
        $this->integrante = new Integrante();
    }

    public function index()
    {
        $inte = $this->integrante->first();
        $this->integrante->destroy($inte->id);

        $integrante = $this->integrante->with(['banda', 'instInte'])->where('id', 25)->first();

        //dd($integrante);
        return view('banda.index', compact('integrante'));

        /*$inte = $this->integrante->onlyTrashed()->where('id', 1)->first();
        $inte->restore();

        $inte = $this->integrante->first();

        dd($inte);*/
    }
}
