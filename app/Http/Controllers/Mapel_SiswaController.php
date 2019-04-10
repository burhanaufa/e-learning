<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mapel;
use App\Siswa;


class Mapel_SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mapel = Mapel ::all();
        $siswa = Siswa ::all();
        return view('mapel_siswa.index', compact('mapel'));
        return view('mapel_siswa.index', compact('siswa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mapel_siswa.create');
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
            'mapel_id' => 'required',
            'siswa_id' => 'required'
        ]);
        $mapel = new Mapel([
            'mapel_id'=> $request->get('mapel_id'),
            ]);
        $siswa = new Siswa([
            'siswa_id'=> $request->get('siswa_id')
            ]);
        $mapel->save();
        $siswa->siswa();

        return redirect('/mapel_siswa')->with('success', 'New Lecture Added');
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
        $mapel = Mapel::find($id);
        $siswa = Siswa::find($id);
        return view ('mapel_siswa.edit')->with('mapel_id',$mapel);
        return view ('mapel_siswa.edit')->with('siswa_id',$siswa);
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
            'mapel_id' => 'required',
            'siswa_id' => 'required'
        ]);
        $mapel = Mapel::find($id);
        $siswa = Siswa::find($id);
        $mapel->mapel_id = $request->get('mapel_id');
        $siswa->siswa_id = $request->get('siswas_id');
        $mapel->save();
        $siswa->save();

        return redirect('/mapel_siswa')->with('success', 'New Pivots Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mapel= Mapel::find($id);
        $siswa= Siswa::find($id);
        $mapel->delete();
        $siswa->delete();
        return redirect('/mapel_siswa')->with('success', 'Lecture Removed');
    }
}
