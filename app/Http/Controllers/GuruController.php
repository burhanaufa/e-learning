<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Guru;

class GuruController extends Controller
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
        $guru = Guru::all();
        return view('guru.index', compact('guru'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('guru.create');
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
            'nama_guru' => 'required',
            'nip' => 'required|integer',
            'password' => 'required'
        ]);

        $guru = new Guru([
            'nama_guru' => $request->get('nama_guru'),
            'nip' => $request->get('nip'),
            'password' => $request->get('password')
        ]);
        $guru->save();

        return redirect('/guru')->with('success', 'New Teacher Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //$guru = guru::find($id);
        //return view ('guru.show')->with ('guru',$guru);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $guru = guru::find($id);
        return view ('guru.edit')->with('guru',$guru);
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
            'nama_guru' => 'required',
            'nip' => 'required|integer',
            'password' => 'required'
        ]);
        $guru = Guru::find($id);
        $guru->nama_guru = $request->input('nama_guru');
        $guru->nip = $request->input('nip');
        $guru->password = $request->input('password');
        $guru->save();

        return redirect('/guru')->with('success', 'New  Added');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $guru = Guru::find($id);
        $guru->delete();
        return redirect('/guru')->with('success', 'Teacher Removed');
    }
}
