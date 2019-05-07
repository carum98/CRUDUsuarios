<?php
namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class UserController extends Controller

{
    public function index()
    {

        $users = User::all();

        $title = 'Listado de usuarios';
        return view('users.index', compact('title', 'users'));
    }

    public function show($id)
    {
        $user = User::findOrFail($id);


        return view('users.show', compact('user'));
    }

    public function create()
    {
        return view('users.crear');
    }

    public function store()
    {
        $data = request()->validate([
            'name' => 'required',
            'email' => ['required','email','unique:users,email'],
            'password' => 'required'
        ],
        [
            'name.required' => "El campo del nombre es obligatorio" 
        ]);

        User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password'])
        ]);

        return redirect()->route('users.index');
    }

    public function edit(User $user)
    {
        return view('users.edit', ['user'=> $user]);
    }

    public function update(User $user)
    {

        // dd('actualizado');

        $data = request()->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email', $user->id,
            'password' => 'required'
        ]);

        if($data['password'] != null){
            $data['password'] = bcrypt($data['password']);
        }else{
            unset($data['password']);
        }

        $user -> update($data);

        return redirect()->route('users.show', ['user' => $user]);
    }
}
