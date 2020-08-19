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
								<h3 class="panel-title">Kontrak Manajemen Rekognisi KK Tata Kelola dan Sistem Enterprise</h3>
									<div class="">
								<button type="button"  data-toggle="modal" data-target="#exampleModal" style="background-color:#e4cb10; color: white;padding: 6px 22px; box-shadow: 0px 1px 2px 0 rgba(0, 0, 0, 0.2);">Create</button>
									 <div class="dropdown show">
											  <a class="btn btn-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											    EXPORT EXCEL
											  </a>

											  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
											  	<ul>
											  		<li><a href="/kmtkse/kmtksehe/export">EXPORT SEMUA</a></li>
											  		<li><a class="dropdown-item" href="/kmtkse/kmtksehe/export/TW1">TW 1</a></li>
											  		<li><a class="dropdown-item" href="/kmtkse/kmtksehe/export/TW2">TW 2</a></li>
											  		<li><a class="dropdown-item" href="/kmtkse/kmtksehe/export/TW3">TW 3</a></li>
											  		<li><a class="dropdown-item" href="/kmtkse/kmtksehe/export/TW4">TW 4</a></li>
											  		
											  	</ul>
											  </div>
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
												<th>PENELITI 1</th>
												<th>ANGGOTA PENELITI 2</th>
												<th>ANGGOTA PENELITI 3</th>
												<th>ANGGOTA PENELITI 4</th>
										 		<!-- <th>KELOMPOK KEAHLIAN</th> -->
										 		<th>DANA YANG DIAJUKAN</th>
										 		<th>DANA YANG DISETUJUI</th>
										 		<th>KATEGORI</th>
										 		<th>KET</th>
										 		<th>STATUS</th>
										 		@role('tkse')
												<th>AKSI</th>
												@endrole
											</tr>
										</thead>

                                         <tbody>

                                         @foreach($data_kmtksehe as $kmtksehe)
                                         	<tr>
                                         		<td>{{$kmtksehe->judulpenelitian}}</td>
                                         		<td>{{$kmtksehe->periode}}</td>
                                         		<td>{{$kmtksehe->peneliti1}}</td>
                                         		<td>{{$kmtksehe->anggotapeneliti2}}</td>
                                         		<td>{{$kmtksehe->anggotapeneliti3}}</td>
                                         		<td>{{$kmtksehe->anggotapeneliti4}}</td>
                                         		<!-- <td>{{$kmtksehe->kelompokkeahlian}}</td> -->
                                         		<td>Rp {{number_format($kmtksehe->dana_diajukan,0,'.','.')}}</td>
                                         		<td>Rp {{number_format($kmtksehe->dana_disetujui,0,'.','.')}}</td>
                                         		<td>{{$kmtksehe->kategori}}</td>
                                         		<td>{{$kmtksehe->keterangan}}</td>
                                         		<td>{{$kmtksehe->status}}</td>
                                         		@role('tkse')
                                         		<td>
                                         			<a href="/kmtkse/kmtksehe/{{$kmtksehe->id}}/edithe" class="btn btn-warning btn-sm">Edit</a>
                                         			<a href="/kmtkse/kmtksehe/{{$kmtksehe->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Yakin Ingin Menghapus?')">Delete</a>

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
			      	<form action="/kmtkse/kmtksehe/create" method = "POST" >
			      		{{csrf_field()}}
			        <form>
		                
						   <div class="form-group {{$errors->has('judulpenelitian') ? 'has-error' : ''}}">
						    <label for="exampleInputEmail1">Judul penelitian</label>
						    <input name="judulpenelitian" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan judul penelitian" >
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
						  <div class="form-group {{$errors->has('peneliti1') ? 'has-error' : ''}}">
						    <label for="exampleInputEmail1">Peneliti 1</label>
						    <input name="peneliti1" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan peneliti1" >
						      @if($errors->has('peneliti1'))

						    <span class="help-block">{{$errors->first('peneliti1')}}</span>

						    @endif
						  </div>
						 <div class="form-group">
						  	 <label for="exampleInputEmail1">Anggota peneliti 2</label>
						    <input name="anggotapeneliti2" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan anggota peneliti" >
						  </div>
						  	  <div class="form-group">
						  	 <label for="exampleInputEmail1">Anggota peneliti 3</label>
						    <input name="anggotapeneliti3" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan anggota peneliti" >
						  </div>
						  	  <div class="form-group">
						  	 <label for="exampleInputEmail1">Anggota peneliti 4</label>
						    <input name="anggotapeneliti4" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan anggota peneliti">
						  </div>
						 <!--  	 <label for="exampleInputEmail1">Kelompok keahlian</label>
						    <input name="kelompokkeahlian" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" readonly="readonly" placeholder="Tata Kelola dan Sistem Enterprise" >
						  </div> -->
							 <!-- <div class="form">
						    <label for="exampleFormControlSelect1">Kelompok keahlian</label>
						    <select class="form-control" id="kelompokkeahlian">
						     <option value="rekayasa data ">Rekayasa data</option>
                             <option value="rekayasa perangkat lunak dan multimedia">Rekayasa perangkat lunak dan multimedia</option>
						    <option value="tata kelola dan sistem enterprise" >tata kelola dan sistem enterprise</option>
						     <option value="teknologi informasi" >Teknologi informasi</option>
						    </select>
							 </div> -->
						  <div class="form-group">
						    <label for="exampleInputEmail1">Dana yang diajukan</label>
						    <input name="dana_diajukan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan dana yang diajukan">
						  </div>
						   <div class="form-group {{$errors->has('dana_disetujui') ? 'has-error' : ''}}">
						    <label for="exampleInputEmail1">Dana yang disetujui</label>
						    <input name="dana_disetujui" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan dana yang disetujui" >
						     @if($errors->has('dana_disetujui'))

						    <span class="help-block">{{$errors->first('dana_disetujui')}}</span>

						    @endif
						  </div>
						  <div class="form-group">
						    <label for="exampleFormControlSelect1">Kategori</label>
						    <select name="kategori" class="form-control" id="exampleFormControlSelect1">
						     <option value="pengmas">Pengmas</option>
                             <option value="penelitian">Penelitian</option>
						    </select>
							 </div>
							  <div class="form-group">
						    <label for="exampleInputEmail1">Keterangan</label>
						    <input name="keterangan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan keterangan" >
						  </div>
						    <div class="form-group">
						    	<label for="exampleFormControlSelect1">Status</label>
						   	 <select name="status" class="form-control" id="exampleFormControlSelect1">
						     <option value="ON_GOING">ON GOING</option>
                             <option value="DONE">DONE</option>
						   	 </select>
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

