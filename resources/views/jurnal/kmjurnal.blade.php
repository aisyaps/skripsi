@extends('layouts.master')
@section('content')
	<div class="main">
		<div class="main-content">
			<div class="container-fluid">
				<div class="row">
				<div class="col-md-12">
		<div class="panel">
	<div class="panel-heading">
		<h3 class="panel-title"><strong>Data Jurnal dengan id {{$jurnal->id}}</strong></h3>
</div>
	<div class="panel-body">
		<table class="table table-hover">
			<thead>
			<tr>
			<th>JENIS JURNAL</th>
			<th>NAMA JURNAL</th>
			</tr>
			</thead>
			<tbody>	
			
        <tr>
	<td>{{$jurnal->jenis_jurnal}}</td>
	<td>{{$jurnal->nama_jurnal}}</td>
	</tr>	
			
          </tbody>
		</table>
	</div>
	</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@stop 
