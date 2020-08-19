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
								
									<h3 class="panel-title">Program Kerja KK</h3>
									<div class="right">
									<button type="button" class="btn" data-toggle="modal" data-target="#exampleModal"><i class="lnr lnr-plus-circle"></i></button>
									</div>
								</div>
								<div class="panel-body">
									<table class="table table-hover">
										<thead>
											<tr>
												<th>NO</th>
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
			      	<form action="/prokerkk/{id}/programkerja/create" method = "POST">
			      		{{csrf_field()}}
			        <form>
		<div class="form-group">
						    <label for="exampleInputEmail1">NO</label>
						    <input name="nidn" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nomor">
						  </div>
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
						    <label for="tgl_plan">DRK</label>
						    <input name="status" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan DRK">						
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
						    <label for="exampleInputEmail1">Status</label>
						    <input name="status" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan status">
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