<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hirek;
use App\Models\User;
use App\Models\Vendegkonyv;
use Hash;
use Illuminate\Validation\Rules\Password;
use Auth;

class TelepulesController extends Controller
{
    function Hirek(){
        return view('hirek',[
            'results' => Hirek::select('*')->orderBy('date','DESC')->get()
        ]);
    }

    function vendeg(){
        return view('vendeg',[
            'results' => Vendegkonyv::select('*')->orderBy('date','DESC')->get()
        ]);
    }
    function Reg(Request $request){
        $request->validate([
            'nev' => 'required|min:4',
            'email' =>'required|email',
            'password' => ['required','confirmed',Password::min(8)->MixedCase()->letters()->numbers()],
            'password_confirmation' =>'required'
        ],[
            'nev.required'=>"Név megadása kötlező!",
            'nev.min'=>"Név nem megfelelő hosszúságú!",
            'email.required'=>"Email megadása kötelező!",
            'email.email'=>"Email nem megfelelő formátumú!",
            'password.required'=>"Jelszó megadása kötelező!",
            'password.confirmed'=>"A jelszavak nem egyeznek!",
            'password'=>"Nem elég erős a jelszó!",
            'password_confirmation.required'=>"Jelszó megadása kötelező!"
        ]);
        $data = new User;
        $data->name = $request->nev;
        $data->email = $request->email;
        $data->password =Hash::make($request->password);
        $data->save();
        return view('bejelentkezes',[
            'msg' =>'sikeres regisztráció!'
        ]);
    }

    function belepes(){
        return view('bejelentkezes');
    }

    function Logout(){
        Auth::logout();
        return redirect('/');
    }

    function belepespost(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ],[
            'email.required' =>"email megadása kötelező",
            'email.email' =>"nem megfelelő email formátum",
            'password.required' =>"Jelszó megadása kötlelező!"
        ]);

        if(Auth::attempt(['email' => $request->email, 'password' => $request->password]))
        {
            return redirect('/');
        }
        else{
            return view('bejelentkezes',[
                'msgb' => 'Sikertelen bejelentkezés!'
            ]);
        }
    }
}
