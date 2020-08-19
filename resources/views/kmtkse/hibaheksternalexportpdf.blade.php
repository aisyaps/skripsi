
<!DOCTYPE html>
<html>
<head>
	<title>Kontrak Manajemen Haki Kelompok Keahlian Tata Kelola dan Sistem Enterprise</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
	<center>
		<h6><a target="_blank" href="https://www.malasngoding.com/membuat-laporan-…n-dompdf-laravel/">www.malasngoding.com</a></h5>
	</center>
 
	<table class='table table-bordered'>
		<thead>
			<tr>
			<th>JUDUL PENELITIAN</th>
			<th>PERIODE</th>
			<th>PENELITI 1</th>
			<th>ANGGOTA PENELITI</th>
			<th>KELOMPOK KEAHLIAN</th>
			<th>DANA YANG DIAJUKAN</th>
			<th>DANA YANG DISETUJUI</th>
			<th>KATEGORI</th>
			<th>STATUS</th>
			<th>AKSI</th>
			</tr>
		</thead>
		<tbody>
			@php $i=1 @endphp
			  @foreach($data_kmtksehe as $kmtksehe)
			<tr>
			<td>{{ $i++ }}</td>
            <td>{{$kmtksehe->judulpenelitian}}</td>
            <td>{{$kmtksehe->periode}}</td>
            <td>{{$kmtksehe->peneliti1}}</td>
            <td>{{$kmtksehe->anggotapeneliti}}</td>
            <td>{{$kmtksehe->kelompokkeahlian}}</td>
            <td>{{$kmtksehe->dana_diajukan}}</td>
            <td>{{$kmtksehe->dana_disetujui}}</td>
            <td>{{$kmtksehe->kategori}}</td>
            <td>{{$kmtksehe->status}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
 
</body>
</html>
											
                                         		