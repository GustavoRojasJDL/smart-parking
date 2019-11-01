<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slot;
use App\User;

class SlotController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slots = Slot::all();
        return view('index', ['slots' => $slots]);
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $slots = new Slot();
        $slots->name = $request->input('name');
        $slots->status = $request->input('status');

        $slots->save();
        return response()->json($slots);
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $slots = Slot::all();
        return view('edit', ['slots' => $slots]);
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slot)
    {
        $slots = Slot::find($slot);
        if($request->Status == "1"){
            $slots->Status = "3";
        }else{
            $slots->Status = "1";
        }
        $slots->save();

        $slots = Slot::all();
        return view('edit', ['slots' => $slots]);
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
