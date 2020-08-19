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
								
									<h3 class="panel-title">Profil KK Teknologi Informasi</h3>
									<div class="right">
									<!-- <a href="/pkrd/export" class="btn btn-primary">Export Excel</a>
									<a href="/pkrd/exportPdf" class="btn btn-primary">Export PDF</a> -->
									@role('ti')
									<button type="button"  data-toggle="modal" data-target="#tambahTi" style="background-color:#00AAFF; color: white;padding: 6px 22px; box-shadow: 0px 1px 2px 0 rgba(0, 0, 0, 0.2);">Create</button>
									@endrole
									</div>
								</div>
								<div class="panel-body">
									<table class="table table-hover" id="datatable">
										<thead>
											<tr>
												<th>NAMA DOSEN</th>
												<th>NIDN</th>
												<th>PROGRAM STUDI</th>
												<th>TOPIC INTEREST</th>
												@role('ti')
												<th>AKSI</th>
												@endrole
											</tr>
										</thead>

                                         <tbody>
                                         	@foreach($data_ti as $ti)
                                         	<tr>
                                         		<td>{{$ti->namadosen}}</td>
                                         		<td>{{$ti->nidn}}</td>
                                         		<td>{{$ti->prodi}}</td>
                                         		@php
                                         		$coba=explode(',',$ti->id_topic)
                                         		@endphp
                                         			<td>
                                         		 <ul>
                                         			@foreach($coba as $key=>$value)
                                         			
                                         				<li>
                                         				@php
                                         				$x = \App\Topic::find($value);
                                         				echo $x->namatopic;
                                         				@endphp
                                         				</li>
                                         	
                                         			@endforeach
                                         			</ul>
                                         		</td>
                                         		@role('ti')
                                         		<td>
                                         			
                                         			<a href="/ti/{{$ti->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                                         			<a href="/ti/{{$ti->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Yakin Ingin Menghapus?')">Delete</a>
                                         			
                                         		</td>
                                         		@endrole
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

	<div class="modal fade" id="tambahTi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class=" modal-title" id="exampleModalLabel">Masukan Profil</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			      <div class="modal-body">
			      	<form action="{{route('createTi')}}" method = "POST">
			      		{{csrf_field()}}
			        <form>
						  <div class="form-group">
						    <label for="exampleInputEmail1">Nama Dosen</label>
						    <input name="namadosen" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan nama dosen">
						  </div>
						  <div class="form-group">
						    <label for="exampleInputEmail1">NIDN</label>
						    <input name="nidn" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan nidn">
						  </div>
						 
						  <div class="form-group">
						    <label for="exampleInputEmail1">Program Studi</label>
						    <input name="prodi" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan program studi">
						  </div>
						   <div class="form-group">
						    <label for="exampleInputEmail1">Topic Interest</label>
						    @foreach($daftar_topic as $key =>$value)
						  	<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" name="id_topic[]" id="inlineCheckbox1" value="{{$key}}">
							  <label class="form-check-label" for="inlineCheckbox1">{{$value}}</label>
							</div>
						   @endforeach
	  				  <div class="modal-footer">
			        	

			         <button type="submit" class="btn btn-primary">Submit</button>
			         <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						</form>
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
	