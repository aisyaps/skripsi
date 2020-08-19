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
								
									<h3 class="panel-title">Program Kerja KK Rekayasa Data</h3>
									<div class="right">
									<!-- <a href="/pkrd/export" class="btn btn-primary">Export Excel</a>
									<a href="/pkrd/exportPdf" class="btn btn-primary">Export PDF</a> -->
									<button type="button"  data-toggle="modal" data-target="#exampleModal" style="background-color:#00AAFF; color: white;padding: 6px 22px; box-shadow: 0px 1px 2px 0 rgba(0, 0, 0, 0.2);">Create</button>
									</div>
								</div>
								<div class="panel-body">
									<table class="table table-hover" id="datatable">
										<thead>
											<tr>
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
                                         	@foreach($data_pkrd as $pkrd)
                                         	<tr>
                                         		<td>{{$pkrd->rencanakerja}}</td>
                                         		<td>{{$pkrd->justifikasi}}</td>
                                         		<td>{{$pkrd->tgl_plan}}</td>
                                         		<td>{{$pkrd->drk}}</td>
                                         		<td>{{$pkrd->rencanabiaya}}</td>
                                         		<td>{{$pkrd->kategori}}</td>
                                         		<td>{{$pkrd->pic}}</td>
                                         		<td>{{$pkrd->status}}</td>
                                         		<td>
                                         			<a href="/pkrd/{{$pkrd->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                                         			<a href="/pkrd/{{$pkrd->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Yakin Ingin Menghapus?')">Delete</a>

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

	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class=" modal-title" id="exampleModalLabel">Masukan Program Kerja</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			      <div class="modal-body">
			      	<form action="/pkrd/create" method = "POST">
			      		{{csrf_field()}}
			        <form>
						  <div class="form-group">
						    <label for="exampleInputEmail1">Rencana kerja</label>
						    <input name="rencanakerja" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan rencana kerja">
						  </div>
						  <div class="form-group">
						    <label for="exampleInputEmail1">Justifikasi</label>
						    <input name="justifikasi" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan justifikasi">
						  </div>
						  <div class="form-group">
						    <label for="exampleFormControlSelect1">Tanggal</label>
						     <input name="tgl_plan" type="date"class="form-control" id="tgl_plan" value ="2019-12-16">
							 </div>
						  <div class="form-group">
						    <label for="exampleInputEmail1">DRK</label>
						    <input name="drk" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan DRK">
						  </div>
						  <div class="form-group">
						    <label for="exampleInputEmail1">Rencana biaya</label>
						    <input name="rencanabiaya" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan rencana biaya">
						  </div>
						   <div class="form-group">
						    <label for="exampleInputEmail1">Kategori</label>
						    <input name="kategori" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan kategori">
						  </div>
						   <div class="form-group">
						    <label for="exampleInputEmail1">PIC</label>
						    <input name="pic" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan PIC">
						  </div>
						 <div class="form-group">
						    <label for="exampleFormControlSelect1">Status</label>
						    <select name="status"  class="form-control" id="exampleFormControlSelect1">
						      <option value="belum dipublikasi ">belum dipublikasi</option>
						      <option value="sudah dipublikasi">sudah dipublikasi</option>
						    </select>
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
	