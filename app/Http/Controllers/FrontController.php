<?php

namespace App\Http\Controllers;
use App\Models\Mesaj;
use App\Models\Resurse;
use App\Models\Servicii;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        $resurse = Resurse::all();
        $servicii = Servicii::all();
        return view('front', compact('resurse', 'servicii'));
    }
    public function store(Request $request)
    {
        $post = new Mesaj;
        $post->nume = $request->nume;
        $post->email = $request->email;
        $post->titlu = $request->titlu;
        $post->mesaj = $request->mesaj;
        
        $post->save();
        return redirect('/')->with('status', 'Data Has Been inserted');
    }
}
