<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Orders;

class OrderPage extends Controller
{
    public function index(){
        $judul = 'Dashboard';
        $items = Orders::where('status', 'bayar dp')->with('customer')->get();
        return view('admin.order', compact('items','judul'));
    }

    public function lunas(){
        $judul = 'Data Lunas';
        $items = Orders::where('status', 'lunas')->with('customer')->get();
        return view('admin.order', compact('items','judul'));
    }
}
