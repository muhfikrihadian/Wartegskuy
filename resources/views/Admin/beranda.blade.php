@extends('layouts.admin')

@section('content')
<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-success card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">group</i>
                  </div>
                  <p class="card-category">Jumlah Pengguna</p>
                  <h3 class="card-title">{{ $users }}</h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <a href="{{ route('admin.users') }}" class="btn btn-success btn-sm" role="button">Selengkapnya</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-success card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">attach_money</i>
                  </div>
                  <p class="card-category">Transaksi</p>
                  <h3 class="card-title">{{ $transaksi }}</h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <a href="{{ route('admin.laporan') }}" class="btn btn-success btn-sm" role="button">Selengkapnya</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection
