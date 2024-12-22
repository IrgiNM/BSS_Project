<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Orders;
use App\Models\OrderSablon;

class OrderPage extends Controller
{
    public function index(){
        $countbayardp = Orders::where('status','bayar dp')->count();
        $countbayarlunas = Orders::where('status','bayar lunas')->count();
        $countsablon = OrderSablon::count();
        $judul = 'Dashboard';
        $items = Orders::where('status', 'bayar dp')->with('customer')->get();
        return view('admin.order', compact('items','judul','countbayardp','countbayarlunas','countsablon'));
    }

    public function downloadBuktiDP($id)
    {
        // Cari data pelanggan berdasarkan ID
        $customer = Orders::find($id);
        
        // Tentukan path file di storage
        $filePath = storage_path('app/public/' . $customer->gambar); // Gunakan storage_path() 
        
        // Unduh file
        return response()->download($filePath);
    }

    public function lunas(){
        $countbayardp = Orders::where('status','bayar dp')->count();
        $countbayarlunas = Orders::where('status','bayar lunas')->count();
        $countsablon = OrderSablon::count();
        $judul = 'Data Lunas';
        $items = Orders::where('status', 'bayar lunas')->with('customer')->get();
        return view('admin.order', compact('items','judul','countbayardp','countbayarlunas','countsablon'));
    }
}
