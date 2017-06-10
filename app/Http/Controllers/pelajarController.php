<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pelajar;

class pelajarController extends Controller
{
    //
    
    public function percobaan()
    {
    	$a = pelajar::all();
    	return view('pelajar', compact('a'));
    }

    public function show($pelajar)
    {
    $pelajar=pelajar::find($pelajar);
    return $pelajar;
}
    

}
