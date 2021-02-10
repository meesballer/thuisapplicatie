<?php

namespace App\Http\Controllers;

use App\Bedrijf;
use Illuminate\Http\Request;

class BedrijfController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bedrijven = bedrijf::all();
        return view('Bedrijfs.index', compact('bedrijven'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Bedrijfs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $bedrijf = new bedrijf([
            'Naam' => $request->Naam,
            'Email' => $request->Email,
            'Website' => $request->Website
        ]);
        $bedrijf->save();
        return redirect('/Bedrijfs');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public
    function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public
    function edit($id)
    {
        $bedrijf = bedrijf::find($id);
        return view('Bedrijfs.edit', compact('bedrijf'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public
    function update(Request $request, $id)
    {
        $bedrijf = bedrijf::find($id);
        $bedrijf->Naam = $request->Naam;
        $bedrijf->Email = $request->Email;
        $bedrijf->Website = $request->Website;

        $bedrijf->save();
        return redirect('Bedrijfs');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public
    function destroy($id)
    {
        $bedrijf = bedrijf::findOrFail($id);
        $bedrijf->delete();
        return redirect('Bedrijfs');
    }
}

