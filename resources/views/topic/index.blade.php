 @extends('layouts.master')

@section('content')

<div class="main">
			<!-- MAIN CONTENT -->
	<div class="main-content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-8">
					<div class="panel">
								<div class="panel-heading">
								
									<h3 class="panel-title">Profil KK Tata Kelola dan Sistem Enterprise</h3>
									<div class="right">
									<!-- <a href="/pkrd/export" class="btn btn-primary">Export Excel</a>
									<a href="/pkrd/exportPdf" class="btn btn-primary">Export PDF</a> -->
									@role('tkse|rplm|ti|rd')
									<button type="button"  data-toggle="modal" data-target="#tambahTkse" style="background-color:#00AAFF; color: white;padding: 6px 22px; box-shadow: 0px 1px 2px 0 rgba(0, 0, 0, 0.2);">Create</button>
									@endrole
									</div>
								</div>
								<div class="panel-body">
									<table class="table table-hover" id="datatable">
										<thead>
											<tr>
												<th>NAMA TOPIC</th>
												
												<th>AKSI</th>
											</tr>
										</thead>

                                         <tbody>
                                         	@foreach($daftar_topic as $topic)
                                         	<tr>
                                         		<td>{{$topic->namatopic}}</td>
                                         		<td>

                                         			<a href="/topic/{{$topic->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                                         			<a href="/topic/{{$topic->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Yakin Ingin Menghapus?')">Delete</a>

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

	<div class="modal fade" id="tambahTkse" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class=" modal-title" id="exampleModalLabel">Masukan Topic Interest</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			      <div class="modal-body">
			      	<form action="{{route('createTopic')}}" method = "POST">
			      		{{csrf_field()}}
			        <form>
						  <div class="form-group">
						    <label for="exampleInputEmail1">Nama Topic</label>
						    <input name="namatopic" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan nama topic">
						  </div>
						
							 </div>
						 
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
	