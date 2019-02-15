@extends('layouts.admin')

@section('content')
<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12 col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4>Daftar Transaksi Yang Belum Lunas</h4>
                </div>
                <div class="card-body table-responsive">
                  <table class="table table-hover">
                    <thead class="text">
                      <th>Nomor Meja</th>
                      <th>Keterangan</th>
                      <th>Waktu Pemesanan</th>
                      <th>Aksi</th>
                    </thead>
                    <tbody>
                    @if(isset($report))
                    @foreach($report as $laporan)
                      <tr>
                        <td>{{ $laporan->no_meja }}</td>
                        <td>{{ $laporan->keterangan }}</td>
                        <td>{{ $laporan->created_at->format('d F Y')  }}</td>
                        <td>
                          <a href="{{route('admin.pembayaran', $laporan->id) }}" class="btn btn-success btn-sm" role="button" aria-disabled="true">Pembayaran</a>
                        </td>
                      </tr>
                      @endforeach
                      @endif
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection
