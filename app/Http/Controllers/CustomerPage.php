<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use Illuminate\Support\Facades\DB;
class CustomerPage extends Controller
{
    public function index(){
        $customers = DB::table('users')->where('usertype', 'user')->get();
        $countCustomer = DB::table("users")->where('usertype', 'user')->count();
        return view('admin.customer', compact('customers', 'countCustomer'));
    }

    public function urutBy(Request $request){
        $order = $request->input('order');
        $customers = DB::table('users')->where('usertype', 'user')->orderBy('username', $order)->get();
        $countCustomer = DB::table("users")->where('usertype', 'user')->count();
        return view('admin.customer', compact('customers','countCustomer'));
    }

    public function urutByCari(Request $request){
        $cari = $request->input('cari');
        $customers = DB::table('users')->where('usertype', 'user')->where('username', 'like', "%{$cari}%")->orderBy('username', 'asc')->get();
        $countCustomer = DB::table("users")->where('usertype', 'user')->count();
        return view('admin.customer', compact('customers','countCustomer'));
    }

    public function urutTotalBy(){
        $customers = DB::table('users')->where('usertype', 'user')->orderBy('total_order', 'desc')->get();
        $countCustomer = DB::table("users")->where('usertype', 'user')->count();
        return view('admin.customer', compact('customers','countCustomer'));
    }

    public function urutById(){
        $customers = DB::table('users')->where('usertype', 'user')->orderBy('id', 'desc')->get();
        $countCustomer = DB::table("users")->where('usertype', 'user')->count();
        return view('admin.customer', compact('customers','countCustomer'));
    }

    public function deleteUser($id){
        $customer = Customer::find($id);
        if($customer){
            $customer->delete();
            return redirect()->route('all.by')->with('success', 'Customer berhasil');
        }
        return redirect()->route('all.by')->with('error', 'Customer gagal!');
    }

}
