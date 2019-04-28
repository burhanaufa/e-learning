<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;
use App\Mapel;
use App\Guru;


class SiswaController extends Controller
{
    // public function __construct()
    // {
        // $this->middleware('auth');
    // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siswa = Siswa::paginate(10);
        return view('siswa.index', compact('siswa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mapel = Mapel::pluck('nama_mapel', 'id');
        $guru = Guru::pluck('nama_guru','id');
        return view('siswa.create',['mapel'=> $mapel,'guru' => $guru]);
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
            'nama_siswa' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $siswa = new Siswa;
        $siswa->nama_siswa = $request->nama_siswa;
        $siswa->email = $request->email;
        $siswa->password = $request->password;
        $siswa->save();
        $siswa->mapel()->sync($request->mapel);
        $siswa->guru()->sync($request->guru);
        return redirect('/siswa')->with('success', 'New Student Added');
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
        $siswa = Siswa::find($id);
        $mapel = Mapel::pluck('nama_mapel', 'id');
        $guru = Guru::pluck('nama_guru','id');
        return view('siswa.edit',['siswa'=> $siswa,'mapel' => $mapel,'guru'=>$guru]);
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
            'nama_siswa'=>'required',
            'email'=> 'required|email',
            'password' => 'required'
          ]);

          $siswa = Siswa::find($id);
          $siswa->nama_siswa = $request->get('nama_siswa');
          $siswa->email = $request->get('email');
          $siswa->password = $request->get('password');
          $siswa->save();
          $siswa->mapel()->sync($request->mapel);
          $siswa->guru()->sync($request->guru);
        return redirect('siswa')->with('success', 'New Student Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $siswa = Siswa::find($id);
        $siswa->delete();
        return redirect('/siswa')->with('success', 'Student Removed');
    }
}
