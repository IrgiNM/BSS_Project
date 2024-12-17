<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Daftars;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class EditProduk extends Controller
{
    public function edit($id){
        $produk = Daftars::find($id);
        $script = "<script>
        document.getElementById('divadd').classList.remove('hidden');
        document.getElementById('block').classList.remove('hidden');
        document.getElementById('closeadd').classList.remove('hidden');
        </script>";
        $countProduk = Daftars::count();
        $produks = DB::table('daftar_produk')->get();
        return view('admin.editpro', compact('countProduk','produks','produk','script'));
    }

    public function update(Request $request, $id) {

        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:10240',
            'nama' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'tipe' => 'required|string|max:255',
            'stok' => 'required|integer',
            'harga' => 'required|integer',
        ]);

        $produk = Daftars::findOrFail($id);

        // Cek apakah ada file gambar yang diunggah
        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            if ($produk->gambar_produk) {
                Storage::delete('public/' . $produk->gambar_produk);
            }
            // Simpan gambar baru
            $path = $request->file('image')->store('images', 'public');
            $produk->gambar_produk = $path;
        }

        $produk->nama_produk = $request->input('nama');
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
