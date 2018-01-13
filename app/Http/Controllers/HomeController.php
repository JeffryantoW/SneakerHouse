<?php

namespace App\Http\Controllers;

use App\Sneakers;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\shoe;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    //
    public function showPagehome(){
        return view('/home');
    }
    public function showPageAbout(){
        return view('/about');
    }
    public function showPageBootsgalery(){
        $adidas = shoe::where('Type','adidas')->get();
        return view('bootsgalery')->with([
            'adidas'=>$adidas
        ]);
        return view('/');
    }
    public function showPagePantofelgalery(){
        return view('/pantofelgalery');
    }
    public function showPagesneakersgalery(){

        return view('/sneakersgalery')->with([
            'sneakerss'=> Sneakers::all()
        ]);
    }
    public function showPagesponsors(){
        return view('/sponsors');
    }

    public function login(){
        return view('/login');
    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }
    public function register(){
        return view('Registration');
    }

    public function doRegister(Request $r){
        $data = new User();
        $data->name = $r->username;
        $data->email = $r->email;
        $data->address = $r->address;
        $data->password = bcrypt($r->password);
        $data->save();
        return redirect('/');
    }

    public function doLogin(Request $r){
        Auth::attempt(['email' => $r->email, 'password' => $r->password]);
        return redirect('/');
    }
}
