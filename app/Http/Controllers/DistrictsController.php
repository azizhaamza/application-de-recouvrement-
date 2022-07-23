<?php

namespace App\Http\Controllers;

use App\Models\District;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class DistrictsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //cette pour fonction pour acceder l'accuille 
    public function index()
    {
        $district=DB::table('districts')->get();
        return view ('districts.index',['district'=>$district]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // fonction pour envoyer a la page de création district
    // cette fonction pour acceder a la page de création
    public function create()
    {
        return view('districts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // c'est pour insére district 
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'adresse' => 'required|string|max:255',
            'id_region' => 'required|int|min:1',
            
            
        ]);
        DB::table('districts')->insert(
            ['nom_district' => $request->name,
             'adresse_district' => $request->adresse,
             'id_region' => $request->id_region,
             ]);

             return redirect()->route('districts.index');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //c'est pour consulter district
    public function show(District $district)
    {
        
        return view('districts.show',compact('district'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // c'est pour consulter district
    public function edit(District $district)
    {
        return view('districts.edit', compact('district'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // c'est pour modifier district
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'adresse' => 'required|string|max:255',
            'id_region' => 'required|int|min:1',]);
            DB::table('districts')
                    ->where('id',$id)
                    ->update([  'nom_district' => $request->name,
                                'adresse_district' => $request->adresse,
                                'id_region' => $request->id_region,
                 ]);


                 return redirect()->route('districts.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // c'est pour supprimer district
    public function destroy(district $district)
    {
        $district->delete();
        return redirect()->route('districts.index');
    }
}
