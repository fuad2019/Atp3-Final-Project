<?php

namespace App\Http\Controllers;

use App\Schedule;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $schedule = Schedule::all();
      
        return view('schedule.List')->with('schedule', $schedule); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

       // echo "schedule";
        return view('schedule.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
    


     $schedule= new Schedule();
      

  $schedule->date = $req->date;

  $schedule->time = $req->time;
  $schedule->duty = $req->duty;
       
        // $user->save();
        if( $schedule->save()){
            //return redirect()->route('employer.index');
 return redirect()->route('schedule.index');
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

        $schedule = Schedule::find($id);
       // return response()->json($prescribe);
        return view('schedule.view')->with('schedule', $schedule);
  



    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Prescribe  $prescribe
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        

            $schedule = Schedule::find($id);
           // return response()->json($prescribe);

       
        return view('schedule.edit')->with('schedule', $schedule);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Prescribe  $prescribe
     * @return \Illuminate\Http\Response
     */
 function update(Request $req, $id){

        $schedule = Schedule::find($id);
       $schedule->date = $req->date;

        $schedule->time = $req->time;
       $schedule->duty = $req->duty;
       $schedule->save();

        return redirect()->route('schedule.index');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Prescribe  $prescribe
     * @return \Illuminate\Http\Response
     */
/*
function delete($id){

    
        $schedule = Schedule::find($id);

        // return response()->json($prescribe);
        return view('schedule.delete')->with('schedule', $schedule);
    }*/

    function destroy($id){

        //delete student from array and send the updated array in userlist
           $schedule = Schedule::find($id);
            $schedule->delete(); 
        return redirect()->route('schedule.index');
    }


}
