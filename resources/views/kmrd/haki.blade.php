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
								
									<h3 class="panel-title">Kontrak Manajemen haki KK Rekayasa Data</h3>
									<div class="">
										<button type="button"  data-toggle="modal" data-target="#exampleModal" style="background-color:#e4cb10; color: white;padding: 6px 22px; box-shadow: 0px 1px 2px 0 rgba(0, 0, 0, 0.2);">Create</button>
									 <div class="dropdown show">
											  <a class="btn btn-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											    EXPORT EXCEL
											  </a>

											  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
											  	<ul>
											  		<li><a href="/kmrd/haki/export">EXPORT SEMUA</a></li>
											  		<li><a class="dropdown-item" href="/kmrd/haki/export/TW1">TW 1</a></li>
											  		<li><a class="dropdown-item" href="/kmrd/haki/export/TW2">TW 2</a></li>
											  		<li><a class="dropdown-item" href="/kmrd/haki/export/TW3">TW 3</a></li>
											  		<li><a class="dropdown-item" href="/kmrd/haki/export/TW4">TW 4</a></li>
											  		
											  	</ul>
											  </div>
										</div>
									</div>
								<div class="panel-body">
									<div class="table-responsive">
									<table class="table table-hover" id="datatable">
										<thead>
											<tr>
												<th>JUDUL HaKi</th>
												<th>PERIODE</th>
												<th>PEMEGANG HAK CIPTA</th>
												<th>PENCIPTA 1</th>
												<th>PENCIPTA 2</th>
												<th>PENCIPTA 3</th>
												<th>PENCIPTA 4</th>
												<th>PENCIPTA 5</th>
												<th>PENCIPTA 6</th>
												<th>PENCIPTA 7</th>
										 		<th>KELOMPOK KEAHLIAN</th>
										 		<th>JENIS CIPTAAN</th>
										 		<th>TANGGAL</th>
										 		<th>BIAYA PENDAFTARAN</th>
										 		<th>STATUS</th>
										 		@role('rd')
												<th>AKSI</th>
												@endrole
											</tr>
										</thead>

                                         <tbody>

                                         @foreach($data_haki as $haki)
                                         	<tr>
                                         		<td>{{$haki->judulhaki}}</td>
                                         		<td>{{$haki->periode}}</td>
                                         		<td>{{$haki->pemeganghakcipta}}</td>
                                         		<td>{{$haki->pencipta}}</td>
                                         		<td>{{$haki->pencipta2}}</td>
                                         		<td>{{$haki->pencipta3}}</td>
                                         		<td>{{$haki->pencipta4}}</td>
                                         		<td>{{$haki->pencipta5}}</td>
                                         		<td>{{$haki->pencipta6}}</td>
                                         		<td>{{$haki->pencipta7}}</td>
                                         		<td>{{$haki->kelompokkeahlian}}</td>
                                         		<td>{{$haki->jenisciptaan}}</td>
                                         		<td>{{$haki->tgl}}</td>
                                         			<td>Rp {{number_format($haki->biayapendaftaran,0,'.','.')}}</td>
                                         		<td>{{$haki->status}}</td>
                                         		@role('rd')
                                         		<td>
                                         			<a href="/kmrd/haki/{{$haki->id}}/edithk" class="btn btn-warning btn-sm">Edit</a>
                                         			<a href="/kmrd/haki/{{$haki->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Yakin Ingin Menghapus?')">Delete</a>

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
			      	<form action="/kmrd/haki/create" method = "POST">
			      		{{csrf_field()}}
			        		<form>

						  <div class="form-group {{$errors->has('judulhaki') ? 'has-error' : ''}}">
						    <label for="exampleInputEmail1">Judul HaKi</label>
						    <input name="judulhaki" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan haki">

						     @if($errors->has('judulhaki'))

						    <span class="help-block">{{$errors->first('judulhaki')}}</span>

						    @endif
						  </div>
							 <div class="form-group ">
						    <label for="exampleFormControlSelect1">Periode</label>
						    <select name="periode" class="form-control" id="exampleFormControlSelect1">
						     <option value="TW1 ">TW 1</option>
                             <option value="TW2">TW 2</option>
						    <option value="TW3">TW 3</option>
						     <option value="TW4">TW 4</option>
						    </select>
							 </div>
						    <div class="form-group {{$errors->has('pemeganghakcipta') ? 'has-error' : ''}}">
						  	 <label for="exampleInputEmail1">Pemegang hak cipta</label>
						    <input name="pemeganghakcipta" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan pemegang hak cipta">
                            @if($errors->has('pemeganghakcipta'))

						    <span class="help-block">{{$errors->first('pemeganghakcipta')}}</span>

						    @endif

						  </div>
						   <div class="form-group">
						  	 <label for="exampleInputEmail1">Pencipta 1</label>
						    <input name="pencipta" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan nama dosen" >
						  </div>
						    <div class="form-group">
						  	 <label for="exampleInputEmail1">Pencipta 2</label>
						    <input name="pencipta2" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan nama dosen" >
						  </div>
						    <div class="form-group">
						  	 <label for="exampleInputEmail1">Pencipta 3</label>
						    <input name="pencipta3" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan nama dosen" >
						  </div>
						    <div class="form-group">
						  	 <label for="exampleInputEmail1">Pencipta 4</label>
						    <input name="pencipta4" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan nama dosen" >
						  </div>
						    <div class="form-group">
						  	 <label for="exampleInputEmail1">Pencipta 5</label>
						    <input name="pencipta5" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan nama dosen" >
						  </div>
						    <div class="form-group">
						  	 <label for="exampleInputEmail1">Pencipta 6</label>
						    <input name="pencipta6" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan nama dosen" >
						  </div>
						    <div class="form-group">
						  	 <label for="exampleInputEmail1">Pencipta 7</label>
						    <input name="pencipta7" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan nama dosen" >
						  </div>
						    <div class="form-group">
						  	 <label for="exampleInputEmail1">Kelompok keahlian</label>
						    <input name="kelompokkeahlian" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" readonly="readonly" placeholder="Rekayasa data" >
						  </div>
							<!--  <div class="form-group">
						    <label for="exampleFormControlSelect1">Kelompok keahlian</label>
						    <select name="kelompokkeahlian" class="form-control" id="exampleFormControlSelect1">
						     <option value="rekayasa data ">Rekayasa data</option>
                             <option value="rekayasa perangkat lunak dan multimedia">Rekayasa perangkat lunak dan multimedia</option>
						    <option value="tata kelola dan sistem enterprise">tata kelola dan sistem enterprise</option>
						     <option value="teknologi informasi">Teknologi informasi</option>
						    </select>
							 </div>
 -->
							 <div class="form-group {{$errors->has('jenisciptaan') ? 'has-error' : ''}}">
						  	 <label for="exampleInputEmail1">Jenis ciptaan</label>
						    <input name="jenisciptaan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan jenis ciptaan" >
						    @if($errors->has('jenisciptaan'))

						    <span class="help-block">{{$errors->first('jenisciptaan')}}</span>

						    @endif
						  </div>
						<div class="form-group">
						    <label for="exampleInputEmail1">Tanggal cipta</label>
						      <input name="tgl" type="date"class="form-control" id="tgl" >
						  </div>
						   <div class="form-group">
						    <label for="exampleInputEmail1">Biaya pendaftaran</label>
						    <input name="biayapendaftaran" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan biaya pendaftaran" >
						  </div>
						   <div class="form-group ">
						    <label for="exampleFormControlSelect1">Status</label>
						    <select name="status" class="form-control" id="exampleFormControlSelect1">
						     <option value="done ">DONE</option>
                             <option value="on_going">ON GOING</option>
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
	

