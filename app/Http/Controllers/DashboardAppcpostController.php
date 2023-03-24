<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appcpost;

class DashboardAppcpostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.appcpost.index',[
            'appcposts'=> Appcpost::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     * @return \Illuminate\Http\Responce
     */
    public function create()
    {
        return view('dashboard.appcpost.create');
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

        Appcpost::create($validatedData);
        return redirect('/dashboard/appcposts')->with('success','Berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     * @param \App\Mpdels\Appcpost $appcpost
     * @return \Illuminate\Http\response
     */
    public function show(appcpost $appcpost)
    {
        return view('dashboard.appcpost.show',[
            'appcpost'=> $appcpost
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     * @param \App\Models\Appcpost $appcpost
     * @return \Illuminate\Http\Response
     */
    public function edit(Appcpost $appcpost)
    {
        return view('dashboard.appcpost.edit',[
            'appcpost'=>$appcpost,
            'appcposts'=> Appcpost::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Appcpost $appcpost
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Appcpost $appcpost)
    {
        $validatedData = $request->validate([
            'title'=>'required|max:25',
            'deskripsi'=>'required|max:150',
            'link'=>'required|max:150',
        ]);

        Appcpost::where('id',$appcpost->id)
            ->update($validatedData);

        return redirect('/dashboard/appcposts')->with('success','Berhasil diedit');



    }

    /**
     * Remove the specified resource from storage.
     * @param \App\Models\Appcpost $appcpost
     * @return \Illuminate\Http\Response
     */
    public function destroy(Appcpost $appcpost)
    {
        appcpost::destroy($appcpost->id);
        return redirect('/dashboard/appcposts')->with('success','Berhasil dihapus');
    }
}
