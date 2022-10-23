<?php

namespace App\Http\Controllers;
use App\Models\Servicii;
use Illuminate\Http\Request;

class ServiciiController extends Controller
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
    public function index()
    {
        $data=Servicii::latest()->paginate(10);
        return view('index',compact('data'))->with('i',(request()->input('page',1)-1*10));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('creare');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'titlu' => "required",
            'descriere' => "required",
            'imagine'=>"required|image|mimes:jpg,png,jpeg"
        ]);
        
        $file_name=time().".".request()->imagine->getClientOriginalExtension();
        request()->imagine->move(public_path('pic'), $file_name);

        $serviciu= new Servicii();
        
        $serviciu->titlu=$request->titlu;
        $serviciu->descriere=$request->descriere;
        $serviciu->imagine=$file_name;

        $serviciu->save();

        return redirect()-> route('servicii.index')->with('success',"Serviciu adaugat cu succes");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Servicii  $serviciu
     * @return \Illuminate\Http\Response
     */
    public function show(Servicii $servicii)
    {
       return view('show', compact('servicii'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Servicii  $serviciu
     * @return \Illuminate\Http\Response
     */
    public function edit(Servicii $servicii)
    {
        return view('edit',compact('servicii')); // trebuie schimbat edit- cu blade de edit 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Servicii  $servicii
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Servicii $servicii)
    {
        $request->validate([
            'titlu' => "required",
            'descriere' => "required",
            'imagine'=>"image|mimes:jpg,png,jpeg"
            ]);
      

        $servicii=Servicii::find($request->hidden_id);

        $servicii->titlu=$request->titlu;
        $servicii->descriere=$request->descriere;
        if($request->imagine != ""){
            $file_name=time().".".request()->imagine->getClientOriginalExtension();
            request()->imagine->move(public_path('pic'), $file_name);
            $servicii->imagine=$file_name;
        }

        $servicii->save();
        return redirect()->route('servicii.index')->with('success',"Serviciu modificat cu succes");
  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Servicii  $servicii
     * @return \Illuminate\Http\Response
     * 
     * 
     */
    public function destroy($id)
    {
       $serviciu=Servicii::find($id);
       $serviciu->delete();
       return redirect()-> route('servicii.index')->with('success',"Serviciu sters cu succes");
  
    }
}
