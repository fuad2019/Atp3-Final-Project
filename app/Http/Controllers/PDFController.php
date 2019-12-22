<?php
namespace App\Http\Controllers;

  use App\Prescribe;

use Illuminate\Http\Request;
use PDF;

  
class PDFController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function PDFgenerate($id)

    {


    	$prescribe = Prescribe::find($id);

    	 //  return response()->json($prescribe);
       // return view('prescribe.view')->with('prescribe', $prescribes);


       //$pdf = \PDF::loadView('prescribe.pdf')->with('data', $data);
    	// $pdf = \PDF::loadView('prescribe.pdf', compact('data'));
  //$pdf = \PDF::loadView('pdf.customers', $data);

    	// $pdf = \PDF::loadView('productType.invoice', compact('data'));
        /// $pdf = PDF::loadView('prescribe.pdf', compact('data'));
    	 //$pdf->save(storage_path().'_filename.pdf');


     // $pdf = PDF::loadView('prescribe.pdf', compact('prescribe'));

      $pdf = PDF::loadView('prescribe.pdf', compact('prescribe'));
        return $pdf->download('prescription.pdf');
    }
}