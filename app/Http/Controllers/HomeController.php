<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;


class HomeController extends Controller
{
	 public function downloadPDF()

    {

       return view('downloadpdf');

  

        return $pdf->download('itsolutionstuff.pdf');

    }
     public function generatePDF()

    {

        $data = ['title' => 'Welcome to HDTuto.com'];

        $pdf = PDF::loadView('myPDF', $data);

  

        return $pdf->download('itsolutionstuff.pdf');

    }
}
