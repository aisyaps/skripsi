@extends('layouts.master')

@section('content')
<div class="main">
	<div class="main-content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="panel">
								<div class="panel-heading">
								
									<h3 class="panel-title">Program Kerja KK</h3>
									<div class="right">
								</div>
								<div class="panel-body">
									<table class="table table-hover">
										<thead>
											<tr>
												<th>NO</th>
												<th>URAIAN</th>
												<th>TANGGAL</th>
												<th>DRK</th>
												<th>NOMINAL</th>
												<th>SALDO RKA</th>
										 		<th>SISA SALDO</th>
										 		<th>AKSI</th>

												
											</tr>
										</thead>
										<tbody>
									@foreach ($data_kmjurnal as $kmjurnal)
										<tr>
											<td>{{$kmjurnal-> nidn}}</td>
											<td><a href="{{$kmjurnal-> link}}"  target="_blank">{{$kmjurnal-> nama_dosen}}</a></td>
											<td>{{$kmjurnal-> jabatan}}</td>
											<td>{{$kmjurnal-> research_field}}</td>
											<td>{{$kmjurnal-> email}}</td>
											<td> <a href="/jurnal/{{$kmjurnal-> jurnal_id}}/kmjurnal">{{$kmjurnal-> jurnal->nama_jurnal}}</a></td>
										</tr>
								@endforeach
										</tbody>
									</table>
								</div>
							</div>
				</div>
			</div>
		</div>
	</div>
</div>
	
  </div>
</div>

@stop


