<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Daftars;
use App\Models\Ulasan;

class Home extends Controller
{
    public function index(){
        $favpro = Daftars::orderBy('dibeli','desc')->take(1)->get();
        $gambarpro = Daftars::orderBy('dibeli','desc')->get();
        $ulasans = Ulasan::join('users', 'ulasan.id_customer', '=', 'users.id')->select('ulasan.*', 'users.username as nama_user','users.email as email_user')->orderBy('bintang', 'desc')->get();
        return view('dashboard', compact('favpro','gambarpro','ulasans'));
    }
}
