<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OrderSablon;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

class OrderSablonCon extends Controller
{
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'jeniskaos' => 'required|string',
            'warnakaos' => 'required|string',
            'posisikaos' => 'required|string',
            'jumlahkaos' => 'required|integer',
            'warnasablon' => 'required|string',
            'ukurankaos' => 'required|string',
            'metodekaos' => 'required|string',
            'status' => 'required|string',
        ]);

        $imagePath = null;
        if($request->hasFile('gambarkaos')){
            Log::info('gambarkaos file is present.');
            $imagePath = $request->file('gambarkaos')->store('images', 'public');
            Log::info('gambarkaos stored at: ' . $imagePath);
        } else {
            Log::warning('No gambarkaos file found in the request.');
        }
        
        $imagePath2 = null;
        if($request->hasFile('gambarjadi')){
            Log::info('gambarjadi file is present.');
            $imagePath2 = $request->file('gambarjadi')->store('images', 'public');
            Log::info('gambarjadi stored at: ' . $imagePath2);
        } else {
            Log::warning('No gambarjadi file found in the request.');
        }
        
        // Ambil id pengguna dari sesi
        $customerId = Auth::user()->id;

        // Simpan data ke database
        $orderSablon = new OrderSablon();
        $orderSablon->id_customer = $customerId;
        $orderSablon->jenis_kaos = $request->jeniskaos;
        $orderSablon->status = $request->status;
        $orderSablon->warna_kaos = $request->warnakaos;
        $orderSablon->gambar = $imagePath;
        $orderSablon->gambar_jadi = $imagePath2;
        $orderSablon->posisi = $request->posisikaos;
        $orderSablon->jumlah_kaos = $request->jumlahkaos;
        $orderSablon->warna_sablon = $request->warnasablon;
        $orderSablon->ukuran_sablon = $request->ukurankaos;
        $orderSablon->metode_kaos = $request->metodekaos;
        $orderSablon->bahan_sablon = "biasa";
        $orderSablon->created_at = now(); // Mengisi created_at dengan NOW()
        $orderSablon->updated_at = now(); // Mengisi updated_at dengan NOW()
        $orderSablon->save();

        // Redirect atau response sesuai kebutuhan
        return redirect()->back()->with('success', 'Order berhasil disimpan');
    }

    public function storeP(Request $request)
    {
        // Validasi input
        $request->validate([
            'jeniskaos2' => 'required|string',
            'warnakaos2' => 'required|string',
            'posisikaos2' => 'required|string',
            'jumlahkaos2' => 'required|integer',
            'warnasablon2' => 'required|string',
            'ukurankaos2' => 'required|string',
            'metodekaos2' => 'required|string',
            'status2' => 'required|string',
        ]);

        $imagePath = null;
        if($request->hasFile('gambarkaos2')){
            Log::info('gambarkaos file is present.');
            $imagePath = $request->file('gambarkaos2')->store('images', 'public');
            Log::info('gambarkaos stored at: ' . $imagePath);
        } else {
            Log::warning('No gambarkaos file found in the request.');
        }
        
        $imagePath2 = null;
        if($request->hasFile('gambarjadi2')){
            Log::info('gambarjadi file is present.');
            $imagePath2 = $request->file('gambarjadi2')->store('images', 'public');
            Log::info('gambarjadi stored at: ' . $imagePath2);
        } else {
            Log::warning('No gambarjadi file found in the request.');
        }
        
        // Ambil id pengguna dari sesi
        $customerId = Auth::user()->id;

        // Simpan data ke database
        $orderSablon = new OrderSablon();
        $orderSablon->id_customer = $customerId;
        $orderSablon->jenis_kaos = $request->jeniskaos;
        $orderSablon->status = $request->status;
        $orderSablon->warna_kaos = $request->warnakaos;
        $orderSablon->gambar = $imagePath;
        $orderSablon->gambar_jadi = $imagePath2;
        $orderSablon->posisi = $request->posisikaos;
        $orderSablon->jumlah_kaos = $request->jumlahkaos;
        $orderSablon->warna_sablon = $request->warnasablon;
        $orderSablon->ukuran_sablon = $request->ukurankaos;
        $orderSablon->metode_kaos = $request->metodekaos;
        $orderSablon->bahan_sablon = "biasa";
        $orderSablon->created_at = now(); // Mengisi created_at dengan NOW()
        $orderSablon->updated_at = now(); // Mengisi updated_at dengan NOW()
        $orderSablon->save();

        // Redirect atau response sesuai kebutuhan
        return redirect()->back()->with('success', 'Order berhasil disimpan');
    }
}

