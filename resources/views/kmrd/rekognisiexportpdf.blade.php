
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
			 @foreach($rekognisi as $rekognisi)
			<tr>
			<td>{{ $i++ }}</td>
            <td>{{$rekognisi->id}}</td>
            <td>{{$rekognisi->judulkegiatan}}</td>
            <td>{{$rekognisi->periode}}</td>
            <td>{{$rekognisi->namadosen}}</td>
            <td>{{$rekognisi->kelompokkeahlian}}</td>
            <td>{{$rekognisi->tgl1}}</td>
            <td>{{$rekognisi->tgl2}}</td>
            <td>{{$rekognisi->tempat}}</td>
            <td>{{$rekognisi->penyelenggara}}</td>
            <td>{{$rekognisi->prodidosen}}</td>
            <td>{{$rekognisi->keterangan}}</td>
            <td>{{$rekognisi->status}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
 
</body>
</html>
											
                                         		