
<!DOCTYPE html>
<html>
<head>
	<title>Program Kerja Kelompok Keahlian Rekayasa Data</title>
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
		<h6>Institut Teknologi Telkom Purwokerto</h5>
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
			@foreach($pkrd as $p)
			<tr>
			<td>{{ $i++ }}</td>
			<td>{{$p->id}}</td>
            <td>{{$p->rencanakerja}}</td>
            <td>{{$p->justifikasi}}</td>
            <td>{{$p->tgl_plan}}</td>
            <td>{{$p->drk}}</td>
            <td>{{$p->rencanabiaya}}</td>
            <td>{{$p->kategori}}</td>
            <td>{{$p->pic}}</td>
            <td>{{$p->status}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
 
</body>
</html>

