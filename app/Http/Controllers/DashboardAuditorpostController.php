<?php

namespace App\Http\Controllers;

use App\Models\Auditorpost;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardAuditorpostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.auditorpost.index',[
            'auditorposts'=> Auditorpost::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     * @return \Illuminate\Http\Responce
     */
    public function create()
    {
        return view('dashboard.auditorpost.create');
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

        Auditorpost::create($validatedData);
        return redirect('/dashboard/auditorposts')->with('success','Berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     * @param \App\Mpdels\Auditorpost $auditorpost
     * @return \Illuminate\Http\response
     */
    public function show(auditorpost $auditorpost)
    {
        return view('dashboard.auditorpost.show',[
            'auditorpost'=> $auditorpost
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     * @param \App\Models\Auditorpost $auditorpost
     * @return \Illuminate\Http\Response
     */
    public function edit(Auditorpost $auditorpost)
    {
        return view('dashboard.auditorpost.edit',[
            'auditorpost'=>$auditorpost,
            'auditorposts'=> Auditorpost::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Auditorpost $auditorpost
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Auditorpost $auditorpost)
    {
        $validatedData = $request->validate([
            'title'=>'required|max:25',
            'deskripsi'=>'required|max:150',
            'link'=>'required|max:150',
        ]);

        Auditorpost::where('id',$auditorpost->id)
            ->update($validatedData);

        return redirect('/dashboard/auditorposts')->with('success','Berhasil diedit');



    }

    /**
     * Remove the specified resource from storage.
     * @param \App\Models\Auditorpost $auditorpost
     * @return \Illuminate\Http\Response
     */
    public function destroy(Auditorpost $auditorpost)
    {
        Auditorpost::destroy($auditorpost->id);
        return redirect('/dashboard/auditorposts')->with('success','Berhasil dihapus');
    }
}
