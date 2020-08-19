@extends('layouts.master')


@section('content')

<div class="main">
	<div class="main-content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">

					<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Edit Data</h3>
								</div>
								<form action="/kmrd/haki/{{$haki->id}}/update" method = "POST">
			      		{{csrf_field()}}
			        			<form>

						  <div class="form-group {{$errors->has('judulhaki') ? 'has-error' : ''}}">
						    <label for="exampleInputEmail1">Judul haki</label>
						    <input name="judulhaki" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan haki"value="{{ $haki->judulhaki }}">

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
						    <input name="pemeganghakcipta" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan pemegang hak cipta"value="{{ $haki->pemeganghakcipta }}">
                            @if($errors->has('pemeganghakcipta'))

						    <span class="help-block">{{$errors->first('pemeganghakcipta')}}</span>

						    @endif

						  </div>
						   <div class="form-group">
						  	 <label for="exampleInputEmail1">Pencipta 1</label>
						    <input name="pencipta" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan nama dosen" value="{{ $haki->pencipta }}">
						  </div>
						    <div class="form-group">
						  	 <label for="exampleInputEmail1">Pencipta 2</label>
						    <input name="pencipta2" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan nama dosen" value="{{ $haki->pencipta2}}">
						  </div>
						    <div class="form-group">
						  	 <label for="exampleInputEmail1">Pencipta 3</label>
						    <input name="pencipta3" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan nama dosen" value="{{ $haki->pencipta3 }}">
						  </div>
						    <div class="form-group">
						  	 <label for="exampleInputEmail1">Pencipta 4</label>
						    <input name="pencipta4" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan nama dosen" value="{{ $haki->pencipta4 }}">
						  </div>
						    <div class="form-group">
						  	 <label for="exampleInputEmail1">Pencipta 5</label>
						    <input name="pencipta5" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan nama dosen" value="{{ $haki->pencipta5 }}">
						  </div>
						    <div class="form-group">
						  	 <label for="exampleInputEmail1">Pencipta 6</label>
						    <input name="pencipta6" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan nama dosen" value="{{ $haki->pencipta6 }}">
						  </div>
						    <div class="form-group">
						  	 <label for="exampleInputEmail1">Pencipta 7</label>
						    <input name="pencipta7" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan nama dosen" value="{{ $haki->pencipta7 }}">
						  </div>
						     <div class="form-group">
						  	 <label for="exampleInputEmail1">Kelompok keahlian</label>
						    <input name="kelompokkeahlian" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" readonly="readonly" placeholder="Rekayasa Data" >
						  </div>
							<!--  <div class="form-group">
						    <label for="exampleFormControlSelect1">Kelompok keahlian</label>
						    <select name="kelompokkeahlian" class="form-control" id="exampleFormControlSelect1">
						     <option value="rekayasa data ">Rekayasa data</option>
                             <option value="rekayasa perangkat lunak dan multimedia">Rekayasa perangkat lunak dan multimedia</option>
						    <option value="tata kelola dan sistem enterprise">tata kelola dan sistem enterprise</option>
						     <option value="teknologi informasi">Teknologi informasi</option>
						    </select>
							 </div> -->

							 <div class="form-group {{$errors->has('jenisciptaan') ? 'has-error' : ''}}">
						  	 <label for="exampleInputEmail1">Jenis ciptaan</label>
						    <input name="jenisciptaan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan jenis ciptaan" value="{{ $haki->jenisciptaan }}">
						    @if($errors->has('jenisciptaan'))

						    <span class="help-block">{{$errors->first('jenisciptaan')}}</span>

						    @endif
						  </div>
						<div class="form-group">
						    <label for="exampleInputEmail1">Tanggal cipta</label>
						      <input name="tgl" type="date"class="form-control" id="tgl" value="{{ $haki->tgl }}">
						  </div>
						   <div class="form-group">
						    <label for="exampleInputEmail1">Biaya pendaftaran</label>
						    <input name="biayapendaftaran" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan biaya pendaftaran" value="{{ $haki->biayapendaftaran }}">
						  </div>
						   <div class="form-group ">
						    <label for="exampleFormControlSelect1">Status</label>
						    <select name="status" class="form-control" id="exampleFormControlSelect1">
						     <option value="done ">DONE</option>
                             <option value="on_going">ON GOING</option>
						    </select>
							 </div>
	
						   <button type="submit" class="btn btn-warning">Update</button>
						</form>
								</div>
							</div>
				</div>
			</div>
		</div>
	</div>
</div>

@stop
@section('content1')

	<h1>Form Edit Kontrak Manajemen</h1>
	@if(session('sukses'))
		<div class="alert alert-success" role="alert">
	{{session('sukses')}}
</div>
	@endif
	<div class="row">
		<div class="col-lg-12">
			<form action="/kmrd/haki/{{$haki->id}}/update" method = "POST">
			      		{{csrf_field()}}
			 		<form>

						  <div class="form-group {{$errors->has('judulhaki') ? 'has-error' : ''}}">
						    <label for="exampleInputEmail1">Judul haki</label>
						    <input name="judulhaki" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan haki"value="{{ $haki->judulhaki }}">

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
						    <input name="pemeganghakcipta" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan pemegang hak cipta"value="{{ $haki->pemeganghakcipta }}">
                            @if($errors->has('pemeganghakcipta'))

						    <span class="help-block">{{$errors->first('pemeganghakcipta')}}</span>

						    @endif

						  </div>
						   <div class="form-group">
						  	 <label for="exampleInputEmail1">Pencipta 1</label>
						    <input name="pencipta" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan nama dosen" value="{{ $haki->pencipta }}">
						  </div>
						    <div class="form-group">
						  	 <label for="exampleInputEmail1">Pencipta 2</label>
						    <input name="pencipta2" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan nama dosen" value="{{ $haki->pencipta2}}">
						  </div>
						    <div class="form-group">
						  	 <label for="exampleInputEmail1">Pencipta 3</label>
						    <input name="pencipta3" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan nama dosen" value="{{ $haki->pencipta3 }}">
						  </div>
						    <div class="form-group">
						  	 <label for="exampleInputEmail1">Pencipta 4</label>
						    <input name="pencipta4" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan nama dosen" value="{{ $haki->pencipta4 }}">
						  </div>
						    <div class="form-group">
						  	 <label for="exampleInputEmail1">Pencipta 5</label>
						    <input name="pencipta5" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan nama dosen" value="{{ $haki->pencipta5 }}">
						  </div>
						    <div class="form-group">
						  	 <label for="exampleInputEmail1">Pencipta 6</label>
						    <input name="pencipta6" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan nama dosen" value="{{ $haki->pencipta6 }}">
						  </div>
						    <div class="form-group">
						  	 <label for="exampleInputEmail1">Pencipta 7</label>
						    <input name="pencipta7" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan nama dosen" value="{{ $haki->pencipta7 }}">
						  </div>
							 <div class="form-group">
						    <label for="exampleFormControlSelect1">Kelompok keahlian</label>
						    <select name="kelompokkeahlian" class="form-control" id="exampleFormControlSelect1">
						     <option value="rekayasa data ">Rekayasa data</option>
                             <option value="rekayasa perangkat lunak dan multimedia">Rekayasa perangkat lunak dan multimedia</option>
						    <option value="tata kelola dan sistem enterprise">tata kelola dan sistem enterprise</option>
						     <option value="teknologi informasi">Teknologi informasi</option>
						    </select>
							 </div>

							 <div class="form-group {{$errors->has('jenisciptaan') ? 'has-error' : ''}}">
						  	 <label for="exampleInputEmail1">Jenis ciptaan</label>
						    <input name="jenisciptaan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan jenis ciptaan" value="{{ $haki->jenisciptaan }}">
						    @if($errors->has('jenisciptaan'))

						    <span class="help-block">{{$errors->first('jenisciptaan')}}</span>

						    @endif
						  </div>
						<div class="form-group">
						    <label for="exampleInputEmail1">Tanggal cipta</label>
						      <input name="tgl" type="date"class="form-control" id="tgl" value="{{ $haki->tgl }}">
						  </div>
						   <div class="form-group">
						    <label for="exampleInputEmail1">Biaya pendaftaran</label>
						    <input name="biayapendaftaran" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan biaya pendaftaran" value="{{ $haki->biayapendaftaran }}">
						  </div>
						   <div class="form-group ">
						    <label for="exampleFormControlSelect1">Status</label>
						    <select name="status" class="form-control" id="exampleFormControlSelect1">
						     <option value="done ">DONE</option>
                             <option value="on_going">ON GOING</option>
						    </select>
							 </div>

						   <button type="submit" class="btn btn-warning">Update</button>
						</form>
					</div>	
				</div>
					 @endsection
 
