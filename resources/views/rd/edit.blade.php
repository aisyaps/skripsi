@extends('layouts.master')


@section('content')

<div class="main">
	<div class="main-content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">

					<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Edit program kerja</h3>
								</div>
								<form action="/rd/{{$rd->id}}/update" method = "POST">
			      		{{csrf_field()}}
			        	<form>
			        	
						 <div class="form-group">
						    <label for="exampleInputEmail1">Nama Dosen</label>
						    <input name="namadosen" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan nama dosen">
						  </div>
						  <div class="form-group">
						    <label for="exampleInputEmail1">NIDN</label>
						    <input name="nidn" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan nidn">
						  </div>
						 
						  <div class="form-group">
						    <label for="exampleInputEmail1">Program Studi</label>
						    <input name="prodi" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan program studi">
						  </div>
						  
						     @foreach($daftar_topic as $key =>$value)
						  	<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" name="id_topic[]" id="inlineCheckbox1" value="{{$key}}">
							  <label class="form-check-label" for="inlineCheckbox1">{{$value}}</label>
							</div>
						   @endforeach
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
			<form action="/rd-/{{$rd->id}}/update" method = "POST">
			      		{{csrf_field()}}
			        <form>
						 <div class="form-group">
						    <label for="exampleInputEmail1">Nama Dosen</label>
						    <input name="namadosen" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan nama dosen">
						  </div>
						  <div class="form-group">
						    <label for="exampleInputEmail1">NIDN</label>
						    <input name="nidn" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan nidn">
						  </div>
						 
						  <div class="form-group">
						    <label for="exampleInputEmail1">Program Studi</label>
						    <input name="prodi" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan program studi">
						  </div>
						     @foreach($daftar_topic as $key =>$value)
						  	<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" name="id_topic[]" id="inlineCheckbox1" value="{{$key}}">
							  <label class="form-check-label" for="inlineCheckbox1">{{$value}}</label>
							</div>
						   @endforeach
						   <button type="submit" class="btn btn-warning">Update</button>
						</form>
					</div>	
					</div>
					 @endsection
 
