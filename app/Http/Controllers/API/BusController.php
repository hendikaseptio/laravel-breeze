<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\BusRequest;
use App\Models\Bus;
use App\Http\Resources\BusResource;

class BusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Bus::latest()->get();
        return response()->json([BusResource::collection($data), 'Bus fetched.']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BusRequest $request)
    {
        $validation = $request->authorize();
        if ($validation->fails()) {
            return response()->json($validation->errors());
        }
        $data = Bus::Create([
            'plate_number' => $request->plate_number,
            'brand' => $request->brand,
            'seat' => $request->seat,
            'price' => $request->price,
        ]);
        return response()->json(['Data Created Successfully.',new BusResource($data)]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Bus::find($id);
        if (empty($data)) {
            return response()->json('Data Not Found',404);
        }
        return response()->json([new BusResource($data)]);
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
        $validation = $request->authorize();
        if($validation->fails()) {
            return response()->json($validation->errors());
        }
        $data = Bus::find($id)->Update([
            'plate_number' => $request->plate_number,
            'brand' => $request->brand,
            'seat' => $request->seat,
            'price' => $request->price, 
        ]);
        return response()->json(['Data updated successfully.', new BusResource($data)]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Bus::Destroy($id);
        return response()->json('Data Destroyed successfully.');
    }
}
