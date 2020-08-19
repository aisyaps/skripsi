
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
			 @foreach($publikasiseminar as $publikasiseminar)
			<tr>
			<td>{{ $i++ }}</td>
            <td>{{$publikasiseminar->judulpenelitian}}</td>
			<td>{{$publikasiseminar->periode}}</td>
			<td>{{$publikasiseminar->penulis1}}</td>
			<td>{{$publikasiseminar->anggotapenulis}}</td>
			<td>{{$publikasiseminar->kelompokkeahlian}}</td>
			<td>{{$publikasiseminar->kategori}}</td>
			<td>{{$publikasiseminar->nama}}</td>
			<td>{{$publikasiseminar->publisherlokasi}}</td>
			<td>{{$publikasiseminar->volnojurnaltglsem}}</td>
			<td>{{$publikasiseminar->biayapublikasi}}</td>
			<td>{{$publikasiseminar->stimulus}}</td>
			<td>
                 <a href="{{$publikasiseminar->keterangan}}">Link</a></td>
                 <td>{{$publikasiseminar->status}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
 
</body>
</html>
											
                                         		