<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Materi;

class MateriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $materi = Materi::all();
        return view('materi.index', compact('materi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('materi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'nama_materi' => 'required',
            'konten_materi' => 'required',
        ]);

        $materi = new Materi([
        $materi->nama_materi = $request->input('nama_materi'),
        $materi->konten_materi = $request->input('konten_materi'),
        ]);
        $materi->save();


        return redirect('/materi')->with('success', 'New Lecture Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //$siswa = siswa::find($id);
        //return view ('siswa.show')->with ('siswa',$siswa);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $materi = Materi::find($id);
        return view ('materi.edit')->with('materi',$materi);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'nama_materi' => 'required',
            'konten_materi' => 'required',
        ]);

        $materi = Materi::find($id)([
        $materi->nama_materi = $request->input('nama_materi'),
        $materi->konten_materi = $request->input('konten_materi'),
        ]);
        $materi->save();


        return redirect('/materi')->with('success', 'New Lecture Added');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $materi= materi::find($id);
        $materi->delete();
        return redirect('/materi')->with('success', 'Lecture Removed');
    }
}
