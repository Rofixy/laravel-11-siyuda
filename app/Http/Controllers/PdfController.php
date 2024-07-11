<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;

class PdfController extends Controller
{
    public function printUndangan()
    {
        

        $pdf = Pdf::loadView('print');
        return $pdf->download('invoice.pdf');
    }
}
