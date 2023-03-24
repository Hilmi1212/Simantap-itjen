<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hauditorpost;

class DashboardHauditorpostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.cauditorpost.index', [
            'cauditorposts' => Hauditorpost::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     * @return \Illuminate\Http\Responce
     */
    public function create()
    {
        return view('dashboard.cauditorpost.create');
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

        Hauditorpost::create($validatedData);
        return redirect('/dashboard/cauditorposts')->with('success', 'Berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     * @param \App\Mpdels\Hauditorpost $tupost
     * @return \Illuminate\Http\response
     */
    public function show(Hauditorpost $cauditorpost)
    {
        return view('dashboard.cauditorpost.show', [
            'cauditorpost' => $cauditorpost
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     * @param \App\Models\Hauditorpost $appbpost
     * @return \Illuminate\Http\Response
     */
    public function edit(Hauditorpost $cauditorpost)
    {
        return view('dashboard.cauditorpost.edit', [
            'cauditorpost' => $cauditorpost,
            'cauditorposts' => Hauditorpost::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Hauditorpost $auditorpost
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hauditorpost $cauditorpost)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:50',
            'deskripsi' => 'required|max:500',
        ]);

        Hauditorpost::where('id', $cauditorpost->id)
            ->update($validatedData);

        return redirect('/dashboard/cauditorposts')->with('success', 'Berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     * @param \App\Models\Hauditorpost $auditorpost
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hauditorpost $cauditorpost)
    {
        hauditorpost::destroy($cauditorpost->id);
        return redirect('/dashboard/cauditorposts')->with('success', 'Berhasil dihapus');
    }
}
