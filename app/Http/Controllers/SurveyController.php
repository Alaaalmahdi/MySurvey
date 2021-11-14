<?php

namespace App\Http\Controllers;

use App\Models\Survey;
use Illuminate\Http\Request;

class SurveyController extends Controller
{

public function home(Request $request)
  {
    $surveys = Survey::get();
     return view('index', compact('surveys'));
  }
}
