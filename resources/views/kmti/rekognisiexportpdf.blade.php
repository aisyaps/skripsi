
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
				<th>JUDUL KEGIATAN</th>
				<th>PERIODE</th>
				<th>NAMA DOSEN</th>
				<th>KELOMPOK KEAHLIAN</th>
				<th>TGL MULAI</th>
				<th>TGL SELESAI</th>
				<th>TEMPAT</th>
				<th>PENYELENGGARA</th>
				<th>PRODI DOSEN</th>
				<th>KET</th>
				<th>STATUS</th>
			</tr>
		</thead>
		<tbody>
			@php $i=1 @endphp
			 @foreach($kmtire as $kmtire)
			<tr>
			<td>{{ $i++ }}</td>
            <td>{{$kmtire->id}}</td>
            <td>{{$kmtire->judulkegiatan}}</td>
            <td>{{$kmtire->periode}}</td>
            <td>{{$kmtire->namadosen}}</td>
            <td>{{$kmtire->kelompokkeahlian}}</td>
            <td>{{$kmtire->tgl1}}</td>
            <td>{{$kmtire->tgl2}}</td>
            <td>{{$kmtire->tempat}}</td>
            <td>{{$kmtire->penyelenggara}}</td>
            <td>{{$kmtire->prodidosen}}</td>
            <td>{{$kmtire->keterangan}}</td>
            <td>{{$kmtire->status}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
 
</body>
</html>
											
                                         		