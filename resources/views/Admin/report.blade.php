    <h1>Laporan Transaksi</h1>
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