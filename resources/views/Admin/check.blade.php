@extends('layouts.admin')

@section('content')
<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12 col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4>Laporan Transaksi</h4>
                  <a href="{{ route('admin.report') }}" class="btn btn-success btn-sm btn-right" role="button" aria-disabled="true">Print Laporan</a>
                </div>
                <div class="card-body table-responsive">
                  <table class="table table-hover">
                    <thead class="text">
                      <th>Id Pemesanan</th>
                      <th>Masakan</th>
                      <th>Harga</th>
                      <th>Pembayaran</th>
                      <th>Kembali</th>
                    </thead>
                    <tbody>
                      <tr>
                      @foreach($orderan as $idorder)
                        <td>{{ $idorder->id }}</td>
                      @endforeach
                      @foreach($masakan as $makanan)
                        <td>{{ $makanan->nama }}</td>
                        <td>{{ $makanan->harga }}</td>
                      @endforeach
                        <td>{{ $bayar }}</td>
                        <td>{{ $kembali }}</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection
