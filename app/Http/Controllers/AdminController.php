<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\DetailOrder;
use App\Masakan;
use App\Transaksi;
use App\User;
use Auth;
use DB;
use PDF;

class AdminController extends Controller
{
    public function index()
    {
        $data['transaksi'] = Transaksi::all()->count();
        $data['users'] = User::all()->count();
        return view('Admin.beranda', $data);
    }
    public function users(){
    	$data['users'] = User::orderBy('id', 'desc')->get();
    	return view('Admin.users', $data);
    }
    public function kasir(){
    	$data['report'] = Order::where('status_order','Belum Bayar')->orderBy('id', 'desc')->get();

    	return view('Admin.kasir', $data);
    }
    public function masakan(){
        $data['masakan'] = Masakan::orderBy('id', 'desc')->get();
        return view('Admin.tambah', $data);
    }
    public function laporan(){
        $data['laporan'] = Order::where('status_order','Lunas')->get();
        return view('Admin.laporan', $data);
    }
    public function tambahMasakan(Request $r){
        $tambah = new Masakan;
        $tambah->nama = $r->nama;
        $tambah->harga = $r->harga;
        $tambah->save();

        return redirect()->route('admin.tambah');
    }
    public function pembayaran($id){
        $data['orderan'] = Order::where('id',$id)->orderBy('id', 'desc')->get();
        // dd($data['orderan']);
        return view('Admin.pembayaran', $data);
    }
    public function hapusUser(Request $r){
        $delete = User::where('id', $r->iduser)->delete();
        return redirect()->route('admin.users');   
    }
    public function exportPdf(){
        $data['laporan'] = Order::where('status_order','Lunas')->orderBy('id', 'desc')->get();
        $pdf = PDF::loadView('Admin.report', $data);
        $pdf->save(storage_path().'_filename.pdf');
        return $pdf->download('report.pdf');
    }
    public function keLaporan(Request $r){
        $a = DetailOrder::where('id',$r->idorder)->get();
        foreach ($a as $b)
        $c = Masakan::where('id',$b->id)->get();
        foreach ($c as $e)
        $harga = $e->harga;
        $data['bayar'] = $r->total;
        $data['kembali'] = $r->total -= $harga;
        $data['masakan'] = Masakan::where('id', $e->id)->get();
        $data['orderan'] = Order::where('id', $r->idorder)->get();

        $pembayaran = new Transaksi;
        $pembayaran->id_user = $r->iduser;
        $pembayaran->id_order = $r->idorder;
        $pembayaran->total = $harga;
        $pembayaran->save();

        DB::table('orders')->where('id', $r->idorder)->update(['status_order' => 'Lunas']);

        return view('Admin.check', $data);
    }
}
