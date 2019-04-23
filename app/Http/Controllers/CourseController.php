<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Materi;


class CourseController extends Controller
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
  public function index($id)
  {
    $materi = Materi::where('mapels_id', $id)->get();;
    return view('courses.index', ['course' => $materi]);
  }
}
