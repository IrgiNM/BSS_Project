<?php

namespace App\Http\Controllers;

use App\Models\Notif;
use App\Models\Ulasan;
use App\Models\Daftars;
use App\Models\OrderSablon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Home extends Controller
{
    public function index(){
        // Ambil id pengguna dari sesi
        $customerId = Auth::user()->id;
        $notif = Notif::where('id_customer', $customerId)->orderBy('id', 'desc')->get();

        $cartsablon = OrderSablon::where('id_customer', $customerId)->where('status', 'keranjang')->orderBy('id', 'desc')->get();

        $favpro = Daftars::orderBy('dibeli','desc')->take(1)->get();
        $gambarpro = Daftars::orderBy('dibeli','desc')->get();
        $ulasans = Ulasan::join('users', 'ulasan.id_customer', '=', 'users.id')->select('ulasan.*', 'users.username as nama_user','users.email as email_user')->orderBy('bintang', 'desc')->get();
        return view('dashboard', compact('favpro','gambarpro','ulasans','notif','cartsablon'));
    }
}
