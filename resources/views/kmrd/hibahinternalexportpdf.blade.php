
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
			 @foreach($hibahinternal as $hibahinternal)
			<tr>
          <td>{{$hibahinternal->judulpenelitian}}</td>
          <td>{{$hibahinternal->periode}}</td>
          <td>{{$hibahinternal->peneliti1}}</td>
          <td>{{$hibahinternal->anggotapeneliti}}</td>
          <td>{{$hibahinternal->kelompokkeahlian}}</td>
          <td>{{$hibahinternal->dana_diajukan}}</td>
          <td>{{$hibahinternal->dana_disetujui}}</td>
          <td>{{$hibahinternal->kategori}}</td>
          <td>{{$hibahinternal->status}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
 
</body>
</html>
											
                                         		