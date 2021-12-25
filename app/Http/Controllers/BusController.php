<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\BusRequest;
use App\Models\Bus;

class BusController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Bus::paginate(5);
        return view('admin.bus.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.bus.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BusRequest $request)
    {
        $request->authorize();
        $data = [
            'plate_number' => $request->plate_number,
            'brand' => $request->brand,
            'seat' => $request->seat,
            'price' => $request->price,
        ]; 
        Bus::Create($data);
        return redirect('/bus')->with('status');
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
    public function edit($id)
    {
        $data = Bus::findOrFail($id);
        return view('admin.bus.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BusRequest $request, $id)
    {
        $request->authorize();
        $data = [
            'plate_number' => $request->plate_number,
            'brand' => $request->brand,
            'seat' => $request->seat,
            'price' => $request->price,
        ]; 
        Bus::Find($id)->Update($data);
        return redirect('/bus')->with('status');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Bus::Destroy($id);
        return redirect('/bus')->with('status');
    }
}
