@extends('layouts.template')

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title">Tambah Anggota</h4>
          </div>
          <div class="card-body">
            <form method="POST" action="{{ route('tambahProses') }}">
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
                    <label>Alamat</label>
                    <div class="form-group">
                      <label class="bmd-label-floating"></label>
                      <textarea name="alamat" class="form-control" rows="1"></textarea>
                    </div>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                  <label for="exampleFormControlSelect1">Jenis Kelamin</label>
                    <select name="jk" class="form-control" id="exampleFormControlSelect1">
                      <option value="Laki-laki">Laki-laki</option>
                      <option value="Perempuan">Perempuan</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                  <label for="exampleFormControlSelect1">Status</label>
                    <select name="status" class="form-control" id="exampleFormControlSelect1">
                      <option value="Kawin">Kawin</option>
                      <option value="Belum kawin">Belum kawin</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label class="bmd-label-floating">Hobi</label>
                    <input type="text" name="hobi" class="form-control">
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                  <label for="exampleFormControlSelect1">Jurusan</label>
                    <select name="jurusan" class="form-control" id="exampleFormControlSelect1">
                      <option value="RPL">RPL</option>
                      <option value="AP">AP</option>
                      <option value="AK">AK</option>
                      <option value="PM">PM</option>
                    </select>
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
  </div>
</div>
@endsection
