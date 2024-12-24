<?php

namespace App\Http\Controllers;

use App\Models\Province;
use Illuminate\Http\Request;

class MapController extends Controller
{
    public function index()
    {
      $provinces = Province::all();
      return view('maps.index', ['provinces' => $provinces]);
    }
}
