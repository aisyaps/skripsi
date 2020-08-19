@extends('layouts.master')


@section('content')

<div class="main">
	<div class="main-content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">

					<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Edit Data Rekognisi</h3>
								</div>
								<form action="/kmrd/rekognisi/{{$rekognisi->id}}/update" method = "POST">
			      		{{csrf_field()}}
			           <form>
						 <div class="form-group {{$errors->has('judulkegiatan') ? 'has-error' : ''}}">
						    <label for="exampleInputEmail1">Judul kegiatan</label>
						    <input name="judulkegiatan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan judul kegiatan" value="{{$rekognisi->judulkegiatan }}">

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
						    <input name="namadosen" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan nama dosen" value="{{ $rekognisi-> namadosen}}">
						     @if($errors->has('namadosen'))

						    <span class="help-block">{{$errors->first('namadosen')}}</span>

						    @endif

						  </div>
						   <div class="form-group">
						  	 <label for="exampleInputEmail1">Kelompok keahlian</label>
						    <input name="kelompokkeahlian" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" readonly="readonly" placeholder="Rekayasa Perangkat Data" >
						  </div>
							<!--  <div class="form-group">
						    <label for="exampleFormControlSelect1">Kelompok keahlian</label>
						    <select name="kelompokkeahlian" class="form-control" id="exampleFormControlSelect1">
						     <option value="rekayasa data ">Rekayasa data</option>
                             <option value="rekayasa perangkat lunak dan multimedia">Rekayasa perangkat lunak dan multimedia</option>
						    <option value="tata kelola dan sistem enterprise">tata kelola dan sistem enterprise</option>
						     <option value="teknologi informasi">Teknologi informasi</option>
						    </select> -->

							 </div>
						<div class="form-group {{$errors->has('tgl1') ? 'has-error' : ''}}">
						    <label for="exampleInputEmail1">Tanggal mulai</label>
						      <input name="tgl1" type="date"class="form-control" id="tgl1" value ="{{$rekognisi-> tgl1}}">
						       @if($errors->has('tgl1'))

						    <span class="help-block">{{$errors->first('tgl1')}}</span>

						    @endif

						  </div>
						  	<div class="form-group {{$errors->has('tgl2') ? 'has-error' : ''}}">
						    <label for="exampleInputEmail1">Tanggal selesai</label>
						      <input name="tgl2" type="date"class="form-control" id="tgl2" value ="{{$rekognisi-> tgl2}}">
						       @if($errors->has('tgl2'))

						    <span class="help-block">{{$errors->first('tgl2')}}</span>

						    @endif

						  </div>
						   <div class="form-group ">
						    <label for="exampleInputEmail1">Tempat</label>
						    <input name="tempat" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan tempat"  value="{{ $rekognisi->tempat }}">
						  </div>
						   <div class="form-group {{$errors->has('penyelenggara') ? 'has-error' : ''}}">
						    <label for="exampleInputEmail1">Penyelenggara</label>
						    <input name="penyelenggara" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan penyelenggara" value="{{ $rekognisi-> penyelenggara }}">
						     @if($errors->has('penyelenggara'))

						    <span class="help-block">{{$errors->first('penyelenggara')}}</span>

						    @endif

						  </div>
						   <div class="form-group{{$errors->has('prodidosen') ? 'has-error' : ''}}">
						    <label for="exampleInputEmail1">Prodi dosen</label>
						    <input name="prodidosen" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan prodi dosen" value="{{ $rekognisi-> prodidosen }}">
						     @if($errors->has('prodidosen'))

						    <span class="help-block">{{$errors->first('prodidosen')}}</span>

						    @endif

						  </div>
						  	<div class="form-group">
						    <label for="exampleInputEmail1">Keterangan (dapat berupa evidence)</label>
						    <input name="keterangan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan keterangan atau evidence" value="{{ $rekognisi-> keterangan }}" >
						  </div>

						  <div class="form-group">
						    <label for="exampleFormControlSelect1">Status</label>
						    <select name="status" class="form-control" id="exampleFormControlSelect1">
						     <option value="ON_GOING ">ON GOING</option>
                             <option value="DONE">DONE</option>
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
			<form action="/kmrd/rekognisi/{{$rekognisi->id}}/update" method = "POST">
			      		{{csrf_field()}}
			          <form>
						  <div class="form-group {{$errors->has('judulkegiatan') ? 'has-error' : ''}}">
						    <label for="exampleInputEmail1">Judul kegiatan</label>
						    <input name="judulkegiatan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan judul kegiatan" value="{{$rekognisi->judulkegiatan }}">

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
						    <input name="namadosen" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan nama dosen" value="{{ $rekognisi-> namadosen}}">
						     @if($errors->has('namadosen'))

						    <span class="help-block">{{$errors->first('namadosen')}}</span>

						    @endif

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
						<div class="form-group {{$errors->has('tgl1') ? 'has-error' : ''}}">
						    <label for="exampleInputEmail1">Tanggal mulai</label>
						      <input name="tgl1" type="date"class="form-control" id="tgl1" value ="{{$rekognisi-> tgl1}}">
						       @if($errors->has('tgl1'))

						    <span class="help-block">{{$errors->first('tgl1')}}</span>

						    @endif

						  </div>
						  	<div class="form-group {{$errors->has('tgl2') ? 'has-error' : ''}}">
						    <label for="exampleInputEmail1">Tanggal selesai</label>
						      <input name="tgl2" type="date"class="form-control" id="tgl2" value ="{{$rekognisi-> tgl2}}">
						       @if($errors->has('tgl2'))

						    <span class="help-block">{{$errors->first('tgl2')}}</span>

						    @endif

						  </div>
						   <div class="form-group ">
						    <label for="exampleInputEmail1">Tempat</label>
						    <input name="tempat" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan tempat"  value="{{ $rekognisi->tempat }}">
						  </div>
						   <div class="form-group {{$errors->has('penyelenggara') ? 'has-error' : ''}}">
						    <label for="exampleInputEmail1">Penyelenggara</label>
						    <input name="penyelenggara" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan penyelenggara" value="{{ $rekognisi-> penyelenggara }}">
						     @if($errors->has('penyelenggara'))

						    <span class="help-block">{{$errors->first('penyelenggara')}}</span>

						    @endif

						  </div>
						   <div class="form-group{{$errors->has('prodidosen') ? 'has-error' : ''}}">
						    <label for="exampleInputEmail1">Prodi dosen</label>
						    <input name="prodidosen" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan prodi dosen" value="{{ $rekognisi-> prodidosen }}">
						     @if($errors->has('prodidosen'))

						    <span class="help-block">{{$errors->first('prodidosen')}}</span>

						    @endif

						  </div>
						  	<div class="form-group">
						    <label for="exampleInputEmail1">Keterangan (dapat berupa evidence)</label>
						    <input name="keterangan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan keterangan atau evidence" value="{{ $rekognisi-> keterangan }}" >
						  </div>

						  <div class="form-group">
						    <label for="exampleFormControlSelect1">Status</label>
						    <select name="status" class="form-control" id="exampleFormControlSelect1">
						     <option value="ON_GOING ">ON GOING</option>
                             <option value="DONE">DONE</option>
						    </select>
							 </div>
						   <button type="submit" class="btn btn-warning">Update</button>
						</form>
					</div>	
					</div>
					 @endsection
 
