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
								
									<h3 class="panel-title">Upload File Plotting Dosen</h3>
									<div class="right">
								</div>
								<div class="panel-body">
				             
				 
								<form action="/plottingdosen" method="POST" enctype="multipart/form-data">
									{{ csrf_field() }}

				 					<div class="form-group">
										 <label for="exampleInputEmail1">Judul</label>
										<input type="text" name="judul" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
									</div>
									 
									<div class="form-group">
										<b>File Dokumen</b><br/>
										<input type="file" name="file">
									</div>
				 
									<div class="form-group">
										<b>Keterangan</b>
										<textarea class="form-control" name="keterangan"></textarea>
									</div>
						  			<div class="form-group">
								    <label for="exampleFormControlSelect1">Submit</label>
								    <select name="pilihan" class="form-control" id="exampleFormControlSelect1">
								    @role('programstudi')
								     <option value="plotting ">submit file plotting dosen</option>
								     @endrole
								     @role('rd|rplm|tkse|ti')
		                             <option value="hasilplotting">Submit hasil file plottingdosen</option>
		                             @endrole
								    </select>
									 </div>
									<input type="submit" value="submit" class="btn btn-primary" class="btn btn-success">
								</form>
							</div>
						</div>
					</div>


@stop 
