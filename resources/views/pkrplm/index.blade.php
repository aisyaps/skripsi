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
								
									<h3 class="panel-title">Program Kerja KK Rekayasa Perangkat Lunak dan Multimedia</h3>
									<div class="right">
									<!-- <a href="/pkrplm/export" class="btn sm btn-primary">EXPORT EXCEL</a>
									<a href="/pkrplm/exportPdf" class="btn btn-primary">CETAK PDF</a> -->
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
                                         	@foreach($data_pkrplm as $pkrplm)
                                         	<tr>
                                         		<td>{{$pkrplm->rencanakerja}}</td>
                                         		<td>{{$pkrplm->justifikasi}}</td>
                                         		<td>{{$pkrplm->tgl_plan}}</td>
                                         		<td>{{$pkrplm->drk}}</td>
                                         		<td>{{$pkrplm->rencanabiaya}}</td>
                                         		<td>{{$pkrplm->kategori}}</td>
                                         		<td>{{$pkrplm->pic}}</td>
                                         		<td>{{$pkrplm->status}}</td>
                                         		<td>
                                         			<a href="/pkrplm/{{$pkrplm->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                                         			<a href="/pkrplm/{{$pkrplm->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Yakin Ingin Menghapus?')">Delete</a>

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
			      	<form action="/pkrplm/create" method = "POST">
			      		{{csrf_field()}}
			        <form>
						  <div class="form-group">
						    <label for="rencanakerja">Rencana kerja</label>
						    <input name="rencanakerja" type="text" class="form-control" id="rencanakerja" aria-describedby="emailHelp" placeholder="Masukan rencana kerja">
						  </div>
						  <div class="form-group">
						    <label for="justifikasi">Justifikasi</label>
						    <input name="justifikasi" type="text" class="form-control" id="justifikasi" aria-describedby="emailHelp" placeholder="Masukan justifikasi">
						  </div>
						  <div class="form-group">
						    <label for="tgl_plan">Tanggal</label>
						     <input name="tgl_plan" type="date"class="form-control" id="tgl_plan" value ="2019-12-16">
							 </div>
						  <div class="form-group">
						    <label for="exampleInputEmail1">DRK</label>
						    <input name="drk" type="text" class="form-control" id="drk" aria-describedby="emailHelp" placeholder="Masukan DRK">
						  </div>
						  <div class="form-group">
						    <label for="exampleInputEmail1">Rencana biaya</label>
						    <input name="rencanabiaya" type="text" class="form-control" id="rencanabiaya" aria-describedby="emailHelp" placeholder="Masukan rencana biaya">
						  </div>
						   <div class="form-group">
						    <label for="exampleInputEmail1">Kategori</label>
						    <input name="kategori" type="text" class="form-control" id="kategori" aria-describedby="emailHelp" placeholder="Masukan kategori">
						  </div>
						   <div class="form-group">
						    <label for="exampleInputEmail1">PIC</label>
						    <input name="pic" type="text" class="form-control" id="pic" aria-describedby="emailHelp" placeholder="Masukan PIC">
						  </div>
						  <div class="form-group">
						    <label for="exampleFormControlSelect1">Status</label>
						    <select name="status" class="form-control" id="exampleFormControlSelect1">
						      <option value="belum dipublikasi ">belum dipublikasi</option>
						      <option value="sudah dipublikasi">sudah dipublikasi</option>
						    </select>
							 </div>

							<!-- -->
			      <div class="modal-footer">
			        	

			         <button type="submit" class="btn btn-primary">Submit</button>
			         <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						</form>
			      </div>
    </div>
  </div>
</div>
								<!-- END TABBED CONTENT -->
							</div>
							<!-- END RIGHT COLUMN -->
						</div>
					</div>
				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>

@stop 
@section('footer')
<script>
	$(document).ready(function(){
		$('#datatable').DataTable();
	});	
</script>

@stop