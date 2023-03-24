<?php

namespace App\Http\Controllers;
use App\Models\Footer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;



class FooterController extends Controller
{
   public function index()
    {
        return view('dashboard.footer.index', [
            'footers' => Footer::all()

        ]);


    }

    /**
     * Show the form for creating a new resource.
     * @return \Illuminate\Http\Responce
     */
    public function create()
    {
        return view('dashboard.footer.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param \Illuminate\Http\Request $request
     * @return\Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'notlp' => 'required|max:50',
            'email' => 'required|max:500',
            'footer' => 'required|max:500',
        ]);


        Footer::create($validatedData);
        return redirect('/dashboard/footer')->with('success', 'Berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     * @param \App\Mpdels\Footer $tupost
     * @return \Illuminate\Http\response
     */

    /**
     * Show the form for editing the specified resource.
     * @param \App\Models\Footer $tupost
     * @return \Illuminate\Http\Response
     */
    public function edit(Footer $footer)
    {
        return view('dashboard.footer.edit', [
            'footer' => $footer,
            'footers' => Footer::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Footer $footers
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Footer $footer)
    {
        $validatedData = $request->validate([
            'notlp' => 'required|max:50',
            'email' => 'required|max:500',
            'footer' => 'required|max:500',
        ]);

        Footer::where('id', $footer->id)
            ->update($validatedData);

        return redirect('/dashboard/footer')->with('success', 'Berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     * @param \App\Models\Footer $footer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Footer $footer)
    {
        Footer::destroy($footer->id);
        return redirect('/dashboard/footer')->with('success', 'Berhasil dihapus');
    }
}
