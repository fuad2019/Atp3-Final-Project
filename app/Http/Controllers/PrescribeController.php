<?php

namespace App\Http\Controllers;

use App\Prescribe;
use Illuminate\Http\Request;

class PrescribeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prescribes = Prescribe::all();
      
        return view('prescribe.List')->with('prescribes', $prescribes); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('prescribe.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
    


     $prescribe = new Prescribe();
      

  $prescribe->pname = $req->pname;

  $prescribe->age = $req->age;
  $prescribe->appoint = $req->appoint;
  $prescribe->dname = $req->dname;
  $prescribe->med = $req->med;
  $prescribe->des = $req->des;
       
        // $user->save();
        if($prescribe->save()){
            //return redirect()->route('employer.index');
 return redirect()->route('prescribe.index');
//return response->json()
        }else{

echo "error";
           // return redirect()->route('employer.addemployee');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Prescribe  $prescribe
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         

        //your task finding student from array

        $prescribe = Prescribe::find($id);
       // return response()->json($prescribe);
        return view('prescribe.view')->with('prescribe', $prescribe);
  



    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Prescribe  $prescribe
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        

            $prescribe = Prescribe::find($id);
           // return response()->json($prescribe);

       
        return view('prescribe.edit')->with('prescribe', $prescribe);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Prescribe  $prescribe
     * @return \Illuminate\Http\Response
     */
 function update(Request $req, $id){

        $prescribe = Prescribe::find($id);
       $prescribe->pname = $req->pname;

        $prescribe->age = $req->age;
        $prescribe->appoint = $req->appoint;
        $prescribe->dname = $req->dname;
        $prescribe->med = $req->med;
         $prescribe->des = $req->des;
       $prescribe->save();

        return redirect()->route('prescribe.index');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Prescribe  $prescribe
     * @return \Illuminate\Http\Response
     */

function delete($id){

    
        $prescribe = Prescribe::find($id);

        // return response()->json($prescribe);
        return view('prescribe.delete')->with('prescribe', $prescribe);
    }

    function destroy($id){

        //delete student from array and send the updated array in userlist
           $prescribe = Prescribe::find($id);
            $prescribe->delete(); 
        return redirect()->route('prescribe.index');
    }


}
