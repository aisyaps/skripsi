@extends('layouts.master')


@section('content')

<div class="main">
	<div class="main-content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">

					<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Inputs</h3>
								</div>
								<form action="/kmjurnal/{{$kmjurnal->id}}/update" method = "POST">
			      		{{csrf_field()}}
			        	<form>
			        	 <div class="form-group">
						    <label for="exampleInputEmail1">NIDN</label>
						    <input name="nidn" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="NIDN" value = "{{$kmjurnal->nidn}}">
						  </div>
						  <div class="form-group">
						    <label for="exampleInputEmail1">Nama Dosen</label>
						    <input name="nama_dosen" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Dosen" value = "{{$kmjurnal->nama_dosen}}">
						  </div>
						  <div class="form-group">
						    <label for="exampleInputEmail1">Jabatan</label>
						    <input name="jabatan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Jabatan" value = "{{$kmjurnal->jabatan}}">
						  </div>
						  <div class="form-group">
						    <label for="exampleInputEmail1">Research Field</label>
						    <input name="research_field" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Research Field" value = "{{$kmjurnal->research_field}}">
						  </div>
						  <div class="form-group">
						    <label for="exampleInputEmail1">Email</label>
						    <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" value = "{{$kmjurnal->email}}">
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

	<h1>Form Edit Data Penelitian</h1>
	@if(session('sukses'))
		<div class="alert alert-success" role="alert">
	{{session('sukses')}}
</div>
	@endif
	<div class="row">
		<div class="col-lg-12">
			<form action="/kmjurnal/{{$kmjurnal->id}}/update" method = "POST">
			      		{{csrf_field()}}
			        <form>
			        	 <div class="form-group">
						    <label for="exampleInputEmail1">NIDN</label>
						    <input name="nidn" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="NIDN" value = "{{$kmjurnal->nidn}}">
						  </div>
						  <div class="form-group">
						    <label for="exampleInputEmail1">Nama Dosen</label>
						    <input name="nama_dosen" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Dosen" value = "{{$kmjurnal->nama_dosen}}">
						  </div>
						  <div class="form-group">
						    <label for="exampleInputEmail1">Jabatan</label>
						    <input name="jabatan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Jabatan" value = "{{$kmjurnal->jabatan}}">
						  </div>
						  <div class="form-group">
						    <label for="exampleInputEmail1">Research Field</label>
						    <input name="research_field" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Research Field" value = "{{$kmjurnal->research_field}}">
						  </div>
						  <div class="form-group">
						    <label for="exampleInputEmail1">Email</label>
						    <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" value = "{{$kmjurnal->email}}">
						  </div>
						   <button type="submit" class="btn btn-warning">Update</button>
						</form>
						</div>	
						</div>
					 @endsection
 
