<?php

namespace App\Http\Controllers;

use App\Models\Notif;
use App\Models\Orders;
use App\Models\Daftars;
use App\Models\Customer;
use App\Models\OrderSablon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class SablonPageP extends Controller
{
    public function index(){
        $countbayardp = Orders::where('status','bayar dp')->count();
        $countbayarlunas = Orders::where('status','bayar lunas')->count();
        $countsablon = OrderSablon::count();
        $judul = 'Sablon';
        $items = DB::table('order_sablon')->join('users', 'order_sablon.id_customer', '=', 'users.id')->select('order_sablon.*', 'users.username as nama_user')->orderBy('id', 'desc')->get();
        return view('admin.order_s', compact('items','judul','countbayardp','countbayarlunas','countsablon'));
    }

    public function sablonPrinting(){
        // Ambil id pengguna dari sesi
        $customerId = Auth::user()->id;
        $notif = Notif::where('id_customer', $customerId)->orderBy('id', 'desc')->get();
        $countnotif = Notif::where('id_customer', $customerId)->orderBy('id', 'desc')->count();

        $cartsablon = OrderSablon::where('id_customer', $customerId)->where('status', 'keranjang')->orderBy('id', 'desc')->get();
        $countcartsab = OrderSablon::where('id_customer', $customerId)->where('status', 'keranjang')->orderBy('id', 'desc')->count();
        return view('sablon_p', compact('notif','countnotif','cartsablon','countcartsab'));
    }

    public function store(Request $request) {

        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:10240',
            'nama' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'tipe' => 'required|string|max:255',
            'stok' => 'required|integer',
            'harga' => 'required|integer',
        ]);

        $imagePath = null;
        if($request->hasFile('image')){
            Log::info('Image file is present.');
            $imagePath = $request->file('image')->store('images', 'public');
            Log::info('Image stored at: ' . $imagePath);
        } else {
            Log::warning('No image file found in the request.');
        }


        $produk = new Daftars();
        $produk->nama_produk = $request->nama;
        $produk->gambar_produk = $imagePath;
        $produk->deskripsi = $request->deskripsi;
        $produk->tipe = $request->tipe;
        $produk->stok = $request->stok;
        $produk->harga = $request->harga;
        $produk->save();

        $countProduk = Daftars::count();
        $produks = DB::table('daftar_produk')->get();
        return view('admin.daftar', compact('countProduk','produks'));

    }

    public function downloadFile($id)
    {
        // Cari data pelanggan berdasarkan ID
        $customer = OrderSablon::find($id);
        
        // Tentukan path file di storage
        $filePath = storage_path('app/public/' . $customer->gambar); // Gunakan storage_path() 
        
        // Unduh file
        return response()->download($filePath);
    }

    public function edit($id){
        $countbayardp = Orders::where('status','bayar dp')->count();
        $countbayarlunas = Orders::where('status','bayar lunas')->count();
        $countsablon = OrderSablon::count();

        $judul = 'Sablon';
        $script = "
        document.getElementById('divadd').classList.toggle('hidden flex');
        document.getElementById('block').classList.toggle('hidden flex');
        document.getElementById('closeadd').classList.toggle('hidden flex');
        ";

        $sablons = OrderSablon::find($id);
        $items = DB::table('order_sablon')->join('users', 'order_sablon.id_customer', '=', 'users.id')->select('order_sablon.*', 'users.username as nama_user')->orderBy('id', 'desc')->get();
        
        return view('admin.order_s', compact('judul','items','script','sablons','countbayardp','countbayarlunas','countsablon'));
    }

    public function update(Request $request, $id) {

        // Validasi input
        $request->validate([
            'customer' => 'required|integer',
            'harga' => 'required|integer',
            'status' => 'required|string',
        ]);

        $orderSablon = OrderSablon::findOrFail($id);

        // Simpan data ke database
        $orderSablon->status = $request->status;
        $orderSablon->id_customer = $request->customer;
        $orderSablon->harga = $request->harga;
        $orderSablon->updated_at = now(); // Mengisi updated_at dengan NOW()
        $orderSablon->save();


        if($request->status == 'ngantri'){
            // membuat notif
            $notif = new Notif();
            $notif->id_customer = $request->customer;
            $notif->type = "ngantri";
            $notif->judul = "Pesanan dalam antrian!!";
            $notif->isi = "pesanan anda sudah dikonfirmasi oleh admin. sekarang sedang dalam antrian. tunggu pesanan lain selesai";
            $notif->link = "ngantri";
            $notif->created_at = now();
            $notif->updated_at = now();
            $notif->save();
        }
        elseif($request->status == 'siap diambil'){
            // membuat notif
            $notif = new Notif();
            $notif->id_customer = $request->customer;
            $notif->type = "diambil";
            $notif->judul = "Pesanan siap diambil!!";
            $notif->isi = "pesanan anda SUDAH JADI. silahkan lunasi pesanan anda";
            $notif->link = "siap.diambil";
            $notif->created_at = now();
            $notif->updated_at = now();
            $notif->save();
        }
        elseif($request->status == 'belum diambil'){
            // membuat notif
            $notif = new Notif();
            $notif->id_customer = $request->customer;
            $notif->type = "selesai";
            $notif->judul = "Ambil pesanan anda!!";
            $notif->isi = "pelunasan yang anda lakukan sudah dikonfirmasi oleh admin. silahkan ambil pesanan anda atau hubungi admin untuk pengantaran.";
            $notif->link = "order.selesai";
            $notif->created_at = now();
            $notif->updated_at = now();
            $notif->save();
        }
        elseif($request->status == 'sudah diambil'){
            // membuat notif
            $notif = new Notif();
            $notif->id_customer = $request->customer;
            $notif->type = "sudah diambil";
            $notif->judul = "TERIMA KASIH!!";
            $notif->isi = "Terima kasih sudah memesan di toko kami. kami tunggu pesanan anda yang lainnya ^^. beri ulasan anda!!";
            $notif->link = "order.selesai";
            $notif->created_at = now();
            $notif->updated_at = now();
            $notif->save();
        }

        $countbayardp = Orders::where('status','bayar dp')->count();
        $countbayarlunas = Orders::where('status','bayar lunas')->count();
        $countsablon = OrderSablon::count();

        $judul = 'Sablon';
        $items = DB::table('order_sablon')->join('users', 'order_sablon.id_customer', '=', 'users.id')->select('order_sablon.*', 'users.username as nama_user')->orderBy('id', 'desc')->get();
        return view('admin.order_s', compact('items','judul','countbayardp','countbayarlunas','countsablon'));

    }
}
