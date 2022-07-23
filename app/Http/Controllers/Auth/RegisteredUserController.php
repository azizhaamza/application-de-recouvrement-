<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $regions=DB::table('regions')->get();
        $districts=DB::table('districts')->get();
        
        return view('auth.register',['regions'=> $regions],['districts' => $districts]);
    }
    public function findDistrictName($id){
        echo json_encode (DB::table('districts')->where('id_region',$id)->get());
        
                                         
        

    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|confirmed|min:8',
            'user_cin' => 'required|string|max:8',
          


            
        ]);

        Auth::login($user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'user_cin'=>$request->user_cin,
            'matricule'=>$request->matricule,
            'id_region'=>$request->region_id,
            'id_district'=>$request->district_id,
            'reference'=>$request->reference,
            'matriculeadmin'=>$request->matriculeadmin,
            'password' => Hash::make($request->password),
        ]));
        $user->attachRole($request->role_id);
        event(new Registered($user));

        return redirect(RouteServiceProvider::HOME);
    }
}
