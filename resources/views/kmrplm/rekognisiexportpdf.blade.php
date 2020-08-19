
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
			 @foreach($kmrplmrekognisi as $kmrplmrekognisi)
			<tr>
			<td>{{ $i++ }}</td>
            <td>{{$kmrplmrekognisi->id}}</td>
            <td>{{$kmrplmrekognisi->judulkegiatan}}</td>
            <td>{{$kmrplmrekognisi->periode}}</td>
            <td>{{$kmrplmrekognisi->namadosen}}</td>
            <td>{{$kmrplmrekognisi->kelompokkeahlian}}</td>
            <td>{{$kmrplmrekognisi->tgl1}}</td>
            <td>{{$kmrplmrekognisi->tgl2}}</td>
            <td>{{$kmrplmrekognisi->tempat}}</td>
            <td>{{$kmrplmrekognisi->penyelenggara}}</td>
            <td>{{$kmrplmrekognisi->prodidosen}}</td>
            <td>{{$kmrplmrekognisi->keterangan}}</td>
            <td>{{$kmrplmrekognisi->status}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
 
</body>
</html>
											
                                         		