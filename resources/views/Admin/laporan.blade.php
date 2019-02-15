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
                      <th>Id Order</th>
                      <th>Nomor Meja</th>
                      <th>Id User</th>
                      <th>Keterangan</th>
                      <th>Tanggal</th>
                    </thead>
                    <tbody>
                    @foreach($laporan as $report)
                      <tr>
                        <td>{{ $report->id }}</td>
                        <td>{{ $report->no_meja }}</td>
                        <td>{{ $report->id_user }}</td>
                        <td>{{ $report->keterangan }}</td>
                        <td>{{ $report->created_at->format('d F Y')  }}</td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection
