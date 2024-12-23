<?php

namespace App\Http\Controllers;

use App\Models\Notif;
use App\Models\Orders;
use App\Models\Ulasan;
use App\Models\OrderSablon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class UlasanPage extends Controller
{
    public function index(){
        $ulasans = DB::table('ulasan')->join('users', 'ulasan.id_customer', '=', 'users.id')->select('ulasan.*', 'users.username as nama_user')->orderBy('id', 'desc')->get();
        $ulasanCount = Ulasan::count();
        return view('admin.ulasan', compact('ulasans','ulasanCount'));
    }

    public function orderByLast(){
        $ulasans = DB::table('ulasan')->join('users', 'ulasan.id_customer', '=', 'users.id')->select('ulasan.*', 'users.username as nama_user')->orderBy('id', 'asc')->get();
        $ulasanCount = Ulasan::count();
        return view('admin.ulasan', compact('ulasans','ulasanCount'));
    }

    public function ulasanCari(Request $request){
        $cari = $request->input('cari');
        $ulasans = DB::table('ulasan')->join('users', 'ulasan.id_customer', '=', 'users.id')->where('users.username', 'like', "%$cari%")->select('ulasan.*', 'users.username as nama_user')->get();
        $ulasanCount = Ulasan::count();
        return view('admin.ulasan', compact('ulasans','ulasanCount'));
    }

    public function bintang1(){
        $ulasans = DB::table('ulasan')->join('users', 'ulasan.id_customer', '=', 'users.id')->select('ulasan.*', 'users.username as nama_user')->where('bintang', '1')->get();
        $ulasanCount = Ulasan::count();
        return view('admin.ulasan', compact('ulasans', 'ulasanCount'));
    }

    public function bintang2(){
        $ulasans = DB::table('ulasan')->join('users', 'ulasan.id_customer', '=', 'users.id')->select('ulasan.*', 'users.username as nama_user')->where('bintang', '2')->get();
        $ulasanCount = Ulasan::count();
        return view('admin.ulasan', compact('ulasans', 'ulasanCount'));
    }

    public function bintang3(){
        $ulasans = DB::table('ulasan')->join('users', 'ulasan.id_customer', '=', 'users.id')->select('ulasan.*', 'users.username as nama_user')->where('bintang', '3')->get();
        $ulasanCount = Ulasan::count();
        return view('admin.ulasan', compact('ulasans', 'ulasanCount'));
    }

    public function bintang4(){
        $ulasans = DB::table('ulasan')->join('users', 'ulasan.id_customer', '=', 'users.id')->select('ulasan.*', 'users.username as nama_user')->where('bintang', '4')->get();
        $ulasanCount = Ulasan::count();
        return view('admin.ulasan', compact('ulasans', 'ulasanCount'));
    }

    public function bintang5(){
        $ulasans = DB::table('ulasan')->join('users', 'ulasan.id_customer', '=', 'users.id')->select('ulasan.*', 'users.username as nama_user')->where('bintang', '5')->get();
        $ulasanCount = Ulasan::count();
        return view('admin.ulasan', compact('ulasans', 'ulasanCount'));
    }

    public function createUlasan(Request $request){
        // Ambil id pengguna dari sesi
        $customerId = Auth::user()->id;
        $request->validate([
            'id_ulasan' => 'nullable|string',
            'gambaru' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:10240',
            'ulasantext' => 'required|string',
            'star' => 'required|integer',
            'order' => 'required|string',
        ]);
        $imagePath = null;
        if($request->hasFile('gambaru')){
            Log::info('Image file is present.');
            $imagePath = $request->file('gambaru')->store('images', 'public');
            Log::info('Image stored at: ' . $imagePath);
        } else {
            Log::warning('No image file found in the request.');
        }

        // Memecah string menjadi array berdasarkan delimiter "/"
        $array = explode('/', $request->id_ulasan);

        // Mengkonversi setiap elemen array menjadi integer
        $ids = array_map('intval', $array);

        $ulasan = new Ulasan();
        $ulasan->id_customer = $customerId;
        $ulasan->gambar = $imagePath;
        $ulasan->ulasan = $request->ulasantext;
        $ulasan->bintang = $request->star;
        $ulasan->order = $request->order;
        $ulasan->created_at = now();
        $ulasan->updated_at = now();
        $ulasan->save();


        // edit id order_sablon dan membuat order
        foreach($ids as $id) {
            $ordersab = OrderSablon::find($id);
            if($ordersab) {
                $ordersab->status = "ulasan";
                $ordersab->created_at = now();
                $ordersab->save();
            }
        }


        // membuat notif
        $notif = new Notif();
        $notif->id_customer = $customerId;
        $notif->type = "ulasan";
        $notif->judul = "Ulasan berhasil!!";
        $notif->isi = "ulasan yang anda ajukan sudah berhasil terkirim. silahkan lihat ulasan anda dihalaman depan";
        $notif->link = "dashboard";
        $notif->created_at = now();
        $notif->updated_at = now();
        $notif->save();

        // Redirect atau response sesuai kebutuhan
        return redirect()->back()->with('notif', 'ulasan terkirim');
    }
}
