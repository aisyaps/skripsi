
<!DOCTYPE html>
<html>
<head>
	<title>Kontrak Manajemen Haki Kelompok Keahlian Rekayasa Perangkat Lunak dan Multimedia</title>
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
					<th>JUDUL haki</th>
					<th>PERIODE</th>
					<th>PEMEGANG HAK CIPTA</th>
					<th>PENCIPTA 1</th>
					<th>2</th>
					<th>3</th>
					<th>4</th>
					<th>5</th>
					<th>6</th>
					<th>7</th>
					<th>KELOMPOK KEAHLIAN</th>
					<th>JENIS CIPTAAN</th>
					<th>TANGGAL</th>
					<th>BIAYA PENDAFTARAN</th>
					<th>STATUS</th>
			</tr>
		</thead>
		<tbody>
			@php $i=1 @endphp
			 @foreach($kmrplmhaki as $kmrplmhaki)
			<tr>
			<td>{{ $i++ }}</td>
            <td>{{$kmrplmhaki->id}}</td>
            <td>{{$kmrplmhaki->judulhaki}}</td>
            <td>{{$kmrplmhaki->periode}}</td>
            <td>{{$kmrplmhaki->pemeganghakcipta}}</td>
            <td>{{$kmrplmhaki->pencipta}}</td>
            <td>{{$kmrplmhaki->pencipta2}}</td>
            <td>{{$kmrplmhaki->pencipta3}}</td>
            <td>{{$kmrplmhaki->pencipta4}}</td>
            <td>{{$kmrplmhaki->pencipta5}}</td>
            <td>{{$kmrplmhaki->pencipta6}}</td>
            <td>{{$kmrplmhaki->pencipta7}}</td>
             <td>{{$kmrplmhaki->kelompokkeahlian}}</td>
             <td>{{$kmrplmhaki->jenisciptaan}}</td>
             <td>{{$kmrplmhaki->tgl}}</td>
             <td>{{$kmrplmhaki->biayapendaftaran}}</td>
            <td>{{$kmrplmhaki->status}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
 
</body>
</html>
											
                                         		