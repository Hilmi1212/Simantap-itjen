<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appbpost;

class DashboardAppbpostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.appbpost.index',[
            'appbposts'=> Appbpost::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     * @return \Illuminate\Http\Responce
     */
    public function create()
    {
        return view('dashboard.appbpost.create');
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

        Appbpost::create($validatedData);
        return redirect('/dashboard/appbposts')->with('success','Berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     * @param \App\Mpdels\Appbpost $appbpost
     * @return \Illuminate\Http\response
     */
    public function show(appbpost $appbpost)
    {
        return view('dashboard.appbpost.show',[
            'appbpost'=> $appbpost
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     * @param \App\Models\Appbpost $appbpost
     * @return \Illuminate\Http\Response
     */
    public function edit(Appbpost $appbpost)
    {
        return view('dashboard.appbpost.edit',[
            'appbpost'=>$appbpost,
            'appbposts'=> Appbpost::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Appbpost $appbpost
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Appbpost $appbpost)
    {
        $validatedData = $request->validate([
            'title'=>'required|max:25',
            'deskripsi'=>'required|max:150',
            'link'=>'required|max:150',
        ]);

        Appbpost::where('id',$appbpost->id)
            ->update($validatedData);

        return redirect('/dashboard/appbposts')->with('success','Berhasil diedit');



    }

    /**
     * Remove the specified resource from storage.
     * @param \App\Models\Appbpost $appbpost
     * @return \Illuminate\Http\Response
     */
    public function destroy(Appbpost $appbpost)
    {
        appbpost::destroy($appbpost->id);
        return redirect('/dashboard/appbposts')->with('success','Berhasil dihapus');
    }
}
