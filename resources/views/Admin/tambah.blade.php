@extends('layouts.admin')

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title">Tambah Masakan</h4>
          </div>
          <div class="card-body">
            <form method="POST" action="{{ route('admin.tambahMasakan') }}">
            {{ csrf_field() }}
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label class="bmd-label-floating">Nama</label>
                    <input type="text" name="nama" class="form-control">
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label class="bmd-label-floating">Harga</label>
                    <input type="number" name="harga" class="form-control">
                  </div>
                </div>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
              <div class="clearfix"></div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
            <div class="col-lg-12 col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4>Daftar Masakan</h4>
                </div>
                <div class="card-body table-responsive">
                  <table class="table table-hover">
                    <thead class="text">
                      <th>Nama</th>
                      <th>Harga</th>
                      <th>Aksi</th>
                    </thead>
                    <tbody>
                    @foreach($masakan as $makanan)
                      <tr>
                        <td>{{ $makanan->nama }}</td>
                        <td>{{ $makanan->harga }}</td>
                        <td>
                          <a href="#" class="btn btn-success btn-sm" role="button" aria-disabled="true">Edit</a>
                        </td>
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
