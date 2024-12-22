<?php

namespace App\Http\Controllers;

use App\Models\Notif;
use App\Models\OrderSablon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class Transaksi extends Controller
{
    public function index(){
         // Ambil id pengguna dari sesi
         $customerId = Auth::user()->id;
         $notif = Notif::where('id_customer', $customerId)->orderBy('id', 'desc')->get();
         $countnotif = Notif::where('id_customer', $customerId)->orderBy('id', 'desc')->count();
 
         $cartsablon = OrderSablon::where('id_customer', $customerId)->where('status', 'keranjang')->orderBy('id', 'desc')->get();
         $countcartsab = OrderSablon::where('id_customer', $customerId)->where('status', 'keranjang')->orderBy('id', 'desc')->count();

         $item = DB::table('order_sablon')->join('users', 'order_sablon.id_customer', '=', 'users.id')->select('order_sablon.*', 'users.username as nama_user')->where('status', 'tunggu konfirmasi')->orderBy('id', 'desc')->get();
         $aktif = "tk";        

        return view('belumkonf', compact('notif','countnotif','cartsablon','countcartsab','item','aktif'));
    }

    public function antri(){
         // Ambil id pengguna dari sesi
         $customerId = Auth::user()->id;
         $notif = Notif::where('id_customer', $customerId)->orderBy('id', 'desc')->get();
         $countnotif = Notif::where('id_customer', $customerId)->orderBy('id', 'desc')->count();
 
         $cartsablon = OrderSablon::where('id_customer', $customerId)->where('status', 'keranjang')->orderBy('id', 'desc')->get();
         $countcartsab = OrderSablon::where('id_customer', $customerId)->where('status', 'keranjang')->orderBy('id', 'desc')->count();

         $item = DB::table('order_sablon')->join('users', 'order_sablon.id_customer', '=', 'users.id')->select('order_sablon.*', 'users.username as nama_user')->where('status', 'ngantri')->orderBy('id', 'desc')->get();
         $aktif = "antri";        

        return view('belumkonf', compact('notif','countnotif','cartsablon','countcartsab','item','aktif'));
    }

    public function proses(){
         // Ambil id pengguna dari sesi
         $customerId = Auth::user()->id;
         $notif = Notif::where('id_customer', $customerId)->orderBy('id', 'desc')->get();
         $countnotif = Notif::where('id_customer', $customerId)->orderBy('id', 'desc')->count();
 
         $cartsablon = OrderSablon::where('id_customer', $customerId)->where('status', 'keranjang')->orderBy('id', 'desc')->get();
         $countcartsab = OrderSablon::where('id_customer', $customerId)->where('status', 'keranjang')->orderBy('id', 'desc')->count();

         $item = DB::table('order_sablon')->join('users', 'order_sablon.id_customer', '=', 'users.id')->select('order_sablon.*', 'users.username as nama_user')->where('status', 'diproses')->orderBy('id', 'desc')->get();
         $aktif = "pro";        

        return view('belumkonf', compact('notif','countnotif','cartsablon','countcartsab','item','aktif'));
    }

    public function ambil(){
         // Ambil id pengguna dari sesi
         $customerId = Auth::user()->id;
         $notif = Notif::where('id_customer', $customerId)->orderBy('id', 'desc')->get();
         $countnotif = Notif::where('id_customer', $customerId)->orderBy('id', 'desc')->count();
 
         $cartsablon = OrderSablon::where('id_customer', $customerId)->where('status', 'keranjang')->orderBy('id', 'desc')->get();
         $countcartsab = OrderSablon::where('id_customer', $customerId)->where('status', 'keranjang')->orderBy('id', 'desc')->count();

         $item = DB::table('order_sablon')->join('users', 'order_sablon.id_customer', '=', 'users.id')->select('order_sablon.*', 'users.username as nama_user')->where('status', 'siap diambil')->orderBy('id', 'desc')->get();
         $aktif = "ambil";        

        return view('belumkonf', compact('notif','countnotif','cartsablon','countcartsab','item','aktif'));
    }

    public function selesai(){
         // Ambil id pengguna dari sesi
         $customerId = Auth::user()->id;
         $notif = Notif::where('id_customer', $customerId)->orderBy('id', 'desc')->get();
         $countnotif = Notif::where('id_customer', $customerId)->orderBy('id', 'desc')->count();
 
         $cartsablon = OrderSablon::where('id_customer', $customerId)->where('status', 'keranjang')->orderBy('id', 'desc')->get();
         $countcartsab = OrderSablon::where('id_customer', $customerId)->where('status', 'keranjang')->orderBy('id', 'desc')->count();

         $item = DB::table('order_sablon')->join('users', 'order_sablon.id_customer', '=', 'users.id')->select('order_sablon.*', 'users.username as nama_user')->where('status', 'selesai')->orderBy('id', 'desc')->get();
         $aktif = "sel";        

        return view('belumkonf', compact('notif','countnotif','cartsablon','countcartsab','item','aktif'));
    }
}
