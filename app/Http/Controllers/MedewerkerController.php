<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Bedrijf;
use App\Medewerker;

class MedewerkerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $medewerkers = medewerker::all();
        $bedrijven = bedrijf::find($request->bedrijfs_id);
        return view('Medewerkers.index', compact('medewerkers', 'bedrijven'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $bedrijven = bedrijf::all();
        return view('Medewerkers.create', compact('bedrijven'));
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
            'bedrijfs_id'=> $request->bedrijfs_id,
            'Email'=> $request->Email,
            'Telefoon'=> $request->Telefoon
        ]);

        $medewerker->save();
        return redirect('Medewerkers');
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
        $bedrijven = bedrijf::all();
        return view('Medewerkers.edit', compact('medewerker', 'bedrijven'));

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
        $medewerker = medewerker::find($id);
        $medewerker->VoorNaam = $request->VoorNaam;
        $medewerker->AchterNaam = $request->AchterNaam;
        $medewerker->bedrijfs_id = $request->bedrijfs_id;
        $medewerker->Email = $request->Email;
        $medewerker->Telefoon = $request->Telefoon;
        $medewerker->save();
        return redirect('Medewerkers');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $medewerker = medewerker::findOrFail($id);
        $medewerker->delete();
        return redirect('Medewerkers');
    }
}
