
<!DOCTYPE html>
<html>
<head>
	<title>Kontrak Manajemen Abdimaseksternal Kelompok Keahlian Rekayasa Data</title>
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
			 @foreach($abdimaseksternal as $abdimaseksternal)
			<tr>
			<td>{{ $i++ }}</td>
            <td>{{$abdimaseksternal->id}}</td>
            <td>{{$abdimaseksternal->judulkegiatanpengmas}}</td>
            <td>{{$abdimaseksternal->periode}}</td>
            <td>{{$abdimaseksternal->namadosen}}</td>
            <td>{{$abdimaseksternal->namamahasiswa}}</td>
            <td>{{$abdimaseksternal->kelompokkeahlian}}</td>
            <td>{{$abdimaseksternal->tgl}}</td>
            <td>{{$abdimaseksternal->tempat}}</td>
            <td>{{$abdimaseksternal->prodidosen}}</td>
            <td>{{$abdimaseksternal->prodidosen2}}</td>
            <td>{{$abdimaseksternal->prodidosen3}}</td>
            <td>{{$abdimaseksternal->prodidosen4}}</td>
            <td>{{$abdimaseksternal->prodidosen5}}</td>
            <td>{{$abdimaseksternal->kategori}}</td>
            <td>{{$abdimaseksternal->biaya}}</td>
            <td>{{$abdimaseksternal->status}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
 
</body>
</html>
											
                                         		