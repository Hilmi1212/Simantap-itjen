<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Happcpost;

class DashboardHappcpostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.cappcpost.index', [
            'cappcposts' => Happcpost::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     * @return \Illuminate\Http\Responce
     */
    public function create()
    {
        return view('dashboard.cappcpost.create');
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

        Happcpost::create($validatedData);
        return redirect('/dashboard/cappcposts')->with('success', 'Berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     * @param \App\Mpdels\Happcpost $tupost
     * @return \Illuminate\Http\response
     */
    public function show(Happcpost $cappcpost)
    {
        return view('dashboard.cappcpost.show', [
            'cappcpost' => $cappcpost
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     * @param \App\Models\Happcpost $appbpost
     * @return \Illuminate\Http\Response
     */
    public function edit(Happcpost $cappcpost)
    {
        return view('dashboard.cappcpost.edit', [
            'cappcpost' => $cappcpost,
            'cappcposts' => Happcpost::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Happcpost $appcpost
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Happcpost $cappcpost)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:50',
            'deskripsi' => 'required|max:500',
        ]);

        Happcpost::where('id', $cappcpost->id)
            ->update($validatedData);

        return redirect('/dashboard/cappcposts')->with('success', 'Berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     * @param \App\Models\Happpost $apppost
     * @return \Illuminate\Http\Response
     */
    public function destroy(Happcpost $cappcpost)
    {
        happcpost::destroy($cappcpost->id);
        return redirect('/dashboard/cappcposts')->with('success', 'Berhasil dihapus');
    }
}
