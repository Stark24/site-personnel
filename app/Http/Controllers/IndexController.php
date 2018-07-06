<?php

namespace App\Http\Controllers;

use App\Models\Detail_perso;
use Illuminate\Http\Request;

class IndexController extends Controller
{
public function affiche()
{
  $detail_peoples = Detail_perso::all();

    return view('index',compact('detail_peoples'));
}

}
