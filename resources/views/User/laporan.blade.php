@extends('layouts.user')

@section('content')
<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12 col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Daftar Anggota</h4>
                </div>
                <div class="card-body table-responsive">
                  <table class="table table-hover">
                    <thead>
                      <th>Nomor Meja</th>
                      <th>Keterangan</th>
                      <th>Status</th>
                      <th>Makanan</th>
                    </thead>
                    <tbody>
                    @foreach($report as $laporan)
                      <tr>
                        <td>{{ $laporan->no_meja }}</td>
                        <td>{{ $laporan->keterangan }}</td>
                        <td>{{ $laporan->status_order }}</td>
                        @foreach($makanan as $lapor)
                        <td>{{ $lapor->nama }}</td>
                        @endforeach
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
