<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Dosen;
use Session;

class UserController extends Controller
{
     public function index(){
        $users = User::all();
        return view('users')->with(['data_users' => $users]);
     }

     public function daftar(){
        $dosen = Dosen::all();
        return view('register')->with(['data_dosen' => $dosen]);
     }
     public function masuk(){
        return view('login');
     }
     public function register(Request $req){
        // $user = User::class;
        // $user->name = $req->name;
        // $user->email = $req->email;
        // $user->password = Hash::make($req->password);
        // $user->save();
        // echo $req->name;

        $user = User::create([
            'name'      => $req->name,
            'email'     => $req->email,
            'password'  => Hash::make($req->password),
            'id_dosen'  => $req->id_dosen
        ]);
        return redirect('daftar')->with('status','register sukses');
     }

     public function login(Request $req){
            $credentials = [
                'email'     => $req->email,
                'password'  => $req->password
            ];

            if(Auth::attempt($credentials)){
                return redirect('/user');
            }else{
                return view('login')->with('status', 'Login Gagal');
            }
     }

     public function detail(Request $req){
        $detail = User::where('id', $req->user_id)->with('dosen')->first();
        return view('detail_user')->with(['user' => $detail]);
     }

     public function logout()
     {
         Auth::logout();
         return redirect()->route('masuk');
     }

}
