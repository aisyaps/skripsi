@extends('layouts.master')

@section('content')
<div class="main">
	<div class="main-content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="panel">
								<div class="panel-heading">
								
									<h3 class="panel-title"></h3>
									<div class="right">

								</div>
								<div class="panel-body">
									<table class="table table-hover">
										<thead>
											<tr>
												<th>Kelompok Keahlian</th>
											</tr>
										</thead>
										<tbody>
									@foreach ($data_prokerkk as $prokerkk)
										<tr>
											<td><a href="/prokerkk/{{$prokerkk->id}}/programkerja">{{$prokerkk-> kelompokkeahlian}}</a></td>
												
										</tr>
								@endforeach
										</tbody>
									</table>
								</div>
							</div>
				</div>
			</div>
		</div>
	</div>
</div>
	
  </div>
</div>

@stop


