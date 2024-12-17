<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Daftars;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(){
        $countProduk = Daftars::count();
        $stok = Daftars::sum('stok');
        $stokmin = Daftars::min('stok');
        $customers = Customer::all();
        $countCustomer = DB::table("users")->where('usertype', 'user')->count();
        return view('admin.dashboard', compact(
            'customers', 'countCustomer','countProduk','stok',
            'stokmin'
        ));
    }
}
