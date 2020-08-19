			

			<table>
				<tr>
					<td></td>
					<td></td>
					<td colspan="5" style="text-align: center;
  vertical-align: middle;"><h3 class="panel-title">Program Kerja</h3></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td colspan="5" style="text-align: center;
  vertical-align: middle;"><h5>Mulai Tanggal : {{$dari}}</h5></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td colspan="5" style="text-align: center;
  vertical-align: middle;"><h5>Sampai Tanggal : {{$sampai}}</h5></td>
					<td></td>
					<td></td>
					
				</tr>
				<tr></tr>
			</table>
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
                 	<?php $total =0; ?>
                 	@foreach($data as $key)
                 	<tr>
                 		<td>{{$key->rencanakerja}}</td>
                 		<td>{{$key->justifikasi}}</td>
                 		<td>{{$key->tgl_plan}}</td>
                 		<td>{{$key->drk}}</td>
                 		<td>{{$key->rencanabiaya}}</td>
                 		<td>{{$key->kategori}}</td>
                 		<td>{{$key->pic}}</td>
                 		<td>{{$key->status}}</td>
                 		<?php $total += $key->rencanabiaya; ?>
                 	</tr>
                 	
                 	@endforeach
                 	<tr>
                 		<td colspan="4">Total</td>
                 		<td><b>Rp <?= (int)$total; ?></b></td>
                 	</tr>
				</tbody>
				<tfoot>
					<tr></tr>
					<tr></tr>
					<tr></tr>
					<tr>
						<td colspan="7"></td>
						<td>Menyetujui</td>
					</tr>
					<tr>
						<td>Ketua KK TKSE</td>
						<td colspan="6"></td>
						<td>Dekan FTII</td>

					</tr>
					<tr></tr>
					<tr></tr>
					<tr></tr>
					<tr>
						<td>{{$ketuakk}}</td>
						<td colspan="6"></td>
						<td>Didi Supriyadi, S.T., M.KOM</td>
					</tr>
					<tr>
						<td>Nik. {{$nik}}</td>
						<td colspan="6"></td>
						<td>NIK PAK DIDI</td>
					</tr>
					<tr>
						<td colspan="4"></td>
						<td>Mengetahui</td>
					</tr>
					<tr>
						<td colspan="4"></td>
						<td>Wakil Rektor II</td>
					</tr>
					<tr></tr>
					<tr></tr>
					<tr></tr>
					<tr>
						<td colspan="4"></td>
						<td><b>Heru Priyanto, S.T., MBA</b></td>
					</tr>
					<tr>
						<td colspan="4"></td>
						<td>NIK. 13740004</td>
					</tr>

				</tfoot>
			</table>

			