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
								
									<h3 class="panel-title">Kontrak Manajemen Rekognisi KK Teknologi Informasi</h3>
									<div class="">
									<button type="button"  data-toggle="modal" data-target="#exampleModal" style="background-color:#e4cb10; color: white;padding: 6px 22px; box-shadow: 0px 1px 2px 0 rgba(0, 0, 0, 0.2);">Create</button>
									 <div class="dropdown show">
											  <a class="btn btn-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											    EXPORT EXCEL
											  </a>

											  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
											  	<ul>
											  		<li><a href="/kmti/kmtire/export">EXPORT SEMUA</a></li>
											  		<li><a class="dropdown-item" href="/kmti/kmtire/export/TW1">TW 1</a></li>
											  		<li><a class="dropdown-item" href="/kmti/kmtire/export/TW2">TW 2</a></li>
											  		<li><a class="dropdown-item" href="/kmti/kmtire/export/TW3">TW 3</a></li>
											  		<li><a class="dropdown-item" href="/kmti/kmtire/export/TW4">TW 4</a></li>
											  		
											  	</ul>
											  </div>
										</div>
									</div>
								<div class="panel-body">
									<div class="table-responsive">
									<table class="table table-hover" id="datatable">
										<thead>
											<tr>
												<th>JUDUL KEGIATAN</th>
												<th>PERIODE</th>
												<th>NAMA DOSEN</th>
										 		<!-- <th>KELOMPOK KEAHLIAN</th> -->
										 		<th>TGL MULAI</th>
										 		<th>TGL SELESAI</th>
										 		<th>TEMPAT</th>
										 		<th>PENYELENGGARA</th>
										 		<th>PRODI DOSEN</th>
										 		<th>KET</th>
										 		<th>STATUS</th>
										 		@role('ti')
												<th>AKSI</th>
												@endrole
											</tr>
										</thead>

                                         <tbody>

                                         @foreach($data_kmtire as $kmtire)
                                         	<tr>
                                         		<td>{{$kmtire->judulkegiatan}}</td>
                                         		<td>{{$kmtire->periode}}</td>
                                         		<td>{{$kmtire->namadosen}}</td>
                                         		<!-- <td>{{$kmtire->kelompokkeahlian}}</td> -->
                                         		<td>{{$kmtire->tgl1}}</td>
                                         		<td>{{$kmtire->tgl2}}</td>
                                         		<td>{{$kmtire->tempat}}</td>
                                         		<td>{{$kmtire->penyelenggara}}</td>
                                         		<td>{{$kmtire->prodidosen}}</td>
                                         		<td>{{$kmtire->keterangan}}</td>
                                         		<td>{{$kmtire->status}}</td>
                                         		@role('ti')
                                         		<td>
                                         			<a href="/kmti/kmtire/{{$kmtire->id}}/editre" class="btn btn-warning btn-sm">Edit</a>
                                         			<a href="/kmti/kmtire/{{$kmtire->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Yakin Ingin Menghapus?')">Delete</a>

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
</div>
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class=" modal-title" id="exampleModalLabel">Masukan Kontrak Manajemen kmtire</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			      <div class="modal-body">
			      	<form action="/kmti/kmtire/create" method = "POST">
			      		{{csrf_field()}}
			        <form>
						    <div class="form-group {{$errors->has('judulkegiatan') ? 'has-error' : ''}}">
						    <label for="exampleInputEmail1">Judul kegiatan</label>
						    <input name="judulkegiatan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan judul kegiatan" >

                           @if($errors->has('judulkegiatan'))

						    <span class="help-block">{{$errors->first('judulkegiatan')}}</span>

						    @endif


						  </div>

					        <div class="form-group">
						    <label for="exampleFormControlSelect1">Periode</label>
						    <select name="periode" class="form-control" id="exampleFormControlSelect1">
						     <option value="TW1 ">TW 1</option>
                             <option value="TW2">TW 2</option>
						    <option value="TW3">TW 3</option>
						     <option value="TW4">TW 4</option>
						    </select>
							 </div>
						  <div class="form-group {{$errors->has('namadosen') ? 'has-error' : ''}}">
						  	 <label for="exampleInputEmail1">Nama dosen</label>
						    <input name="namadosen" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan nama dosen" >
						     @if($errors->has('namadosen'))

						    <span class="help-block">{{$errors->first('namadosen')}}</span>

						    @endif

						  </div>
						
						<div class="form-group {{$errors->has('tgl1') ? 'has-error' : ''}}">
						    <label for="exampleInputEmail1">Tanggal mulai</label>
						      <input name="tgl1" type="date"class="form-control" id="tgl1" >
						       @if($errors->has('tgl1'))

						    <span class="help-block">{{$errors->first('tgl1')}}</span>

						    @endif

						  </div>
						  	<div class="form-group {{$errors->has('tgl2') ? 'has-error' : ''}}">
						    <label for="exampleInputEmail1">Tanggal selesai</label>
						      <input name="tgl2" type="date"class="form-control" id="tgl2" >
						       @if($errors->has('tgl2'))

						    <span class="help-block">{{$errors->first('tgl2')}}</span>

						    @endif

						  </div>
						   <div class="form-group ">
						    <label for="exampleInputEmail1">Tempat</label>
						    <input name="tempat" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan tempat" >
						  </div>
						   <div class="form-group {{$errors->has('penyelenggara') ? 'has-error' : ''}}">
						    <label for="exampleInputEmail1">Penyelenggara</label>
						    <input name="penyelenggara" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan penyelenggara" >
						     @if($errors->has('penyelenggara'))

						    <span class="help-block">{{$errors->first('penyelenggara')}}</span>

						    @endif

						  </div>
						   <div class="form-group{{$errors->has('prodidosen') ? 'has-error' : ''}}">
						    <label for="exampleInputEmail1">Prodi dosen</label>
						    <input name="prodidosen" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan prodi dosen" >
						     @if($errors->has('prodidosen'))

						    <span class="help-block">{{$errors->first('prodidosen')}}</span>

						    @endif

						  </div>
						  	<div class="form-group">
						    <label for="exampleInputEmail1">Keterangan (dapat berupa evidence)</label>
						    <input name="keterangan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan keterangan atau evidence"  >
						  </div>

						  <div class="form-group">
						    <label for="exampleFormControlSelect1">Status</label>
						    <select name="status" class="form-control" id="exampleFormControlSelect1">
						     <option value="ON_GOING ">ON GOING</option>
                             <option value="DONE">DONE</option>
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
	

