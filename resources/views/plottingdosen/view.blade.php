 @extends('layouts.master')

@section('content')

<div class="main">
			<!-- MAIN CONTENT -->
	<div class="main-content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="panel">
								<div class="panel-heading">
								
									<h3 class="panel-title">Download File Plotting Dosen</h3>
									<div class="right">
									</div>
								</div>
								<div class="panel-body">
									<table class="table table-hover" id="datatable">
										<a href="/plottingdosen/create" class="btn btn-warning btn-sm">Upload file</a>
										<h6>Ekstensi file yang di upload</h6>
										<thead>
											<tr>
												<th>no</th>
												<th>Judul</th>
												<th>Keterangan</th>
												<th>Aksi</th>
										 		
											</tr>
										</th ead>

                                         <tbody>
                                         	@foreach($file as $key=>$data)
                                         	<tr>
                  								<td>{{++$key}}</td>
                                         		<td>{{$data->judul}}</td>
                                         		<td>{{$data->keterangan}}</td>
                                         
                                         <!-- 	<a href="/plottingdosen/{{$data->id}}" class="btn btn-warning btn-sm">Lihat</a>  -->
                                         		<td>
                                         	<a href="/plottingdosen/download/{{$data->file}}" class="btn btn-primary btn-sm">Download</a>
                                         	<a href="/plottingdosen/{{$data->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Yakin Ingin Menghapus?')">Delete</a>

                                         		</td>
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

  @stop
@section('footer')
<script>
	$(document).ready(function(){
		$('#datatable').DataTable();
	});	
</script>

@stop
   
	