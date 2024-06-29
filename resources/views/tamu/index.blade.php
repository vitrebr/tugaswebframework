@extends('admin.index')

@section('tamu')

<h1>This is buku</h1>

<table class="table" border="1">
  <thead style="background: #ec37fc; color: black;">
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Email</th>
      <th scope="col">No. HP</th>
      <th scope="col">Keterangan</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($buku_tamus as $number => $index)

    <tr>
        <th scope="row">{{ $number + 1 }}</th>
        <td>{{ $index->nama }}</td>
        <td>{{ $index->email }}</td>
        <td>{{ $index->nohp }}</td>
        <td class="col-3">{{ $index->keterangan }}</td>
    </tr>
    @endforeach
</tbody>
</table>
<br>
{{ $buku_tamus->links('pagination::bootstrap-4') }}
@endsection
