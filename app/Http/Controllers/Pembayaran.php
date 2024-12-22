<?php

namespace App\Http\Controllers;

use App\Models\Orders;
use App\Models\Notif;
use App\Models\OrderSablon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

class Pembayaran extends Controller
{
    public function bayarlunas(Request $request){
        // Ambil id pengguna dari sesi
        $customerId = Auth::user()->id;
        $request->validate([
            'gambarb' => 'required|image|mimes:jpeg,png,jpg,gif|max:10240',
            'alamatb' => 'required|string'
        ]);
        $imagePath = null;
        if($request->hasFile('gambarb')){
            Log::info('Image file is present.');
            $imagePath = $request->file('gambarb')->store('images', 'public');
            Log::info('Image stored at: ' . $imagePath);
        } else {
            Log::warning('No image file found in the request.');
        }

        $order = Orders::where('id_customer', $customerId)->where('status', 'bayar dp')->orderBy('id', 'desc')->first();
        $order->gambar = $imagePath;
        $order->alamat = $request->alamatb;
        $order->status = "bayar lunas";
        $order->save();

        // membuat notif
        $notif = new Notif();
        $notif->id_customer = $customerId;
        $notif->type = "bayar lunas";
        $notif->judul = "Pembayaran sudah Lunas!!";
        $notif->isi = "Pesanan yang anda lakukan berhasil dilunaskan. silahkan hubungi admin untuk mengambil pesanan anda.";
        $notif->link = "{{ route('siap.diambil') }}";
        $notif->created_at = now();
        $notif->updated_at = now();
        $notif->save();

        // Redirect atau response sesuai kebutuhan
        return redirect()->back()->with('notif', 'Pelunasan berhasil dilakukan');
    }


    public function bayardp(Request $request) {

        // Ambil id pengguna dari sesi
        $customerId = Auth::user()->id;

        $request->validate([
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:10240',
            'status' => 'required|string|max:255',
            'id_sab' => 'nullable|string',
            'alamat' => 'required|string',
            'harga' => 'required|integer',
        ]);

        $imagePath = null;
        if($request->hasFile('gambar')){
            Log::info('Image file is present.');
            $imagePath = $request->file('gambar')->store('images', 'public');
            Log::info('Image stored at: ' . $imagePath);
        } else {
            Log::warning('No image file found in the request.');
        }

        // membuat order
        $order = new Orders();
        $order->id_customer = $customerId;
        $order->id_sablon = $request->id_sab;
        $order->status = $request->status;
        $order->alamat = $request->alamat;
        $order->gambar = $imagePath;
        $order->updated_at = now();
        $order->created_at = now();
        $order->harga = $request->harga;
        $order->save();

        // membuat notif
        $notif = new Notif();
        $notif->id_customer = $customerId;
        $notif->type = "menunggu konfirmasi";
        $notif->judul = "Pembayaran Berhasil!!";
        $notif->isi = "Pembayaran yang anda lakukan berhasil terkirim ke admin. tunggu pesanan anda dikonfirmasi";
        $notif->link = "belum.konfirmasi";
        $notif->created_at = now();
        $notif->updated_at = now();
        $notif->save();

        // Memecah string menjadi array berdasarkan delimiter "/"
        $array = explode('/', $request->id_sab);

        // Mengkonversi setiap elemen array menjadi integer
        $ids = array_map('intval', $array);

        // edit id order_sablon
        foreach($ids as $id){
            $ordersab = OrderSablon::find($id);
            if($ordersab){
                $ordersab->status = "tunggu konfirmasi";
                $ordersab->updated_at = now();
                $ordersab->save();
            }
        }

        // Redirect atau response sesuai kebutuhan
        return redirect()->back()->with('notif', 'Pembayaran berhasil dilakukan');
    }
}
