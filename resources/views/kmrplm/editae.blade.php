@extends('layouts.master')


@section('content')

<div class="main">
	<div class="main-content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">

					<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Edit data</h3>
								</div>
								<form action="/kmrplm/kmrplmabdimaseksternal/{{$kmrplmabdimaseksternal->id}}/update" method = "POST">
			      		{{csrf_field()}}
			  				   <form>
						  <div class="form-group {{$errors->has('judulkegiatanpengmas') ? 'has-error' : ''}}">
						    <label for="exampleInputEmail1">Judul kegiatan</label>
						    <input name="judulkegiatanpengmas" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan judul kegiatan" value="{{ $kmrplmabdimaseksternal-> judulkegiatanpengmas }}">

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
						    <input name="namadosen1" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan nama dosen"value="{{ $kmrplmabdimaseksternal-> namadosen1 }}">
						     @if($errors->has('namadosen1'))

						    <span class="help-block">{{$errors->first('namadosen1')}}</span>

						    @endif

						  </div>
						   <div class="form-group">
						  	 <label for="exampleInputEmail1">Nama dosen</label>
						    <input name="namadosen2" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan nama dosen" value="{{ $kmrplmabdimaseksternal-> namadosen2 }}">
	
						  </div>
						   <div class="form-group">
						  	 <label for="exampleInputEmail1">Nama dosen</label>
						    <input name="namadosen3" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan nama dosen" value="{{ $kmrplmabdimaseksternal-> namadosen3 }}">

						  </div>
						   <div class="form-group">
						  	 <label for="exampleInputEmail1">Nama dosen</label>
						    <input name="namadosen4" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan nama dosen"value="{{ $kmrplmabdimaseksternal-> namadosen4 }}">

						  </div>
						   <div class="form-group">
						  	 <label for="exampleInputEmail1">Nama dosen</label>
						    <input name="namadosen5" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan nama dosen" value="{{ $kmrplmabdimaseksternal-> judulkegiatanpengmas }}">

						  </div>
						    <div class="form-group">
						  	 <label for="exampleInputEmail1">Nama mahasiswa</label>
						    <input name="namamahasiswa1" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan nama mahasiswa" value="{{ $kmrplmabdimaseksternal-> namamahasiswa1 }}">

						  </div>
						     <div class="form-group">
						  	 <label for="exampleInputEmail1">Nama mahasiswa</label>
						    <input name="namamahasiswa2" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan nama mahasiswa"value="{{ $kmrplmabdimaseksternal-> namamahasiswa2 }}">

						  </div>
						     <div class="form-group">
						  	 <label for="exampleInputEmail1">Nama mahasiswa</label>
						    <input name="namamahasiswa3" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan nama mahasiswa" value="{{ $kmrplmabdimaseksternal-> namamahasiswa3 }}">

						  </div>
						     <div class="form-group">
						  	 <label for="exampleInputEmail1">Nama mahasiswa</label>
						    <input name="namamahasiswa4" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan nama mahasiswa" value="{{ $kmrplmabdimaseksternal-> namamahasiswa4 }}">

						  </div>
						     <div class="form-group">
						  	 <label for="exampleInputEmail1">Nama mahasiswa</label>
						    <input name="namamahasiswa5" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan nama mahasiswa" value="{{ $kmrplmabdimaseksternal-> namamahasiswa5 }}">

						  </div>
						<!--    <div class="form-group">
						  	 <label for="exampleInputEmail1">Kelompok keahlian</label>
						    <input name="kelompokkeahlian" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" readonly="readonly" placeholder="Rekayasa Perangkat Lunak dan Multimedia" >
						  </div> -->
						<!-- 	 <div class="form-group">
						    <label for="exampleFormControlSelect1">Kelompok keahlian</label>
						    <select name="kelompokkeahlian" class="form-control" id="exampleFormControlSelect1">
						    <option value="rekayasa data ">Rekayasa data</option> -->
                             <!-- <option value="rekayasa perangkat lunak dan multimedia">Rekayasa perangkat lunak dan multimedia</option> -->
						  <!--   <option value="tata kelola dan sistem enterprise">tata kelola dan sistem enterprise</option>
						     <option value="teknologi informasi">Teknologi informasi</option> -->
						    </select>

							 </div> -->
						<div class="form-group">
						    <label for="exampleInputEmail1">Tanggal </label>
						      <input name="tgl" type="date"class="form-control" id="tgl1" value="{{ $kmrplmabdimaseksternal-> tgl }}">

						  </div>
						   <div class="form-group  {{$errors->has('tempat') ? 'has-error' : ''}} ">
						    <label for="exampleInputEmail1">Tempat</label>
						    <input name="tempat" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan tempat"  value="{{ $kmrplmabdimaseksternal-> tempat }}">
  						 @if($errors->has('tempat'))

						    <span class="help-block">{{$errors->first('tempat')}}</span>

						    @endif

						  </div>
						     <div class="form-group">
						  	 <label for="exampleInputEmail1">Prodi dosen</label>
						    <input name="prodidosen" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan prodidosen" value="{{ $kmrplmabdimaseksternal-> prodidosen }}">

						  </div>
						      <div class="form-group">
						  	 <label for="exampleInputEmail1">Prodi dosen</label>
						    <input name="prodidosen2" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan prodidosen" value="{{ $kmrplmabdimaseksternal-> prodidosen2 }}">
						    </div>
						     <div class="form-group">
						  	 <label for="exampleInputEmail1">Prodi dosen</label>
						    <input name="prodidosen3" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan prodidosen" value="{{ $kmrplmabdimaseksternal-> prodidosen3 }}">
						    </div>
						      <div class="form-group">
						  	 <label for="exampleInputEmail1">Prodi dosen</label>
						    <input name="prodidosen4" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan prodidosen" value="{{ $kmrplmabdimaseksternal-> prodidosen4 }}">
							</div>
						    <div class="form-group">
						  	 <label for="exampleInputEmail1">Prodi dosen</label>
						    <input name="prodidosen5" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan prodidosen" value="{{ $kmrplmabdimaseksternal-> prodidosen5 }}">
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
						    <input name="biaya" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan biaya" value="{{ $kmrplmabdimaseksternal-> biaya }}">
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

							<!-- -->
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

	<h1>Form Edit Program Kerja</h1>
	@if(session('sukses'))
		<div class="alert alert-success" role="alert">
	{{session('sukses')}}
</div>
	@endif
	<div class="row">
		<div class="col-lg-12">
			<form action="/kmrplm/kmrplmabdimaseksternal/{{$kmrplmabdimaseksternal->id}}/update" method = "POST">
			      		{{csrf_field()}}
			 			  <form>

						  <div class="form-group {{$errors->has('judulkegiatanpengmas') ? 'has-error' : ''}}">
						    <label for="exampleInputEmail1">Judul kegiatan</label>
						    <input name="judulkegiatanpengmas" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan judul kegiatan" value="{{ $kmrplmabdimaseksternal-> judulkegiatanpengmas }}">

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
						    <input name="namadosen1" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan nama dosen"value="{{ $kmrplmabdimaseksternal-> namadosen1 }}">
						     @if($errors->has('namadosen1'))

						    <span class="help-block">{{$errors->first('namadosen1')}}</span>

						    @endif

						  </div>
						   <div class="form-group">
						  	 <label for="exampleInputEmail1">Nama dosen</label>
						    <input name="namadosen2" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan nama dosen" value="{{ $kmrplmabdimaseksternal-> namadosen2 }}">
	
						  </div>
						   <div class="form-group">
						  	 <label for="exampleInputEmail1">Nama dosen</label>
						    <input name="namadosen3" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan nama dosen" value="{{ $kmrplmabdimaseksternal-> namadosen3 }}">

						  </div>
						   <div class="form-group">
						  	 <label for="exampleInputEmail1">Nama dosen</label>
						    <input name="namadosen4" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan nama dosen"value="{{ $kmrplmabdimaseksternal-> namadosen4 }}">

						  </div>
						   <div class="form-group">
						  	 <label for="exampleInputEmail1">Nama dosen</label>
						    <input name="namadosen5" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan nama dosen" value="{{ $kmrplmabdimaseksternal-> judulkegiatanpengmas }}">

						  </div>
						    <div class="form-group">
						  	 <label for="exampleInputEmail1">Nama mahasiswa</label>
						    <input name="namamahasiswa1" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan nama mahasiswa" value="{{ $kmrplmabdimaseksternal-> namamahasiswa1 }}">

						  </div>
						     <div class="form-group">
						  	 <label for="exampleInputEmail1">Nama mahasiswa</label>
						    <input name="namamahasiswa2" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan nama mahasiswa"value="{{ $kmrplmabdimaseksternal-> namamahasiswa2 }}">

						  </div>
						     <div class="form-group">
						  	 <label for="exampleInputEmail1">Nama mahasiswa</label>
						    <input name="namamahasiswa3" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan nama mahasiswa" value="{{ $kmrplmabdimaseksternal-> namamahasiswa3 }}">

						  </div>
						     <div class="form-group">
						  	 <label for="exampleInputEmail1">Nama mahasiswa</label>
						    <input name="namamahasiswa4" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan nama mahasiswa" value="{{ $kmrplmabdimaseksternal-> namamahasiswa4 }}">

						  </div>
						     <div class="form-group">
						  	 <label for="exampleInputEmail1">Nama mahasiswa</label>
						    <input name="namamahasiswa5" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan nama mahasiswa" value="{{ $kmrplmabdimaseksternal-> namamahasiswa5 }}">

						  </div>
						
						<div class="form-group">
						    <label for="exampleInputEmail1">Tanggal </label>
						      <input name="tgl" type="date"class="form-control" id="tgl1" value="{{ $kmrplmabdimaseksternal-> tgl }}">

						  </div>
						   <div class="form-group  {{$errors->has('tempat') ? 'has-error' : ''}} ">
						    <label for="exampleInputEmail1">Tempat</label>
						    <input name="tempat" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan tempat"  value="{{ $kmrplmabdimaseksternal-> tempat }}">
  						 @if($errors->has('tempat'))

						    <span class="help-block">{{$errors->first('tempat')}}</span>

						    @endif

						  </div>
						     <div class="form-group">
						  	 <label for="exampleInputEmail1">Prodi dosen</label>
						    <input name="prodidosen" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan prodidosen" value="{{ $kmrplmabdimaseksternal-> prodidosen }}">

						  </div>
						      <div class="form-group">
						  	 <label for="exampleInputEmail1">Prodi dosen</label>
						    <input name="prodidosen2" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan prodidosen" value="{{ $kmrplmabdimaseksternal-> prodidosen2 }}">
						    </div>
						     <div class="form-group">
						  	 <label for="exampleInputEmail1">Prodi dosen</label>
						    <input name="prodidosen3" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan prodidosen" value="{{ $kmrplmabdimaseksternal-> prodidosen3 }}">
						    </div>
						      <div class="form-group">
						  	 <label for="exampleInputEmail1">Prodi dosen</label>
						    <input name="prodidosen4" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan prodidosen" value="{{ $kmrplmabdimaseksternal-> prodidosen4 }}">
							</div>
						    <div class="form-group">
						  	 <label for="exampleInputEmail1">Prodi dosen</label>
						    <input name="prodidosen5" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan prodidosen" value="{{ $kmrplmabdimaseksternal-> prodidosen5 }}">
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
						    <input name="biaya" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan biaya" value="{{ $kmrplmabdimaseksternal-> biaya }}">
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
						   <button type="submit" class="btn btn-warning">Update</button>
						</form>
					</div>	
					</div>
					 @endsection
 
 