<head>
<meta name="viewport" content="width=device-width,
initial-scale=1">
<title>Data BUKU</title>
<style>
table {
border-collapse: collapse;
border-spacing: 0;
width: 100%;
border: 1px solid #ddd;
}
thead {
background-color: #f2f2f2;
}
th, td {
text-align: left;
padding: 8px;
}
tr:nth-child(even){background-color: #f2f2f2}
.tambah{
padding: 8px 16px ;
text-decoration: none;
}
</style>
</head>
<body>
<div style="overflow-x:auto;">
<a class="tambah" href="{{route(
'mahasiswa.create')}}"> Tambah sewa buku </a>
<a class="tambah" href="{{url( '/mahasiswa/pdf')}}"> Print </a>
<table>
<thead>
<tr>
<th>id</th>
<th>TAHUN BUKU</th>
<th>Nama BUKU</th>
<th> Aksi</th>
</tr>
</thead>
<tbody>
<?php $no=1; ?>
@foreach ($mahasiswa as $mhs)
<tr>
<td>{{$no++}}</td>
<td>{{$mhs->nbi}}</td>
<td>{{$mhs->nama_mhs}}</td>
<td>
<div style="overflow-x:auto;">
<a class="edit" href="{{route(
'mahasiswa.create')}}"> Edit </a>
|
    <a href=""> Hapus</a>
</td>
</tr>
@endforeach
</tbody>
</table>
</div>
</body>
