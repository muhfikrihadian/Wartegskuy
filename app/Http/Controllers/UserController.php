<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\DetailOrder;
use App\Masakan;
use App\Transaksi;
use App\User;
use Auth;

class UserController extends Controller
{
    public function index()
    {
        $data['masakan'] = Masakan::all();
        return view('User.beranda', $data);
    }
    public function pesan(Request $r){
    	$order = new Order;
    	$order->no_meja = $r->meja;
    	$order->id_user = Auth::user()->id;
    	$order->keterangan = $r->keterangan;
    	$order->status_order = 'Belum Bayar';
    	$order->save();

    	$detail = new DetailOrder;
    	$detail->id_order = $order->id;
    	$detail->id_masakan = $r->masakan;
    	$detail->keterangan = $r->keterangan;
    	$detail->save();

    	return redirect()->route('user.laporan');
    }
    public function laporan(){
    	$data['report'] = Order::where('id_user',Auth::user()->id)->get();
    	
    	$a = Order::where('id_user',Auth::user()->id)->get();
    	foreach($a as $orderan)
    	$data['order'] = DetailOrder::where('id_order',$orderan->id)->get();

    	$b = DetailOrder::where('id_order',$orderan->id)->get();
    	foreach ($b as $c)
    	$data['makanan'] = Masakan::where('id',$c->id_masakan)->get();

    	return view('User.laporan', $data);
    }
}
