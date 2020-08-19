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
								<form action="/topic/{{$topic->id}}/update" method = "POST">
			      		{{csrf_field()}}
			        	<form>
			        	
						 <div class="form-group">
						    <label for="exampleInputEmail1">Nama Topic</label>
						    <input name="namatopic" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan nama topic">
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

	<h1>Form Edit Program Kerja</h1>
	@if(session('sukses'))
		<div class="alert alert-success" role="alert">
	{{session('sukses')}}
</div>
	@endif
	<div class="row">
		<div class="col-lg-12">
			<form action="/topic/{{$topic->id}}/update" method = "POST">
			      		{{csrf_field()}}
			        <form>
						 <div class="form-group">
						    <label for="exampleInputEmail1">Nama Topic</label>
						    <input name="namatopic" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan nama topic">
						  </div>
						   <button type="submit" class="btn btn-warning">Update</button>
						</form>
					</div>	
					</div>
					 @endsection
 
