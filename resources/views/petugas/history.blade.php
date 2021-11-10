@extends('template.app')

@section('main')
				
                    <div class="row">
						<div class="col-md-12">
                            <h1><b>Riwayat</b></h1><br>
							<div class="card">
								<div class="card-header" style="background-color: #45aaf2; font-size: 30px;">
									<h4 class="card-title text-white fw-bold" style="font-family: 'Poppins', sans-serif; font-size: 20px;">Riwayat Pembayaran</h4>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table id="basic-datatables" class="display table table-hover" >
											<thead>
												<tr>
													<th>NISN</th>
													<th>Tanggal Bayar</th>
													<th>Jumlah Bayar</th>
												</tr>
											</thead>
											<tfoot>
												<tr>
													<th>NISN</th>
													<th>Tanggal Bayar</th>
													<th>Jumlah Bayar</th>
												</tr>
											</tfoot>
											<tbody>

												@foreach ($pembayaran as $p)
													<tr>
														
														{{-- ini belom bisa dinamisin NISN nya, aku ndak tau caranya --}}
														<td>{{$p->id_siswa}}</td>
														{{-- ini belom bisa dinamisin NISN nya, aku ndak tau caranya --}}

														<td>{{$p->created_at}}</td>
														<td>{{$p->jumlah_bayar}}</td>
													</tr>	
												@endforeach
												
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				
 


@endsection
