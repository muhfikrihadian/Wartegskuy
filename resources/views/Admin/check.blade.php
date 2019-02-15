@extends('layouts.admin')

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12 col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4>Daftar Masakan</h4>
          </div>
          <div class="card-body table-responsive">
            <table class="table table-hover">
              <thead class="text">
                <th>Masakan</th>
                <th>Harga</th>
                <th>Pembayaran</th>
                <th>Kembali</th>
              </thead>
              <tbody>
                @foreach($masakan as $makanan)
                <tr>
                  <td>{{ $makanan->nama }}</td>
                  <td>{{ $makanan->harga }}</td>
                  <td>Sekian</td>
                  <td>Sekian</td>
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
