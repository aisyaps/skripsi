
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
				<th>JUDUL</th>
				<th>PERIODE</th>
				<th>NAMA DOSEN</th>
				<th>NAMA MAHASISWA</th>
				<th>KELOMPOK KEAHLIAN</th>
				<th>TGL</th>
				<th>TEMPAT</th>
				<th>PRODI DOSEN</th>
				<th>2</th>
				<th>3</th>
				<th>4</th>
				<th>5</th>
				<th>KATEGORI</th>
				<th>BIAYA</th>
				<th>STATUS</th>
			</tr>
		</thead>
		<tbody>
			@php $i=1 @endphp
			 @foreach($kmtiae as $kmtiae)
			<tr>
			<td>{{ $i++ }}</td>
            <td>{{$kmtiae->id}}</td>
            <td>{{$kmtiae->judulkegiatanpengmas}}</td>
            <td>{{$kmtiae->periode}}</td>
            <td>{{$kmtiae->namadosen}}</td>
            <td>{{$kmtiae->namamahasiswa}}</td>
            <td>{{$kmtiae->kelompokkeahlian}}</td>
            <td>{{$kmtiae->tgl}}</td>
            <td>{{$kmtiae->tempat}}</td>
            <td>{{$kmtiae->prodidosen}}</td>
            <td>{{$kmtiae->prodidosen2}}</td>
            <td>{{$kmtiae->prodidosen3}}</td>
            <td>{{$kmtiae->prodidosen4}}</td>
            <td>{{$kmtiae->prodidosen5}}</td>
            <td>{{$kmtiae->kategori}}</td>
            <td>{{$kmtiae->biaya}}</td>
            <td>{{$kmtiae->status}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
 
</body>
</html>
											
                                         		