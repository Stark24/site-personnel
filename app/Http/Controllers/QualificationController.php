<?php

namespace App\Http\Controllers;

use App\Models\Qualification;
use Illuminate\Http\Request;

class QualificationController extends Controller
{
    public function affiche()
    {
        $qualif = Qualification::all();

        return view('services',compact('qualif'));
    }
}
