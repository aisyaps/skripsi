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
								<form action="/kmtkse/kmtksehe/{{$kmtksehe->id}}/update" method = "POST">
			      		{{csrf_field()}}
			  			    <form>
		                
						 <div class="form-group {{$errors->has('judulpenelitian') ? 'has-error' : ''}}">
						    <label for="exampleInputEmail1">Judul penelitian</label>
						    <input name="judulpenelitian" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan judul penelitian"  value="{{$kmtksehe->judulpenelitian }}">
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
						    <input name="peneliti1" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan peneliti1" value="{{$kmtksehe->peneliti1 }}">
						      @if($errors->has('peneliti1'))

						    <span class="help-block">{{$errors->first('peneliti1')}}</span>

						    @endif
						  </div>
						 <div class="form-group">
						  	 <label for="exampleInputEmail1">Anggota peneliti 2</label>
						    <input name="anggotapeneliti2" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan anggota peneliti" value="{{$kmtksehe->anggotapeneliti2 }}">
						  </div>
						  	  <div class="form-group">
						  	 <label for="exampleInputEmail1">Anggota peneliti 3</label>
						    <input name="anggotapeneliti3" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan anggota peneliti" value="{{$kmtksehe->anggotapeneliti3 }}">
						  </div>
						  	  <div class="form-group">
						  	 <label for="exampleInputEmail1">Anggota peneliti 4</label>
						    <input name="anggotapeneliti4" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan anggota peneliti" value="{{$kmtksehe->anggotapeneliti4 }}">
						  </div>
						  	<!--  <label for="exampleInputEmail1">Kelompok keahlian</label>
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
						    <input name="dana_diajukan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan dana yang diajukan" value="{{$kmtksehe->dana_diajukan }}">
						  </div>
						   <div class="form-group {{$errors->has('dana_disetujui') ? 'has-error' : ''}}">
						    <label for="exampleInputEmail1">Dana yang disetujui</label>
						    <input name="dana_disetujui" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan dana yang disetujui" value="{{$kmtksehe->dana_disetujui }}">
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
						    <input name="keterangan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan keterangan" value="{{$kmtksehe->keterangan }}">
						  </div>
						    <div class="form-group">
						    	<label for="exampleFormControlSelect1">Status</label>
						   	 <select name="status" class="form-control" id="exampleFormControlSelect1">
						     <option value="ON_GOING">ON GOING</option>
                             <option value="DONE">DONE</option>
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
			<form action="/kmtkse/kmtksehe/{{$kmtksehe->id}}/update" method = "POST">
			      		{{csrf_field()}}
			       <form>
		                
						 <div class="form-group {{$errors->has('judulpenelitian') ? 'has-error' : ''}}">
						    <label for="exampleInputEmail1">Judul penelitian</label>
						    <input name="judulpenelitian" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan judul penelitian"  value="{{$kmtksehe->judulpenelitian }}">
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
						    <input name="peneliti1" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan peneliti1" value="{{$kmtksehe->peneliti1 }}">
						      @if($errors->has('peneliti1'))

						    <span class="help-block">{{$errors->first('peneliti1')}}</span>

						    @endif
						  </div>
						 <div class="form-group">
						  	 <label for="exampleInputEmail1">Anggota peneliti 2</label>
						    <input name="anggotapeneliti2" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan anggota peneliti" value="{{$kmtksehe->anggotapeneliti2 }}">
						  </div>
						  	  <div class="form-group">
						  	 <label for="exampleInputEmail1">Anggota peneliti 3</label>
						    <input name="anggotapeneliti3" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan anggota peneliti" value="{{$kmtksehe->anggotapeneliti3 }}">
						  </div>
						  	  <div class="form-group">
						  	 <label for="exampleInputEmail1">Anggota peneliti 4</label>
						    <input name="anggotapeneliti4" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan anggota peneliti" value="{{$kmtksehe->anggotapeneliti4 }}">
						  </div>
						  	<!--  <label for="exampleInputEmail1">Kelompok keahlian</label>
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
						    <input name="dana_diajukan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan dana yang diajukan" value="{{$kmtksehe->dana_diajukan }}">
						  </div>
						   <div class="form-group {{$errors->has('dana_disetujui') ? 'has-error' : ''}}">
						    <label for="exampleInputEmail1">Dana yang disetujui</label>
						    <input name="dana_disetujui" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan dana yang disetujui" value="{{$kmtksehe->dana_disetujui }}">
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
						    	<label for="exampleFormControlSelect1">Status</label>
						   	 <select name="status" class="form-control" id="exampleFormControlSelect1">
						     <option value="ON_GOING">ON GOING</option>
                             <option value="DONE">DONE</option>
						   	 </select>
							 </div>
					
						   <button type="submit" class="btn btn-warning">Update</button>
						</form>
					</div>	
					</div>
					 @endsection
 
