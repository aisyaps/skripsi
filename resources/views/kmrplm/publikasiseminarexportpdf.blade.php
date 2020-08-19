
<!DOCTYPE html>
<html>
<head>
	<title>Kontrak Manajemen abdimaseksternal Kelompok Keahlian Rekayasa Perangkat Lunak dan Multimedia</title>
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
				<th>NO</th>
				<th>JUDUL PENELITIAN</th>
				<th>PERIODE</th>
				<th>PENULIS 1</th>
				<th>ANGGOTA PENULIS</th>
				<th>KELOMPOK KEAHLIAN</th>
				<th>KATEGORI</th>
				<th>NAMA JURNAL/SEMINAR</th>
				<th>PUBLISHER JURNAL/LOKASI SEMINAR</th>
				<th>VOL. /NO JURNAL/TANGGAL SEMINAR</th>
				<th>BIAYA PUBLIKASI</th>
				<th>STIMULUS</th>
				<th>KET</th>
				<th>STATUS</th>
			</tr>
		</thead>
		<tbody>
			@php $i=1 @endphp
			 @foreach($kmrplmpublikasiseminar as $kmrplmpublikasiseminar)
			<tr>
			<td>{{ $i++ }}</td>
            <td>{{$kmrplmpublikasiseminar->id}}</td>
            <td>{{$kmrplmpublikasiseminar->judulpenelitian}}</td>
			<td>{{$kmrplmpublikasiseminar->periode}}</td>
			<td>{{$kmrplmpublikasiseminar->penulis1}}</td>
			<td>{{$kmrplmpublikasiseminar->anggotapenulis}}</td>
			<td>{{$kmrplmpublikasiseminar->kelompokkeahlian}}</td>
			<td>{{$kmrplmpublikasiseminar->kategori}}</td>
			<td>{{$kmrplmpublikasiseminar->nama}}</td>
			<td>{{$kmrplmpublikasiseminar->publisherlokasi}}</td>
			<td>{{$kmrplmpublikasiseminar->volnojurnaltglsem}}</td>
			<td>{{$kmrplmpublikasiseminar->biayapublikasi}}</td>
			<td>{{$kmrplmpublikasiseminar->stimulus}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
 
</body>
</html>
											
                                         		