
<!DOCTYPE html>
<html>
<head>
	<title>Kontrak Manajemen Haki Kelompok Keahlian Rekayasa Data</title>
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
			</tr>
		</thead>
		<tbody>
			 @foreach($hibaheksternal as $hibaheksternal)
			<tr>
          <td>{{$hibaheksternal->judulpenelitian}}</td>
          <td>{{$hibaheksternal->periode}}</td>
          <td>{{$hibaheksternal->peneliti1}}</td>
          <td>{{$hibaheksternal->anggotapeneliti}}</td>
          <td>{{$hibaheksternal->kelompokkeahlian}}</td>
          <td>{{$hibaheksternal->dana_diajukan}}</td>
          <td>{{$hibaheksternal->dana_disetujui}}</td>
          <td>{{$hibaheksternal->kategori}}</td>
          <td>{{$hibaheksternal->status}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
 
</body>
</html>
											
                                         		