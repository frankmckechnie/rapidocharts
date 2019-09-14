<?php

namespace App\Http\Controllers;

use App\StandardContent;
use Illuminate\Http\Request;

class StandardContentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($slug, StandardContent $standardContent)
    {
        $content = $standardContent->where('slug', '=', $slug)->get()->first();
        return view('standardContent', compact('content')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
     * @param  \App\StandardContent  $standardContent
     * @return \Illuminate\Http\Response
     */
    public function show(StandardContent $standardContent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\StandardContent  $standardContent
     * @return \Illuminate\Http\Response
     */
    public function edit(StandardContent $standardContent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\StandardContent  $standardContent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, StandardContent $standardContent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\StandardContent  $standardContent
     * @return \Illuminate\Http\Response
     */
    public function destroy(StandardContent $standardContent)
    {
        //
    }
}
