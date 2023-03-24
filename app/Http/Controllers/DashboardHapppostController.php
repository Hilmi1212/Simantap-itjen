<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Happpost;

class DashboardHapppostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.capppost.index', [
            'cappposts' => Happpost::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     * @return \Illuminate\Http\Responce
     */
    public function create()
    {
        return view('dashboard.capppost.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param \Illuminate\Http\Request $request
     * @return\Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:50',
            'deskripsi' => 'required|max:500',
        ]);

        Happpost::create($validatedData);
        return redirect('/dashboard/cappposts')->with('success', 'Berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     * @param \App\Mpdels\Htupost $tupost
     * @return \Illuminate\Http\response
     */
    public function show(Happpost $capppost)
    {
        return view('dashboard.capppost.show', [
            'capppost' => $capppost
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     * @param \App\Models\Happpost $apppost
     * @return \Illuminate\Http\Response
     */
    public function edit(Happpost $capppost)
    {
        return view('dashboard.capppost.edit', [
            'capppost' => $capppost,
            'cappposts' => Happpost::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Happpost $apppost
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Happpost $capppost)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:50',
            'deskripsi' => 'required|max:500',
        ]);

        Happpost::where('id', $capppost->id)
            ->update($validatedData);

        return redirect('/dashboard/cappposts')->with('success', 'Berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     * @param \App\Models\Happpost $apppost
     * @return \Illuminate\Http\Response
     */
    public function destroy(Happpost $capppost)
    {
        happpost::destroy($capppost->id);
        return redirect('/dashboard/cappposts')->with('success', 'Berhasil dihapus');
    }
}
