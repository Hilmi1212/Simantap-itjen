<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tupost;

class DashboardTupostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.tupost.index',[
            'tuposts'=> Tupost::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     * @return \Illuminate\Http\Responce
     */
    public function create()
    {
        return view('dashboard.tupost.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param \Illuminate\Http\Request $request
     * @return\Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title'=>'required|max:25',
            'deskripsi'=>'required|max:150',
            'link'=>'required|max:150',
        ]);

        Tupost::create($validatedData);
        return redirect('/dashboard/tuposts')->with('success','Berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     * @param \App\Mpdels\Tupost $tupost
     * @return \Illuminate\Http\response
     */
    public function show(tupost $tupost)
    {
        return view('dashboard.tupost.show',[
            'tupost'=> $tupost
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     * @param \App\Models\Tupost $tupost
     * @return \Illuminate\Http\Response
     */
    public function edit(Tupost $tupost)
    {
        return view('dashboard.tupost.edit',[
            'tupost'=>$tupost,
            'tuposts'=> Tupost::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Tupost $tupost
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tupost $tupost)
    {
        $validatedData = $request->validate([
            'title'=>'required|max:25',
            'deskripsi'=>'required|max:150',
            'link'=>'required|max:150',
        ]);

        Tupost::where('id',$tupost->id)
            ->update($validatedData);

        return redirect('/dashboard/tuposts')->with('success','Berhasil diedit');



    }

    /**
     * Remove the specified resource from storage.
     * @param \App\Models\Tupost $tupost
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tupost $tupost)
    {
        Tupost::destroy($tupost->id);
        return redirect('/dashboard/tuposts')->with('success','Berhasil dihapus');
    }
}
