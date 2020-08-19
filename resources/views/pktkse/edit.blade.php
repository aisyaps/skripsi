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
								<form action="/pktkse/{{$pktkse->id}}/update" method = "POST">
			      		{{csrf_field()}}
			        	<form>
						  <div class="form-group">
						    <label for="exampleInputEmail1">Rencana kerja</label>
						    <input name="rencanakerja" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="rencanakerja" value="{{ $pktkse-> rencanakerja }}">
						  </div>
						  <div class="form-group">
						    <label for="exampleInputEmail1">Justifikasi</label>
						     <input name="justifikasi" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="justifikasi" value="{{ $pktkse-> justifikasi }}">
						  </div>
						     <!--<select class="form-control" id="exampleFormControlSelect1">
						      <option value="nasional">Nasional</option>
						      <option value="internasional">Internasional</option> </select>!-->
						  <div class="form-group">
						    <label for="tgl_plan">Tanggal</label>
						    <input name="tgl_plan" type="date"class="form-control" id="tgl_plan" value ="2019-12-16" value="{{ $pktkse-> tgl_plan }}">
						  </div>
						  <div class="form-group">
						    <label for="exampleInputEmail1">DRK</label>
						    <input name="drk" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="DRK" value="{{ $pktkse-> drk }}">
						  </div>
						   <div class="form-group">
						    <label for="exampleInputEmail1">Rencana biaya</label>
						    <input name="rencanabiaya" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Rencana biaya" value="{{ $pktkse-> rencanabiaya }}">
						  </div>
						   <div class="form-group">
						    <label for="exampleInputEmail1">Kategori</label>
						    <input name="kategori" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Kategori" value="{{ $pktkse-> kategori }}">
						  </div>
						    <div class="form-group">
						    <label for="exampleInputEmail1">PIC</label>
						    <input name="pic" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Status" value="{{ $pktkse-> pic }}">
						  </div>
						 <div class="form-group">
						    <label for="exampleFormControlSelect1">Status</label>
						    <select name="status"  class="form-control" id="exampleFormControlSelect1">
						      <option value="belum dipublikasi ">belum dipublikasi</option>
						      <option value="sudah dipublikasi">sudah dipublikasi</option>
						    </select>
							 </div>
						   <!--<div class="form-group">
						    <label for="exampleFormControlSelect1">Jurnal</label>
						    <select class="form-control" id="exampleFormControlSelect1">
						      <option value="nasional">Nasional</option>
						      <option value="internasional">Internasional</option>
						    </select>
							 </div>-->
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
			<form action="/pktkse-/{{$pktkse->id}}/update" method = "POST">
			      		{{csrf_field()}}
			        <form>
			        	 <div class="form-group">
						    <label for="exampleInputEmail1">Rencana kerja</label>
						    <input name="rencanakerja" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="rencanakerja" value="{{ $pktkse-> rencanakerja }}">
						  </div>
						  <div class="form-group">
						    <label for="exampleInputEmail1">Justifikasi</label>
						     <input name="justifikasi" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="justifikasi" value="{{ $pktkse-> justifikasi }}">
						  </div>
						     <!--<select class="form-control" id="exampleFormControlSelect1">
						      <option value="nasional">Nasional</option>
						      <option value="internasional">Internasional</option> </select>!-->
						  <div class="form-group">
						    <label for="tgl_plan">Tanggal</label>
						    <input name="tgl_plan" type="date"class="form-control" id="tgl_plan" value ="2019-12-16" value="{{ $pktkse-> tgl_plan }}">
						  </div>
						  <div class="form-group">
						    <label for="exampleInputEmail1">DRK</label>
						    <input name="drk" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="DRK" value="{{ $pktkse-> drk }}">
						  </div>
						   <div class="form-group">
						    <label for="exampleInputEmail1">Rencana biaya</label>
						    <input name="rencanabiaya" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Rencana biaya" value="{{ $pktkse-> rencanabiaya }}">
						  </div>
						   <div class="form-group">
						    <label for="exampleInputEmail1">Kategori</label>
						    <input name="kategori" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Kategori" value="{{ $pktkse-> kategori }}">
						  </div>
						    <div class="form-group">
						    <label for="exampleInputEmail1">PIC</label>
						    <input name="pic" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Status" value="{{ $pktkse-> pic }}">
						  </div>
						 <div class="form-group">
						    <label for="exampleFormControlSelect1">Status</label>
						    <select name="status"  class="form-control" id="exampleFormControlSelect1">
						      <option value="belum dipublikasi ">belum dipublikasi</option>
						      <option value="sudah dipublikasi">sudah dipublikasi</option>
						    </select>
							 </div>
						   <!--<div class="form-group">
						    <label for="exampleFormControlSelect1">Jurnal</label>
						    <select class="form-control" id="exampleFormControlSelect1">
						      <option value="nasional">Nasional</option>
						      <option value="internasional">Internasional</option>
						    </select>
							 </div>-->
						   <button type="submit" class="btn btn-warning">Update</button>
						</form>
					</div>	
					</div>
					 @endsection
 
