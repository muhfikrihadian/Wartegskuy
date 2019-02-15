@extends('layouts.admin')

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title">Pembayaran</h4>
          </div>
          <div class="card-body">
            <form method="POST" action="{{ route('admin.keProses') }}">
            {{ csrf_field() }}
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label class="bmd-label-floating">Total Pembayaran</label>
                    <input type="number" name="total" class="form-control">
                  </div>
                </div>
              </div>
              @foreach($orderan as $order)
              <input type="hidden" name="idorder" value="{{$order->id}}">
              <input type="hidden" name="iduser" value="{{$order->id_user}}">
              @endforeach
              <button type="submit" class="btn btn-primary">Bayar</button>
              <div class="clearfix"></div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
