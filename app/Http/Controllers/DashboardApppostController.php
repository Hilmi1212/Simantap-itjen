<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Apppost;

class DashboardApppostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.apppost.index',[
            'appposts'=> Apppost::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     * @return \Illuminate\Http\Responce
     */
    public function create()
    {
        return view('dashboard.apppost.create');
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

        Apppost::create($validatedData);
        return redirect('/dashboard/appposts')->with('success','Berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     * @param \App\Mpdels\Apppost $apppost
     * @return \Illuminate\Http\response
     */
    public function show(apppost $apppost)
    {
        return view('dashboard.apppost.show',[
            'apppost'=> $apppost
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     * @param \App\Models\Apppost $apppost
     * @return \Illuminate\Http\Response
     */
    public function edit(Apppost $apppost)
    {
        return view('dashboard.apppost.edit',[
            'apppost'=>$apppost,
            'appposts'=> Apppost::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Apppost $apppost
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Apppost $apppost)
    {
        $validatedData = $request->validate([
            'title'=>'required|max:25',
            'deskripsi'=>'required|max:150',
            'link'=>'required|max:150',
        ]);

        Apppost::where('id',$apppost->id)
            ->update($validatedData);

        return redirect('/dashboard/appposts')->with('success','Berhasil diedit');



    }

    /**
     * Remove the specified resource from storage.
     * @param \App\Models\Apppost $apppost
     * @return \Illuminate\Http\Response
     */
    public function destroy(Apppost $apppost)
    {
        apppost::destroy($apppost->id);
        return redirect('/dashboard/appposts')->with('success','Berhasil dihapus');
    }
}
