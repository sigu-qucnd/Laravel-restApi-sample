<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Sample;
use App\Http\Controllers\Controller;
class SamplesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $sample = Sample::all();
        return $sample;
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
        $sample = new Sample;
        $sample->name = $request->name;
        $sample->save();
        return redirect('api/Samples');
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
        $sample = Sample::find($id);
        return $sample;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $sample = Sample::find($id);
        $sample->name = $request->name;
        $sample->save();
        return redirect("api/Samples");
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
        $sample = Sample::find($id);
        $sample->delete();
        return redirect('api/samples');

    }
}
