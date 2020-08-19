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
								
									<h3 class="panel-title">Kontrak Manajemen Publikasi Seminar KK Teknologi Informasi</h3>
									<div class="">
									<button type="button"  data-toggle="modal" data-target="#exampleModal" style="background-color:#e4cb10; color: white;padding: 6px 22px; box-shadow: 0px 1px 2px 0 rgba(0, 0, 0, 0.2);">Create</button>
									 <div class="dropdown show">
											  <a class="btn btn-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											    EXPORT EXCEL
											  </a>

											  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
											  	<ul>
											  		<li><a href="/kmti/kmtips/export">EXPORT SEMUA</a></li>
											  		<li><a class="dropdown-item" href="/kmti/kmtips/export/TW1">TW 1</a></li>
											  		<li><a class="dropdown-item" href="/kmti/kmtips/export/TW2">TW 2</a></li>
											  		<li><a class="dropdown-item" href="/kmti/kmtips/export/TW3">TW 3</a></li>
											  		<li><a class="dropdown-item" href="/kmti/kmtips/export/TW4">TW 4</a></li>
											  		
											  	</ul>
											  </div>
										</div>
									</div>
								<div class="panel-body">
									<div class="table-responsive">
									<table class="table table-hover" id="datatable">
										<thead>
											<tr>
												<th>JUDUL PENELITIAN</th>
												<th>PERIODE</th>
												<th>PENULIS 1</th>
												<th>ANGGOTA PENULIS 2</th>
												<th>ANGGOTA PENULIS 3</th>
												<th>ANGGOTA PENULIS 4</th>
										        <th>ANGGOTA PENULIS 5</th>
										 		<!-- <th>KELOMPOK KEAHLIAN</th> -->
										 		<th>KATEGORI</th>
										 		<th>NAMA JURNAL/SEMINAR</th>
										 		<th>PUBLISHER JURNAL/LOKASI SEMINAR</th>
										 		<th>VOL. /NO JURNAL/TANGGAL SEMINAR</th>
										 		<th>BIAYA PUBLIKASI</th>
										 		<th>STIMULUS</th>
										 		<th>KET</th>
										 		<th>STATUS</th>
										 		@role('ti')
												<th>AKSI</th>
												@endrole
											</tr>
										</thead>

                                         <tbody>

                                         @foreach($data_kmtips as $kmtips)
                                         	<tr>
                                         		<td>{{$kmtips->judulpenelitian}}</td>
                                         		<td>{{$kmtips->periode}}</td>
                                         		<td>{{$kmtips->penulis1}}</td>
                                         		<td>{{$kmtips->anggotapenulis2}}</td>
                                         		<td>{{$kmtips->anggotapenulis3}}</td>
                                         		<td>{{$kmtips->anggotapenulis4}}</td>
                                         		<td>{{$kmtips->anggotapenulis5}}</td>
                                         		<!-- <td>{{$kmtips->kelompokkeahlian}}</td> -->
                                         		<td>{{$kmtips->kategori}}</td>
                                         		<td>{{$kmtips->nama}}</td>
                                         		<td>{{$kmtips->publisherlokasi}}</td>
                                         		<td>{{$kmtips->volnojurnaltglsem}}</td>
                                         		<td>Rp {{number_format($kmtips->biayapublikasi,0,'.','.')}}</td>
                                         		<td>Rp {{number_format($kmtips->stimulus,0,'.','.')}}</td>
                                         	<td>
                                         			<a href="{{$kmtips->keterangan}}">Link</a></td>
                                         		<td>{{$kmtips->status}}</td>
                                         		@role('ti')
                                         		<td>
                                         			<a href="/kmti/kmtips/{{$kmtips->id}}/editps" class="btn btn-warning btn-sm">Edit</a>
                                         			<a href="/kmti/kmtips/{{$kmtips->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Yakin Ingin Menghapus?')">Delete</a>

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
			        <h5 class=" modal-title" id="exampleModalLabel">Masukan Kontrak Manajemen</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			      <div class="modal-body">
			      	<form action="/kmti/kmtips/create" method = "POST">
			      		{{csrf_field()}}
			      		<form>
			    <div class="form-group {{$errors->has('judulpenelitian') ? 'has-error' : ''}}">
						    <label for="exampleInputEmail1">Judul penelitian</label>
						    <input name="judulpenelitian" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan judul penelitian" value="judulpenelitian">

                           @if($errors->has('judulpenelitian'))

						    <span class="help-block">{{$errors->first('judulpenelitian')}}</span>

						    @endif


						  </div>
						  	 <div class="form-group">
						    <label for="exampleFormControlSelect1">Periode</label>
						    <select name="periode" class="form-control" id="exampleFormControlSelect1">
						     <option value="TW1">TW 1</option>
                             <option value="TW2">TW 2</option>
						    <option value="TW3">TW3</option>
						     <option value="TW4">TW4</option>
						    </select>
							 </div>
						  <div class="form-group {{$errors->has('penulis1') ? 'has-error' : ''}}">
						    <label for="exampleInputEmail1">Penulis 1</label>
						    <input name="penulis1" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan penulis1"value="penulis1" >
						  </div>
						   <div class="form-group">
						    <label for="exampleInputEmail1">Anggota penulis 2</label>
						    <input name="anggotapenulis2" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan anggotapenulis2"value="anggotapenulis2" >
						  </div>
						    <div class="form-group">
						    <label for="exampleInputEmail1">Anggota penulis 3</label>
						    <input name="anggotapenulis3" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan anggotapenulis3"value="anggotapenulis3">
						  </div>
						     <div class="form-group">
						    <label for="exampleInputEmail1">Anggota penulis 4</label>
						    <input name="anggotapenulis4" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan anggotapenulis4"value="anggotapenulis4">
						  </div>
						     <div class="form-group">
						    <label for="exampleInputEmail1">Anggota penulis 5</label>
						    <input name="anggotapenulis5" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan anggotapenulis5"value="anggotapenulis5" >
						  </div>
						  <!--  <div class="form-group">
						  	 <label for="exampleInputEmail1">Kelompok keahlian</label>
						    <input name="kelompokkeahlian" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" readonly="readonly" placeholder="Teknologi Informasi" >
						  </div> -->
							<!--  <div class="form-group ">
						    <label for="exampleFormControlSelect1">Kelompok keahlian</label>
						    <select name="kelompokkeahlian" class="form-control" id="exampleFormControlSelect1">
						     <option value="rekayasa data ">Rekayasa data</option>
                             <option value="rekayasa perangkat lunak dan multimedia">Rekayasa perangkat lunak dan multimedia</option>
						    <option value="tata kelola dan sistem enterprise">tata kelola dan sistem enterprise</option>
						     <option value="teknologi informasi">Teknologi informasi</option>
						    </select>
							 </div> -->
						  	 <div class="form-group ">
						    <label for="exampleFormControlSelect1">Kategori</label>
						    <select name="kategori" class="form-control" id="exampleFormControlSelect1">
						     <option value="publikasi jurnal (S2-S3) ">publikasi jurnal (S2-S3)</option>
                             <option value="publikasi jurnal (S4)">publikasi jurnal (S4)</option>
						    <option value="publikasi jurnal internasional">publikasi jurnal internasional</option>
						     <option value="publikasi seminar internasional">Publikasi seminar internasional</option>
						    </select>
							 </div>
						   <div class="form-group {{$errors->has('nama') ? 'has-error' : ''}}">
						    <label for="exampleInputEmail1">Nama Jurnal/Seminar</label>
						    <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan nama"  value="nama jurnal"> 
						    @if($errors->has('nama'))

						    <span class="help-block">{{$errors->first('nama')}}</span>

						    @endif
						  </div>
						   <div class="form-group {{$errors->has('publisherlokasi') ? 'has-error' : ''}}">
						    <label for="exampleInputEmail1">Publisher/Lokasi seminar</label>
						    <input name="publisherlokasi" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan publisher atau lokasi seminar">

						    	 @if($errors->has('publisherlokasi'))

						    <span class="help-block">{{$errors->first('publisherlokasi')}}</span>

						    @endif
						  </div>
						   <div class="form-group">
						    <label for="exampleInputEmail1">Vol./no jurnal/tanggal seminar</label>
						    <input name="volnojurnaltglsem" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan volume dan nomor jurnal atau lokasi seminar"  value="volnojurnaltglsem">
						  </div>
						    <div class="form-group">
						    <label for="exampleInputEmail1">Biaya publikasi</label>
						    <input name="biayapublikasi" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan biaya publikasi" >
						  </div>
						   <div class="form-group">
						    <label for="exampleInputEmail1">Stimulus</label>
						    <input name="stimulus" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan stimulus" >
						  </div>
						  	<div class="form-group">
						    <label for="exampleInputEmail1">Keterangan (dapat berupa evidence)</label>
						    <input name="keterangan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan keterangan atau evidence">
						  </div>
						  <div class="form-group">
						    <label for="exampleFormControlSelect1">Status</label>
						    <select name="status" class="form-control" id="exampleFormControlSelect1">
						     <option value="published">Published</option>
                             <option value="done">Done</option>
						    <option value="LOA">LOA</option>
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
  @stop
@section('footer')
<script>
	$(document).ready(function(){
		$('#datatable').DataTable();
	});	
</script>

@stop
	

