    <h1>Customer List</h1>
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