<?php

namespace App\Http\Controllers;
use App\Models\Mesaj;
use Illuminate\Http\Request;


class MesajeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Mesaj $mesaj)
    {
        $data = Mesaj::sortable()->paginate(10);
        return view('mesaje.index',compact('data'));
        
    }
    public function filtrare(Mesaj $mesaje)
    {
        $mesaje = Mesaj::sortable()->paginate(3);
        return view('mesaje.show',compact('mesaje'));
    }

    public function show(Mesaj $mesaje)
    {
       return view('mesaje.show', compact('mesaje'));
    }

    public function destroy($id)
    {
       $serviciu=Mesaj::find($id);
       $serviciu->delete();
       return redirect()-> route('mesaje.index')->with('success',"Mesajul a fost sters cu succes");
  
    }
   

}
