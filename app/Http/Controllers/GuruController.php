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
        return view('guru.index', ['guru' => $guru]);
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
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $guru = new Guru;
        $guru->nama_guru = $request->nama_guru;
        $guru->email = $request->email;
        $guru->password = $request->password;
        $guru->mapels_id = $request->mapels_id;

        $guru->save();;

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
            'email' => 'required|email',
            'password' => 'required',

        ]);
        $guru = Guru::find($id);
        $guru->nama_guru = $request->input('nama_guru');
        $guru->email = $request->input('email');
        $guru->password = $request->input('password');
        $guru->mapels_id = $request->input('mapels_id');
        $guru->save();

        return redirect('/guru')->with('success', 'New Teacher Added');
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
