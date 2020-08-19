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
								
									<h3 class="panel-title">Cetak Formulir Program Kerja</h3>
									<div class="center">
									<h1 class="mb-5"> </h1>

									<form action="{{url('search')}}" method="get"  id="datepicker">
 
										{{csrf_field()}}
								
									 <div class="form-group ">
								    <label for="exampleFormControlSelect1">Kelompok keahlian</label>
								    <select name="kelompokkeahlian" class="form-control" id="exampleFormControlSelect1">
								      @role('rd') 
								     <option value="rekayasa data ">Rekayasa data</option>
								      @endrole
								      @role('rplm')
		                             <option value="rekayasa perangkat lunak dan multimedia">Rekayasa perangkat lunak dan multimedia</option>
		                             @endrole
		                             @role('tkse')
								    <option value="tata kelola dan sistem enterprise">tata kelola dan sistem enterprise</option>
								    @endrole
								    @role('ti')
								     <option value="teknologi informasi">Teknologi informasi</option>
								     @endrole
								    </select>
									 </div>
								    <label for="exampleFormControlSelect1">Dari</label>
								     <input name="dari" type="date"class="form-control" id="dari" value ="2019-12-16">
									 </div>
									 <div class="form-group">
									    <label for="exampleFormControlSelect1">Sampai</label>
									     <input name="sampai" type="date"class="form-control" id="sampai" value ="2019-12-16">
										 </div>

									<button type="submit" style="background-color: #00AAFF; color: white;padding: 6px 22px; box-shadow: 0px 1px 2px 0 rgba(0, 0, 0, 0.2);">Cari</button>
									</form>
								
								@isset($kelompokkeahlian)
								<div class="panel">
                                	<div class="panel-heading">
								
									<h3 class="panel-title">Program Kerja : {{$kelompokkeahlian}}</h3>
									<div class="right">
										<form method="post" action="{{route('export-cetak-pk')}}">
											@csrf
											<input type="hidden" name="kelompokkeahlian" value="{{$kelompokkeahlian}}">
											<input type="hidden" name="dari" value="{{$dari}}">
											<input type="hidden" name="sampai" value="{{$sampai}}">


											<button type="submit" style="background-color: #00AAFF; color: white;padding: 6px 22px; box-shadow: 0px 1px 2px 0 rgba(0, 0, 0, 0.2);">Export Excel</button>
										</form>
									
									</div>
								</div>
							</div>	
							<div class="panel-body">
							<table class="table table-hover">
								<thead>
									<tr>
										<th>RENCANA KERJA</th>
										<th>JUSTIFIKASI</th>
										<th>TANGGAL</th>
								 		<th>DRK</th>
								 		<th>RENCANA BIAYA</th>
								 		<th>KATEGORI</th>
								 		<th>PIC</th>
								 		<th>STATUS</th>
									
									</tr>
								</thead>
                                 <tbody>
                                 	@foreach($data as $pkrplm)
                                 	<tr>
                                 		<td>{{$pkrplm->rencanakerja}}</td>
                                 		<td>{{$pkrplm->justifikasi}}</td>
                                 		<td>{{$pkrplm->tgl_plan}}</td>
                                 		<td>{{$pkrplm->drk}}</td>
                                 		<td>{{$pkrplm->rencanabiaya}}</td>
                                 		<td>{{$pkrplm->kategori}}</td>
                                 		<td>{{$pkrplm->pic}}</td>
                                 		<td>{{$pkrplm->status}}</td>
                                 	</tr>
                                 	@endforeach
								</tbody>
							</table>
							</div>
							@endisset
									
							




								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
		
	
								




@stop

@section('footer')

<script>
	$(document).ready(function(){
		$('.datepicker').datepicker();
	});	
</script>

@stop