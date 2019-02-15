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
        // $a = Order::where('status_order','Belum Bayar')->get();
        // foreach ($a as $b)
        // $c = DetailOrder::where('id',$b->id)->get();
        // foreach ($c as $d)
        // $e = Masakan::where('id_masakan',$d->id_order)->get();
        // foreach ($e as $f)

    	$data['report'] = Order::where('status_order','Belum Bayar')->orderBy('id', 'desc')->get();
        // $data['masakan'] = Masakan::where('status_order','Belum Bayar')->orderBy('id', 'desc')->get();

    	return view('Admin.kasir', $data);
    }
    public function masakan(){
        $data['masakan'] = Masakan::orderBy('id', 'desc')->get();
        return view('Admin.tambah', $data);
    }
    public function laporan(){
        return view('Admin.laporan');
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
        $data = Transaksi::orderBy('id', 'desc')->get();
        $pdf = PDF::loadView('Admin.report', $data);
        $pdf->save(storage_path().'_filename.pdf');
        return $pdf->download('report.pdf');
    }
    public function keLaporan(Request $r){
        $a = DetailOrder::where('id',$r->idorder)->get();
        foreach ($a as $b)
        $c = Masakan::where('id',$b->id)->get();
        foreach ($c as $e)
        $dataharga = $e->harga;
        $data['kembali'] = $r->total += $harga;
        $data['masakan'] = Masakan::where('id', $e->id)->get();
        $data['orderan'] = Order::where('id', $r->idorder)->get();
        return redirect()->route('admin.laporan', $data);   
    }
    // public function checkProses(Request $r){
    //     $a = DetailOrder::where('id',$r->idorder)->get();
    //     foreach ($a as $b)
    //     $c = Masakan::where('id',$b->id)->get();
    //     foreach ($c as $e)


    //     $data['masakan'] = Masakan::where('id', $e->id)->get();
    //     $data['orderan'] = Order::where('id', $r->idorder)->get();
    //     $duit = $r->
    //     $data['pembayaran'] = $r->
    //     return view('Admin.check', $data);
    // }
    // public function pembayaranProses(Request $r){
    //     DB::table('orders')->where('id', $r->idorder)->update(['status_order' => 'Lunas']);

    //     $bayar = new Transaksi;
    //     $bayar->id_user = $r->iduser;
    //     $bayar->id_order = $r->idorder;
    //     $bayar->total = $r->total;
    //     $bayar->save();

    //     return redirect()->route('admin.kasir');   
    // }
}
