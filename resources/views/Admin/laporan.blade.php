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
                      <th>Id User</th>
                      <th>Id Order</th>
                      <th>Total</th>
                    </thead>
                    <tbody>
                    @foreach($laporan as $report)
                      <tr>
                        <td>{{ $report->id_user }}</td>
                        <td>{{ $report->id_order }}</td>
                        <td>{{ $report->total }}</td>
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
