 @extends('layouts.master')

@section('content')

<div class="main">
			<!-- MAIN CONTENT -->
	<div class="main-content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="panel">
									<div class="panel-body">
									<table class="table table-hover" id="datatable">
								
									<h2 class="panel-title">Informasi File</h2>
									<div class="right">

									<td>Judul</td>
									<td>:</td>
									<td>{{$data->judul}}</td>
									<td>Keterangan</td>
									<td>:</td>
									<td>{{$data->keterangan}}</td>
									<p>
										<iframe src="{{url('storage/'.$data->file)}}" style="width:1100px; height:500px;"></iframe>
									</p>
								
								</div>
							</div>
				</div>
			</div>
		</div>
	</div>
</div>

  @stop
	