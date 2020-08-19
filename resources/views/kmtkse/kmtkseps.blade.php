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
								
									<h3 class="panel-title">Kontrak Manajemen Publikasi Seminar KK Tata Kelola dan Sistem Enterprise</h3>
									<div class="">
										<button type="button"  data-toggle="modal" data-target="#exampleModal" style="background-color:#e4cb10; color: white;padding: 6px 22px; box-shadow: 0px 1px 2px 0 rgba(0, 0, 0, 0.2);">Create</button>
									 <div class="dropdown show">
											  <a class="btn btn-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											    EXPORT EXCEL
											  </a>

											  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
											  	<ul>
											  		<li><a href="/kmtkse/kmtkseps/export">EXPORT SEMUA</a></li>
											  		<li><a class="dropdown-item" href="/kmtkse/kmtkseps/export/TW1">TW 1</a></li>
											  		<li><a class="dropdown-item" href="/kmtkse/kmtkseps/export/TW2">TW 2</a></li>
											  		<li><a class="dropdown-item" href="/kmtkse/kmtkseps/export/TW3">TW 3</a></li>
											  		<li><a class="dropdown-item" href="/kmtkse/kmtkseps/export/TW4">TW 4</a></li>
											  		
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
										 		@role('tkse')
												<th>AKSI</th>
												@endrole
											</tr>
										</thead>

                                         <tbody>

                                         @foreach($data_kmtkseps as $kmtkseps)
                                         	<tr>
                                         		<td>{{$kmtkseps->judulpenelitian}}</td>
                                         		<td>{{$kmtkseps->periode}}</td>
                                         		<td>{{$kmtkseps->penulis1}}</td>
                                         		<td>{{$kmtkseps->anggotapenulis2}}</td>
                                         		<td>{{$kmtkseps->anggotapenulis3}}</td>
                                         		<td>{{$kmtkseps->anggotapenulis4}}</td>
                                         		<td>{{$kmtkseps->anggotapenulis5}}</td>
                                         		<!-- <td>{{$kmtkseps->kelompokkeahlian}}</td> -->
                                         		<td>{{$kmtkseps->kategori}}</td>
                                         		<td>{{$kmtkseps->nama}}</td>
                                         		<td>{{$kmtkseps->publisherlokasi}}</td>
                                         		<td>{{$kmtkseps->volnojurnaltglsem}}</td>
                                         		<td>Rp {{number_format($kmtkseps->biayapublikasi,0,'.','.')}}</td>
                                         	<td>Rp {{number_format($kmtkseps->stimulus,0,'.','.')}}</td>
                                         		@role('tkse')
                                         	<td>
                                         			<a href="{{$kmtkseps->keterangan}}">Link</a></td>
                                         		<td>{{$kmtkseps->status}}</td>
                                         		<td>
                                         			<a href="/kmtkse/kmtkseps/{{$kmtkseps->id}}/editps" class="btn btn-warning btn-sm">Edit</a>
                                         			<a href="/kmtkse/kmtkseps/{{$kmtkseps->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Yakin Ingin Menghapus?')">Delete</a>

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
			      	<form action="/kmtkse/kmtkseps/create" method = "POST">
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
						    <input name="penulis1" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan penulis1" >
						  </div>
						   <div class="form-group">
						    <label for="exampleInputEmail1">Anggota penulis 2</label>
						    <input name="anggotapenulis2" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan anggotapenulis2" >
						  </div>
						    <div class="form-group">
						    <label for="exampleInputEmail1">Anggota penulis 3</label>
						    <input name="anggotapenulis3" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan anggotapenulis3">
						  </div>
						     <div class="form-group">
						    <label for="exampleInputEmail1">Anggota penulis 4</label>
						    <input name="anggotapenulis4" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan anggotapenulis4">
						  </div>
						     <div class="form-group">
						    <label for="exampleInputEmail1">Anggota penulis 5</label>
						    <input name="anggotapenulis5" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan anggotapenulis5">
						  </div>
						  <!--  <div class="form-group">
						  	 <label for="exampleInputEmail1">Kelompok keahlian</label>
						    <input name="kelompokkeahlian" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" readonly="readonly" placeholder="Rekayasa Perangkat Lunak dan Multimedia" >
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
						   <div class="form-group">
						    <label for="exampleInputEmail1">Nama Jurnal/Seminar</label>
						    <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan nama"  value="nama">
						  </div>
						   <div class="form-group">
						    <label for="exampleInputEmail1">Publisher/ lokasi seminar</label>
						    <input name="publisherlokasi" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan publisher atau lokasi seminar">
						  </div>
						   <div class="form-group">
						    <label for="exampleInputEmail1">Vol./no jurnal/tanggal seminar</label>
						    <input name="volnojurnaltglsem" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan volume dan nomor jurnal atau lokasi seminar" >
						  </div>
						    <div class="form-group">
						    <label for="exampleInputEmail1">Biaya publikasi</label>
						    <input name="biayapublikasi" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan biaya publikasi" >
						  </div>
						   <div class="form-group">
						    <label for="exampleInputEmail1">Stimulus</label>
						    <input name="stimulus" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan stimulus">
						  </div>
						  	<div class="form-group">
						    <label for="exampleInputEmail1">Keterangan (dapat berupa evidence)</label>
						    <input name="keterangan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan keterangan atau evidence" >
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
	

