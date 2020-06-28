<?php

namespace App\Http\Controllers;

use App\Coli;
use App\pack;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('App.packs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param pack $pack
     * @return Response
     */
    public function show(pack $pack)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param pack $pack
     * @return Response
     */
    public function edit(pack $pack)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param pack $pack
     * @return Response
     */
    public function update(Request $request, Coli $pack)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param pack $pack
     * @return Response
     */
    public function destroy(pack $pack)
    {
        //
    }
}
