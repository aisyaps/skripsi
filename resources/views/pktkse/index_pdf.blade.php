
<!doctype html>
<html>
<head>
	<title>Program Kerja Kelompok Keahlian Teknologi Informasi</title>
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
		<h5>Program Kerja Kelompok Keahlian Rekayasa Data </h4>
	</center>
 
	<table class='table table-bordered'>
		<thead>
			<tr>
				<th>NO</th>
                <th>RENCANA KERJA</th>
				<th>JUSTIFIKASI</th>
				<th>TANGGAL</th>
				<th>DRK</th>
				<th>RENCANA BIAYA</th>
				<th>KATEGORI</th>
				<th>PIC</th>
				<th>STATUS</th>
				<th>AKSI</th>
			</tr>
		</thead>
		<tbody>
			@php $i=1 @endphp
			@foreach($pktkse as $pktkse)
			<tr>
			<td>{{ $i++ }}</td>
			<td>{{$pktkse->id}}</td>
            <td>{{$pktkse->rencanakerja}}</td>
            <td>{{$pktkse->justifikasi}}</td>
            <td>{{$pktkse->tgl_plan}}</td>
            <td>{{$pktkse->drk}}</td>
            <td>{{$pktkse->rencanabiaya}}</td>
            <td>{{$pktkse->kategori}}</td>
            <td>{{$pktkse->pic}}</td>
            <td>{{$pktkse->status}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
 
</body>
</html>

