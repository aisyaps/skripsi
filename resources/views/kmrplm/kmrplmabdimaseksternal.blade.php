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
								
									<h3 class="panel-title">Kontrak Manajemen Abdimas Eksternal KK Rekayasa  Perangkat Lunak dan Multimedia</h3>
									<div class="">
										<button type="button"  data-toggle="modal" data-target="#exampleModal" style="background-color:#e4cb10; color: white;padding: 6px 22px; box-shadow: 0px 1px 2px 0 rgba(0, 0, 0, 0.2);">Create</button>
									 <div class="dropdown show">
											  <a class="btn btn-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											    EXPORT EXCEL
											  </a>

											  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
											  	<ul>
											  		<li><a href="/kmrplm/kmrplmabdimaseksternal/export">EXPORT SEMUA</a></li>
											  		<li><a class="dropdown-item" href="/kmrplm/kmrplmabdimaseksternal/export/TW1">TW 1</a></li>
											  		<li><a class="dropdown-item" href="/kmrplm/kmrplmabdimaseksternal/export/TW2">TW 2</a></li>
											  		<li><a class="dropdown-item" href="/kmrplm/kmrplmabdimaseksternal/export/TW3">TW 3</a></li>
											  		<li><a class="dropdown-item" href="/kmrplm/kmrplmabdimaseksternal/export/TW4">TW 4</a></li>
											  		
											  	</ul>
											  </div>
										</div>
									</div>
								<div class="panel-body">
									<div class="table-responsive">
									<table class="table table-hover" id="datatable">

										<thead>
											<tr>
												<th>JUDUL</th>
												<th>PERIODE</th>
												<th>NAMA DOSEN 1</th>
												<th>NAMA DOSEN 2</th>
												<th>NAMA DOSEN 3</th>
												<th>NAMA DOSEN 4</th>
												<th>NAMA DOSEN 5</th>
												<th>NAMA MHS 1</th>
												<th>NAMA MHS 2</th>
												<th>NAMA MHS 3</th>
												<th>NAMA MHS 4</th>
												<th>NAMA MHS 5</th>
										 		<!-- <th>KELOMPOK KEAHLIAN</th> -->
										 		<th>TGL</th>
										 		<th>TEMPAT</th>
										 		<th>PRODI DOSEN 1</th>
										 		<th>PRODI DOSEN 2</th>
										 		<th>PRODI DOSEN 3</th>
										 		<th>PRODI DOSEN 4</th>
										 		<th>PRODI DOSEN 5</th>
										 		<th>KATEGORI</th>
										 		<th>BIAYA</th>
										 		<th>STATUS</th>
										 		@role('rplm')
												<th>AKSI</th>
												@endrole
											</tr>
										</thead>

                                         <tbody>

                                         @foreach($data_kmrplmabdimaseksternal as $kmrplmabdimaseksternal)
                                         	<tr>
                                         		<td>{{$kmrplmabdimaseksternal->judulkegiatanpengmas}}</td>
                                         		<td>{{$kmrplmabdimaseksternal->periode}}</td>
                                         		<td>{{$kmrplmabdimaseksternal->namadosen1}}</td>
                                         		<td>{{$kmrplmabdimaseksternal->namadosen2}}</td>
                                         		<td>{{$kmrplmabdimaseksternal->namadosen3}}</td>
                                         		<td>{{$kmrplmabdimaseksternal->namadosen4}}</td>
                                         		<td>{{$kmrplmabdimaseksternal->namadosen5}}</td>
                                         		<td>{{$kmrplmabdimaseksternal->namamahasiswa1}}</td>
                                         		<td>{{$kmrplmabdimaseksternal->namamahasiswa2}}</td>
                                         		<td>{{$kmrplmabdimaseksternal->namamahasiswa3}}</td>
                                         		<td>{{$kmrplmabdimaseksternal->namamahasiswa4}}</td>
                                         		<td>{{$kmrplmabdimaseksternal->namamahasiswa5}}</td>
                                         		<!-- <td>{{$kmrplmabdimaseksternal->kelompokkeahlian}}</td> -->
                                         		<td>{{$kmrplmabdimaseksternal->tgl}}</td>
                                         		<td>{{$kmrplmabdimaseksternal->tempat}}</td>
                                         		<td>{{$kmrplmabdimaseksternal->prodidosen}}</td>
                                         		<td>{{$kmrplmabdimaseksternal->prodidosen2}}</td>
                                         		<td>{{$kmrplmabdimaseksternal->prodidosen3}}</td>
                                         		<td>{{$kmrplmabdimaseksternal->prodidosen4}}</td>
                                         		<td>{{$kmrplmabdimaseksternal->prodidosen5}}</td>
                                         		<td>{{$kmrplmabdimaseksternal->kategori}}</td>
                                         		<td>Rp {{number_format($kmrplmabdimaseksternal->biaya,0,'.','.')}}</td>
                                         		<td>{{$kmrplmabdimaseksternal->status}}</td>
                                         		@role('rplm')
                                         		<td>
                                         			<a href="/kmrplm/kmrplmabdimaseksternal/{{$kmrplmabdimaseksternal->id}}/editae" class="btn btn-warning btn-sm">Edit</a>
                                         			<a href="/kmrplm/kmrplmabdimaseksternal/{{$kmrplmabdimaseksternal->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Yakin Ingin Menghapus?')">Delete</a>

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
			        <h5 class=" modal-title" id="exampleModalLabel">Masukan Kontrak Manajemen kmrplmabdimaseksternal</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			      <div class="modal-body">
			      	<form action="/kmrplm/kmrplmabdimaseksternal/create" method = "POST">
			      		{{csrf_field()}}
			        <form>
						  <div class="form-group {{$errors->has('judulkegiatanpengmas') ? 'has-error' : ''}}">
						    <label for="exampleInputEmail1">Judul kegiatan</label>
						    <input name="judulkegiatanpengmas" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan judul kegiatan" >

                           @if($errors->has('judulkegiatanpengmas'))

						    <span class="help-block">{{$errors->first('judulkegiatanpengmas')}}</span>

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
						  <div class="form-group {{$errors->has('namadosen1') ? 'has-error' : ''}}">
						  	 <label for="exampleInputEmail1">Nama dosen</label>
						    <input name="namadosen1" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan nama dosen">
						     @if($errors->has('namadosen1'))

						    <span class="help-block">{{$errors->first('namadosen1')}}</span>

						    @endif

						  </div>
						   <div class="form-group">
						  	 <label for="exampleInputEmail1">Nama dosen</label>
						    <input name="namadosen2" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan nama dosen">
	
						  </div>
						   <div class="form-group">
						  	 <label for="exampleInputEmail1">Nama dosen</label>
						    <input name="namadosen3" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan nama dosen" >

						  </div>
						   <div class="form-group">
						  	 <label for="exampleInputEmail1">Nama dosen</label>
						    <input name="namadosen4" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan nama dosen">

						  </div>
						   <div class="form-group">
						  	 <label for="exampleInputEmail1">Nama dosen</label>
						    <input name="namadosen5" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan nama dosen" >

						  </div>
						    <div class="form-group">
						  	 <label for="exampleInputEmail1">Nama mahasiswa</label>
						    <input name="namamahasiswa1" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan nama mahasiswa">

						  </div>
						     <div class="form-group">
						  	 <label for="exampleInputEmail1">Nama mahasiswa</label>
						    <input name="namamahasiswa2" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan nama mahasiswa">

						  </div>
						     <div class="form-group">
						  	 <label for="exampleInputEmail1">Nama mahasiswa</label>
						    <input name="namamahasiswa3" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan nama mahasiswa" >

						  </div>
						     <div class="form-group">
						  	 <label for="exampleInputEmail1">Nama mahasiswa</label>
						    <input name="namamahasiswa4" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan nama mahasiswa" >

						  </div>
						     <div class="form-group">
						  	 <label for="exampleInputEmail1">Nama mahasiswa</label>
						    <input name="namamahasiswa5" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan nama mahasiswa">

						  </div>
						
						<div class="form-group">
						    <label for="exampleInputEmail1">Tanggal </label>
						      <input name="tgl" type="date"class="form-control" id="tgl1">

						  </div>
						   <div class="form-group  {{$errors->has('tempat') ? 'has-error' : ''}} ">
						    <label for="exampleInputEmail1">Tempat</label>
						    <input name="tempat" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan tempat" >
  						 @if($errors->has('tempat'))

						    <span class="help-block">{{$errors->first('tempat')}}</span>

						    @endif

						  </div>
						     <div class="form-group">
						  	 <label for="exampleInputEmail1">Prodi dosen</label>
						    <input name="prodidosen" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan prodidosen">

						  </div>
						      <div class="form-group">
						  	 <label for="exampleInputEmail1">Prodi dosen</label>
						    <input name="prodidosen2" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan prodidosen">
						    </div>
						     <div class="form-group">
						  	 <label for="exampleInputEmail1">Prodi dosen</label>
						    <input name="prodidosen3" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan prodidosen" >
						    </div>
						      <div class="form-group">
						  	 <label for="exampleInputEmail1">Prodi dosen</label>
						    <input name="prodidosen4" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan prodidosen" >
							</div>
						    <div class="form-group">
						  	 <label for="exampleInputEmail1">Prodi dosen</label>
						    <input name="prodidosen5" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan prodidosen">
							</div>
							 <div class="form-group ">
                              <label for="exampleFormControlSelect1">Kategori</label>
                               <select name="kategori" class="form-control" id="exampleFormControlSelect1">
                               <option value="insidental">Insidental</option>
                               <option value="eksternal">Eksternal</option>
                              </select>
                            </div>
						   <div class="form-group{{$errors->has('biaya') ? 'has-error' : ''}}">
						    <label for="exampleInputEmail1">Biaya</label>
						    <input name="biaya" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan biaya" >
						  	 @if($errors->has('biaya'))

						    <span class="help-block">{{$errors->first('biaya')}}</span>

						    @endif

						  </div>
						  <div class="form-group">
						    <label for="exampleFormControlSelect1">Status</label>
						    <select name="status" class="form-control" id="exampleFormControlSelect1">
						     <option value="on_going ">ON GOING</option>
                             <option value="done">DONE</option>
						    </select>
							 </div>

					
					</div>		<!-- -->
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

	// $(function(){
	// 	$("#datatable").DataTable();


	// });
</script>

@stop
	

