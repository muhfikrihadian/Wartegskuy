@extends('layouts.user')

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title">Pesan Masakan</h4>
          </div>
          <div class="card-body">
            <form method="POST" action="#">
            {{ csrf_field() }}
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                  <label for="exampleFormControlSelect1">Nomor Meja</label>
                    <select name="meja" class="form-control" id="exampleFormControlSelect1">
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                      <option value="6">6</option>
                      <option value="7">7</option>
                      <option value="8">8</option>
                      <option value="9">9</option>
                      <option value="10">10</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                  <label for="exampleFormControlSelect1">Makanan</label>
                    <select name="masakan" class="form-control" id="exampleFormControlSelect1">
                    @foreach($masakan as $makanan)
                      <option value="{{ $makanan->id }}">{{ $makanan->nama }}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label class="bmd-label-floating">Keterangan</label>
                    <input type="text" name="keterangan" class="form-control">
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
