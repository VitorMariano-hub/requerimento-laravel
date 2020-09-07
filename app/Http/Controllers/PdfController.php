<?php

namespace App\Http\Controllers;
use App\Requerimento;
use PDF;
use Illuminate\Http\Request;

class PdfController extends Controller
{

    public function pdf(Request $request, $id)
    {
        $requerimentos = Requerimento::find($id);
        view()->share('requerimentos',$requerimentos);
            $pdf = PDF::loadView('pdf');
            return $pdf->download('requerimento.pdf');
    }
}
