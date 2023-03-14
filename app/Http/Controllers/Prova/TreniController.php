<?php

namespace App\Http\Controllers\Prova;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Train;

class TreniController extends Controller
{
   public function index() {
    $treni = Train::where('orario_partenza', '>=' , date('y-m-d'))->get();
    return view('welcome', compact('treni'));
   }
}
