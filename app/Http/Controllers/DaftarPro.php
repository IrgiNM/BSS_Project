<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Daftars;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;

class DaftarPro extends Controller
{
    public function deleteProduk($id){
        $produk = Daftars::find($id);
        if($produk){
            $produk->delete();
            return redirect()->route('daftar.pro')->with('success', 'produk berhasil');
        }
        return redirect()->route('daftar.pro')->with('error', 'Customer gagal!');
    }

    public function urutTotalBy(){
        $produks = DB::table('daftar_produk')->orderBy('dibeli', 'desc')->get();
        $countProduk = Daftars::count();
        return view('admin.daftar', compact('countProduk','produks'));
    }

    public function urutById(){
        $produks = DB::table('daftar_produk')->orderBy('id', 'desc')->get();
        $countProduk = Daftars::count();
        return view('admin.daftar', compact('countProduk','produks'));
    }

    public function urutByCari(Request $request){
        $cari = $request->input('cari');
        $produks = DB::table('daftar_produk')->where('nama_produk', 'like', "%{$cari}%")->orderBy('nama_produk', 'asc')->get();
        $countProduk = Daftars::count();
        return view('admin.daftar', compact('countProduk','produks'));
    }

    public function stickerPro(){
        $produks = DB::table('daftar_produk')->where('tipe', 'sticker')->orderBy('nama_produk', 'asc')->get();
        $countProduk = Daftars::count();
        return view('admin.daftar', compact('countProduk','produks'));
    }

    public function kaosPro(){
        $produks = DB::table('daftar_produk')->where('tipe', 'kaos')->orderBy('nama_produk', 'asc')->get();
        $countProduk = Daftars::count();
        return view('admin.daftar', compact('countProduk','produks'));
    }

    public function urutBy(Request $request){
        $order = $request->input('order');
        $produks = DB::table('daftar_produk')->orderBy('nama_produk', $order)->get();
        $countProduk = Daftars::count();
        return view('admin.daftar', compact('countProduk','produks'));
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


}
