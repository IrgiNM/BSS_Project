<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ulasan;
use Illuminate\Support\Facades\DB;
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
}
