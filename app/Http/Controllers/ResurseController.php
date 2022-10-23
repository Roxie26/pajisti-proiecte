<?php

namespace App\Http\Controllers;

use App\Models\Resurse;
use Illuminate\Http\Request;

class ResurseController extends Controller
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
        $data = Resurse::latest()->paginate(10);
        return view('resurse.index', compact('data'))->with('i', (request()->input('page', 1) - 1 * 10));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('resurse.creare');
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
            'imagine' => "required|image|mimes:jpg,png,jpeg"
        ]);

        $file_name = time() . "." . request()->imagine->getClientOriginalExtension();
        request()->imagine->move(public_path('pic'), $file_name);

        $resurse = new Resurse();

        $resurse->titlu = $request->titlu;
        $resurse->descriere = $request->descriere;
        $resurse->imagine = $file_name;

        $resurse->save();

        return redirect()->route('resurse.index')->with('success', "Resursa adaugata cu succes");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Resurse  $resurse
     * @return \Illuminate\Http\Response
     */
    public function show(Resurse $resurse)
    {
        return view('resurse.show', compact('resurse'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Resurse  $resurse
     * @return \Illuminate\Http\Response
     */
    public function edit(Resurse $resurse)
    {
        return view('resurse.edit', compact('resurse')); // trebuie schimbat edit- cu blade de edit 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Resurse  $resurse
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Resurse $resurse)
    {
        $request->validate([
            'titlu' => "required",
            'locatie' => "required",
        ]);

        $resurse = Resurse::find($request->hidden_id);

        $resurse->titlu = $request->titlu;
        $resurse->locatie = $request->locatie;
        $resurse->data = $request->data;
        if ($request->data && isset($request->data['imagine']) && $request->data['imagine'] != "") {
            $file_name = time() . "." . request()->data['imagine']->getClientOriginalExtension();
            request()->data['imagine']->move(public_path('pic'), $file_name);
            $tempResurseData = $resurse->data;
            unset($resurse->data);
            $tempResurseData['imagine'] = $file_name;
            $resurse->data = $tempResurseData;
            unset($tempResurseData);
        }

        $resurse->save();
        return redirect()->route('resurse.index')->with('success', "Resursa modificata cu succes");
    }
}
