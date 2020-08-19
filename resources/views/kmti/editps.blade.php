@extends('layouts.master')


@section('content')

<div class="main">
	<div class="main-content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">

					<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Edit Data Publikasi Seminar</h3>
								</div>
								<form action="/kmti/kmtips/{{$kmtips->id}}/update" method = "POST">
			      		{{csrf_field()}}
			        	  <form>
						  <div class="form-group {{$errors->has('judulpenelitian') ? 'has-error' : ''}}">
						    <label for="exampleInputEmail1">Judul penelitian</label>
						    <input name="judulpenelitian" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan judul penelitian" value="{{$kmtips->judulpenelitian }}">

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
						    <input name="penulis1" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan penulis1"value="{{ $kmtips->penulis1 }}" >
						  </div>
						   <div class="form-group">
						    <label for="exampleInputEmail1">Anggota penulis 2</label>
						    <input name="anggotapenulis2" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan anggotapenulis2"value="{{ $kmtips->anggotapenulis2 }}" >
						  </div>
						    <div class="form-group">
						    <label for="exampleInputEmail1">Anggota penulis 3</label>
						    <input name="anggotapenulis3" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan anggotapenulis3"value="{{ $kmtips->anggotapenulis3 }}">
						  </div>
						     <div class="form-group">
						    <label for="exampleInputEmail1">Anggota penulis 4</label>
						    <input name="anggotapenulis4" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan anggotapenulis4"value="{{ $kmtips->anggotapenulis4 }}">
						  </div>
						     <div class="form-group">
						    <label for="exampleInputEmail1">Anggota penulis 5</label>
						    <input name="anggotapenulis5" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan anggotapenulis5"value="{{ $kmtips->anggotapenulis5 }}" >
						  </div>
						  <!--  <div class="form-group">
						  	 <label for="exampleInputEmail1">Kelompok keahlian</label>
						    <input name="kelompokkeahlian" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" readonly="readonly" placeholder="Teknologi Informasi" >
						  </div> -->
							 <!-- <div class="form-group ">
						    <label for="exampleFormControlSelect1">Kelompok keahlian</label>
						    <select name="kelompokkeahlian" class="form-control" id="exampleFormControlSelect1">
						     <option value="rekayasa data ">Rekayasa data</option>
                             <option value="rekayasa perangkat lunak dan multimedia">Rekayasa perangkat lunak dan multimedia</option>
						    <option value="tata kelola dan sistem enterprise">tata kelola dan sistem enterprise</option>
						     <option value="teknologi informasi">Teknologi informasi</option>
						    </select>
							 </div> -->
						  <div class="form-group {{$errors->has('kategori') ? 'has-error' : ''}}">
						    <label for="exampleInputEmail1">Kategori</label>
						    <input name="kategori" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan kategori" value="{{ $kmtips->kategori }}">

							 @if($errors->has('kategori'))

						    <span class="help-block">{{$errors->first('kategori')}}</span>

						    @endif

						  </div>
						   <div class="form-group {{$errors->has('nama') ? 'has-error' : ''}}">
						    <label for="exampleInputEmail1">Nama Jurnal/Seminar</label>
						    <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan nama"  value="{{ $kmtips->nama }}"> 
						    @if($errors->has('nama'))

						    <span class="help-block">{{$errors->first('nama')}}</span>

						    @endif
						  </div>
						   <div class="form-group {{$errors->has('publisherlokasi') ? 'has-error' : ''}}">
						    <label for="exampleInputEmail1">Publisher/Lokasi seminar</label>
						    <input name="publisherlokasi" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan publisher atau lokasi seminar"  value="{{ $kmtips->publisherlokasi }}">

						    	 @if($errors->has('publisherlokasi'))

						    <span class="help-block">{{$errors->first('publisherlokasi')}}</span>

						    @endif
						  </div>
						   <div class="form-group">
						    <label for="exampleInputEmail1">Vol./no jurnal/tanggal seminar</label>
						    <input name="volnojurnaltglsem" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan volume dan nomor jurnal atau tanggal seminar"  value="{{ $kmtips->volnojurnaltglsem }}">
						  </div>
						    <div class="form-group">
						    <label for="exampleInputEmail1">Biaya publikasi</label>
						    <input name="biayapublikasi" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan biaya publikasi" value="{{ $kmtips->biayapublikasi }}">
						  </div>
						   <div class="form-group">
						    <label for="exampleInputEmail1">Stimulus</label>
						    <input name="stimulus" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan stimulus"  value="{{ $kmtips->stimulus }}">
						  </div>
						  	<div class="form-group">
						    <label for="exampleInputEmail1">Keterangan (dapat berupa evidence)</label>
						    <input name="keterangan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan keterangan atau evidence" value="{{ $kmtips->keterangan }}">
						  </div>
						  <div class="form-group">
						    <label for="exampleFormControlSelect1">Status</label>
						    <select name="status" class="form-control" id="exampleFormControlSelect1">
						     <option value="published">Published</option>
                             <option value="done">Done</option>
						    <option value="LOA">LOA</option>
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
			<form action="/kmti/kmtips/{{$kmtips->id}}/update" method = "POST">
			      		{{csrf_field()}}
			   
						 <form>
						  <div class="form-group {{$errors->has('judulpenelitian') ? 'has-error' : ''}}">
						    <label for="exampleInputEmail1">Judul penelitian</label>
						    <input name="judulpenelitian" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan judul penelitian" value="{{$kmtips->judulpenelitian }}">

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
						    <input name="penulis1" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan penulis1"value="{{ $kmtips->penulis1 }}" >
						  </div>
						   <div class="form-group">
						    <label for="exampleInputEmail1">Anggota penulis 2</label>
						    <input name="anggotapenulis2" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan anggotapenulis2"value="{{ $kmtips->anggotapenulis2 }}" >
						  </div>
						    <div class="form-group">
						    <label for="exampleInputEmail1">Anggota penulis 3</label>
						    <input name="anggotapenulis3" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan anggotapenulis3"value="{{ $kmtips->anggotapenulis3 }}">
						  </div>
						     <div class="form-group">
						    <label for="exampleInputEmail1">Anggota penulis 4</label>
						    <input name="anggotapenulis4" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan anggotapenulis4"value="{{ $kmtips->anggotapenulis4 }}">
						  </div>
						     <div class="form-group">
						    <label for="exampleInputEmail1">Anggota penulis 5</label>
						    <input name="anggotapenulis5" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan anggotapenulis5"value="{{ $kmtips->anggotapenulis5 }}" >
						  </div>
						   <div class="form-group">
						  	 <label for="exampleInputEmail1">Kelompok keahlian</label>
						    <input name="kelompokkeahlian" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" readonly="readonly" placeholder="Teknologi Informasi" >
						  </div>
							<!--  <div class="form-group ">
						    <label for="exampleFormControlSelect1">Kelompok keahlian</label>
						    <select name="kelompokkeahlian" class="form-control" id="exampleFormControlSelect1">
						     <option value="rekayasa data ">Rekayasa data</option>
                             <option value="rekayasa perangkat lunak dan multimedia">Rekayasa perangkat lunak dan multimedia</option>
						    <option value="tata kelola dan sistem enterprise">tata kelola dan sistem enterprise</option>
						     <option value="teknologi informasi">Teknologi informasi</option>
						    </select>
							 </div> -->
						  <div class="form-group {{$errors->has('kategori') ? 'has-error' : ''}}">
						    <label for="exampleInputEmail1">Kategori</label>
						    <input name="kategori" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan kategori" value="{{ $kmtips->kategori }}">

							 @if($errors->has('kategori'))

						    <span class="help-block">{{$errors->first('kategori')}}</span>

						    @endif

						  </div>
						   <div class="form-group {{$errors->has('nama') ? 'has-error' : ''}}">
						    <label for="exampleInputEmail1">Nama Jurnal/Seminar</label>
						    <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan nama"  value="{{ $kmtips->nama }}"> 
						    @if($errors->has('nama'))

						    <span class="help-block">{{$errors->first('nama')}}</span>

						    @endif
						  </div>
						   <div class="form-group {{$errors->has('publisherlokasi') ? 'has-error' : ''}}">
						    <label for="exampleInputEmail1">Publisher</label>
						    <input name="publisherlokasi" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan publisher atau lokasi seminar"  value="{{ $kmtips->publisherlokasi }}">

						    	 @if($errors->has('publisherlokasi'))

						    <span class="help-block">{{$errors->first('publisherlokasi')}}</span>

						    @endif
						  </div>
						   <div class="form-group">
						    <label for="exampleInputEmail1">Vol./no jurnal/tanggal seminar</label>
						    <input name="volnojurnaltglsem" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan volume dan nomor jurnal atau lokasi seminar"  value="{{ $kmtips->volnojurnaltglsem }}">
						  </div>
						    <div class="form-group">
						    <label for="exampleInputEmail1">Biaya publikasi</label>
						    <input name="biayapublikasi" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan biaya publikasi" value="{{ $kmtips->biayapublikasi }}">
						  </div>
						   <div class="form-group">
						    <label for="exampleInputEmail1">Stimulus</label>
						    <input name="stimulus" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan stimulus"  value="{{ $kmtips->stimulus }}">
						  </div>
						  	<div class="form-group">
						    <label for="exampleInputEmail1">Keterangan (dapat berupa evidence)</label>
						    <input name="keterangan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan keterangan atau evidence" value="{{ $kmtips->keterangan }}">
						  </div>
						  <div class="form-group">
						    <label for="exampleFormControlSelect1">Status</label>
						    <select name="status" class="form-control" id="exampleFormControlSelect1">
						     <option value="published">Published</option>
                             <option value="done">Done</option>
						    <option value="LOA">LOA</option>
						    </select>
							 </div>

	
						   <button type="submit" class="btn btn-warning">Update</button>
						</form>
					</div>	
					</div>
					 @endsection
 
