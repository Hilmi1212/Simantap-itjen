<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Htupost;

class DashboardHtupostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.ctupost.index', [
            'ctuposts' => Htupost::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     * @return \Illuminate\Http\Responce
     */
    public function create()
    {
        return view('dashboard.ctupost.create');
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


        Htupost::create($validatedData);
        return redirect('/dashboard/ctuposts')->with('success', 'Berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     * @param \App\Mpdels\Htupost $tupost
     * @return \Illuminate\Http\response
     */
    public function show(htupost $ctupost)
    {
        return view('dashboard.ctupost.show', [
            'ctupost' => $ctupost
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     * @param \App\Models\Htupost $tupost
     * @return \Illuminate\Http\Response
     */
    public function edit(Htupost $ctupost)
    {
        return view('dashboard.ctupost.edit', [
            'ctupost' => $ctupost,
            'ctuposts' => Htupost::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Htupost $tupost
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Htupost $ctupost)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:50',
            'deskripsi' => 'required|max:500',
        ]);

        Htupost::where('id', $ctupost->id)
            ->update($validatedData);

        return redirect('/dashboard/ctuposts')->with('success', 'Berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     * @param \App\Models\Htupost $tupost
     * @return \Illuminate\Http\Response
     */
    public function destroy(Htupost $ctupost)
    {
        htupost::destroy($ctupost->id);
        return redirect('/dashboard/ctuposts')->with('success', 'Berhasil dihapus');
    }
}
