<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Medewerker;

class MedewerkerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $medewerkers = medewerker::all();
        return view('Medewerkers.index', compact('medewerkers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Medewerkers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $medewerker = new medewerker([
            'VoorNaam'=> $request->VoorNaam,
            'AchterNaam'=> $request->AchterNaam,
            'Bedrijf'=> $request->Bedrijf,
            'Email'=> $request->Email,
            'Telefoon'=> $request->Telefoon
        ]);

        $medewerker->save();
        return redirect('/medewerkers');
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
        $medewerker = Medewerker::find($id);
        return view('Medewerkers.edit', compact('medewerker'));

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
