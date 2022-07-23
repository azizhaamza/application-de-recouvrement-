<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Region;
use Illuminate\Support\Facades\DB;

class RegionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $region=DB::table('regions')->get();
        return view ('regions.index',['region'=>$region]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // fonction pour envoyer a la page de création région
    public function create()
    {
        return view('regions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    // cette fonction ajouter région
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'adresse' => 'required|string|max:255',
            
            
            
        ]);
        DB::table('regions')->insert(
            ['nom_region' => $request->name,
             'adresse_region' => $request->adresse,
             
             ]);

             return redirect()->route('regions.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // cette fonction pour consulter région
    public function show(Region $region)
    {
        return view('regions.show',compact('region'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // cette fonction pour acceder a la page modifier
    public function edit(Region $region)
    {
        return view('regions.edit', compact('region'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // cette fonction pour modifier region 
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'adresse' => 'required|string|max:255',
            ]);
            DB::table('regions')
                    ->where('id',$id)
                    ->update([  'nom_region' => $request->name,
                                'adresse_region' => $request->adresse,
                                
                 ]);


                 return redirect()->route('regions.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // cette fonction pour supprimer region
    public function destroy(Region $region)
    {
        $region->delete();
        return redirect()->route('regions.index');
    }
}
