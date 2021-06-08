<?php

namespace App\Http\Controllers;

use App\Postcard;
use Illuminate\Http\Request;

class PostcardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $postcards = Postcard::all();

      return response()->json([
        'data' => $postcards,
        'success' => true
      ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $data = $request->all();

      return response()->json([
        'message' =>'Sport saved correctly',
        'success' => true
      ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Postcard  $postcard
     * @return \Illuminate\Http\Response
     */
    public function show(Postcard $postcard)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Postcard  $postcard
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Postcard $postcard)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Postcard  $postcard
     * @return \Illuminate\Http\Response
     */
    public function destroy(Postcard $postcard)
    {
        //
    }
}
