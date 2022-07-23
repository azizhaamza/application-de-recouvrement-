<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Auth;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;



class UsersController extends Controller
{
    // fonction pour envoyer a la page de création un utilisateur
    public function create()
    {

        $roles = Role::pluck('id');

        return view('users.create', compact('roles'));
    }
    // fonction pour ajouter l'utilisateur
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|confirmed|min:8',
            'user_cin' => 'required|string|max:8',
        ]);

       $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        $user->attachRole($request->role_id);
        event(new Registered($user));

        return redirect()->route('dashboard');
    }
    // cette fonction pour modifier utilisateur
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|confirmed|min:8',]);
         DB::table('users')
              ->where('id', $id)
              ->update(['name' => $request->input('name'),
                        'email' => $request->input('email'),
                        'password' => bcrypt($request->input('password'))


              ]);

        return redirect()->route('dashboard');
    }
    //pour afficher page de la liste d'utilisateur
      public function index(){
        $users=DB::table('users')->get();
        $role_user=DB::table('role_user')->get();
        return view ('users.index',['users'=>$users,'role_user'=> $role_user]);
    }
    //consulter utilisateur
    public function show(User $user)
    {
        
        $role_user=DB::table('role_user')->get();

        return view('users.show', compact('user'),['role_user'=> $role_user]);
    }
    //acceder a la page modifier utilisateur
    public function edit(User $user)
    {

        $role_user=DB::table('role_user')->get();

        

        return view('users.edit', compact('user'),['role_user'=> $role_user]);
    }
    public function destroy(User $user)
    {

        $user->delete();
        return redirect()->route('dashboard');
    }
}
