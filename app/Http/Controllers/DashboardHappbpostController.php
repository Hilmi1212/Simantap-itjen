<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Happbpost;

class DashboardHappbpostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.cappbpost.index', [
            'cappbposts' => Happbpost::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     * @return \Illuminate\Http\Responce
     */
    public function create()
    {
        return view('dashboard.cappbpost.create');
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

        Happbpost::create($validatedData);
        return redirect('/dashboard/cappbposts')->with('success', 'Berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     * @param \App\Mpdels\Htubpost $tupost
     * @return \Illuminate\Http\response
     */
    public function show(Happbpost $cappbpost)
    {
        return view('dashboard.cappbpost.show', [
            'cappbpost' => $cappbpost
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     * @param \App\Models\Happbpost $appbpost
     * @return \Illuminate\Http\Response
     */
    public function edit(Happbpost $cappbpost)
    {
        return view('dashboard.cappbpost.edit', [
            'cappbpost' => $cappbpost,
            'cappbposts' => Happbpost::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Happbpost $appbpost
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Happbpost $cappbpost)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:50',
            'deskripsi' => 'required|max:500',
        ]);

        Happbpost::where('id', $cappbpost->id)
            ->update($validatedData);

        return redirect('/dashboard/cappbposts')->with('success', 'Berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     * @param \App\Models\Happpost $apppost
     * @return \Illuminate\Http\Response
     */
    public function destroy(Happbpost $cappbpost)
    {
        happbpost::destroy($cappbpost->id);
        return redirect('/dashboard/cappbposts')->with('success', 'Berhasil dihapus');
    }
}
