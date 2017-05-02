<?php

namespace App\Http\Controllers;
use App\Surat;
use Illuminate\Http\Request;

class SuratController extends Controller
{
        public function index()
    {
        $surats = Surat::all();
        return view('surat.index',compact('surats'));
        //
    }
    public function single($id)
    {
        $surat = Surat::find($id);
        return view('surat.single',compact('surat'));
        
        //
    }
    //
}
