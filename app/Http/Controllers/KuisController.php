<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kuis;

class KuisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kuis = Kuis::all();
        return view('kuis.index', compact('kuis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kuis.create');
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
            'nama_kuis' => 'required',
        ]);

        $kuis = new Kuis([
        $kuis->nama_kuis = $request->input('nama_kuis'),
        ]);
        $kuis->save();


        return redirect('/kuis')->with('success', 'New Quiz Added');
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
        $kuis = Kuis::find($id);
        return view ('kuis.edit')->with('kuis',$kuis);
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
            'nama_kuis' => 'required',
        ]);

        $kuis = Kuis::find($id)([
        $kuis->nama_kuis = $request->input('nama_kuis'),
        ]);
        $kuis->save();


        return redirect('/kuis')->with('success', 'New Quiz Added');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kuis= Kuis::find($id);
        $kuis->delete();
        return redirect('/kuis')->with('success', 'Quiz Removed');
    }
}
