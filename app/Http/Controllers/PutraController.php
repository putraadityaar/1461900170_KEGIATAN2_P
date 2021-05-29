<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
 
 
class PutraController extends Controller
{
    public function buku()
    {
        $buku = DB::table('ms_buku')->get();
        return view('buku0170',['buku' => $buku]);
    }
    public function home()
    {
        return view('home0170');
    }
}