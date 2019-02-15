@extends('layouts.admin')

@section('content')
<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12 col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4>Daftar Pengguna Wartegskuy</h4>
                </div>
                <div class="card-body table-responsive">
                  <table class="table table-hover">
                    <thead class="text">
                      <th>Nama</th>
                      <th>Username</th>
                      <th>Role</th>
                      <th>Email</th>
                      <th>Aksi</th>
                    </thead>
                    <tbody>
                    @if(isset($users))
                    @foreach($users as $pengguna)
                      <tr>
                        <td>{{ $pengguna->name }}</td>
                        <td>{{ $pengguna->username }}</td>
                        <td>{{ $pengguna->role }}</td>
                        <td>{{ $pengguna->email }}</td>
                        <form action="{{ route('admin.hapusUser') }}" method="POST">
                        {{ csrf_field() }}
                        <td>
                          <input type="hidden" name="iduser" value="{{ $pengguna->id }}">
                          <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                        </td>
                        </form>
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
