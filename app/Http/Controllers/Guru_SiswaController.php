<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Guru;
use App\Siswa;


class Guru_SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $guru = Guru ::all();
        $siswa = Siswa ::all();
        return view('guru_siswa.index', compact('guru'));
        return view('guru_siswa.index', compact('siswa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('guru_siswa.create');
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
            'guru_id' => 'required',
            'siswa_id' => 'required'
        ]);
        $guru = new Guru([
            'guru_id'=> $request->get('guru_id'),
            ]);
        $siswa = new Siswa([
            'siswa_id'=> $request->get('siswa_id')
            ]);
        $guru->save();
        $siswa->siswa();

        return redirect('/guru_siswa')->with('success', 'New Pivots Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $guru = Guru::find($id);
        $siswa = Siswa::find($id);
        return view ('guru_siswa.edit')->with('guru_id',$guru);
        return view ('guru_siswa.edit')->with('siswa_id',$siswa);
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
            'guru_id' => 'required',
            'siswa_id' => 'required'
        ]);
        $guru = Guru::find($id);
        $siswa = Siswa::find($id);
        $guru->guru_id = $request->get('guru_id');
        $siswa->siswa_id = $request->get('siswa_id');
        $guru->save();
        $siswa->save();

        return redirect('/guru_siswa')->with('success', 'New Pivots Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $guru= Guru::find($id);
        $siswa= Siswa::find($id);
        $guru->delete();
        $siswa->delete();
        return redirect('/guru_siswa')->with('success', 'Pivots Removed');
    }
}
