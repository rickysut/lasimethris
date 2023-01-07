@extends('layouts.admin')
@section('content')
@include('partials.breadcrumb')
@include('partials.subheader')

@can('pull_access')

@if ($errors)
<div class="" data-title="System Alert" >
	@foreach($errors->all() as $error)
		<li>{{ $error }}</li>
	@endforeach
</div>

@endif

{{-- @if ($status)
<div class="" data-title="System Alert" >
	@foreach($errors->all() as $error)
		<li>{{ $status }}</li>
	@endforeach
</div>
@endif --}}


<div class="row">
	<div class="col-12">
		<form  id="dataForm" action="{{ route('admin.task.storeriph') }}" method="POST" enctype="multipart/form-data">
		@csrf
		
			<div class="text-center">
				<i class="fa fa-sync-alt fa-3x text-primary"></i>
				<h2>Sinkronisasi Data</h2>
				<div class="row justify-content-center">
					<div class="col-md-8 order-md-2 mb-4">
						<div class="row">
							<div class="form-group col-lg-6 text-left">
								<label class="form-label">No. RIPH</label>
								<div class="input-group">
									<div class="input-group-prepend">
										<span class="input-group-text"><i class="fal fa-file-invoice text-align-center"></i></span>
									</div>
									<input id="nomor" name="nomor" type="text" placeholder="____/PP.240/D/__/____" data-inputmask="'mask': '9999/PP.240/D/99/9999'" class="form-control"  required>
								</div>
								<footer class="blockquote-footer text-left">
									<cite title="Source Title">e.g 0001/PP.240/D/04/2022</cite>
								</footer>
							</div>
							<div class="form-group col-lg-6 text-left">
								<label class="form-label">NPWP</label>
								<div class="input-group">
									<div class="input-group-prepend">
										<span class="input-group-text"><i class="fal fa-credit-card-front text-align-center"></i></span>
									</div>
									<!-- NPWP ini diperoleh dari tabel user importir yang diisi pada saat registrasi -->
									<input id="npwp" type="text" placeholder="__.___.___._-___.___" data-inputmask="'mask': '99.999.999.9-999.999'" class="form-control" value="{{ ($npwp_company ?? '') }}" disabled>
								</div>
								<footer class="blockquote-footer text-left">
									<cite title="Source Title">ini adalah Nomor Pokok Wajib Pajak (NPWP) Anda.</cite>
								</footer>
							</div>
						</div>
						
						<a class="btn btn-sm btn-primary btn-block text-white"  id="btnexec" >
							<i class="fas fa-sync"></i> Sync
						</a>
					</div>
				</div>
			</div>

			<div class="row justify-content-center collapse" id="collapseData">
				<div class="col-md-8 order-md-2 mb-4">
					<p class="lead">Berikut adalah data yang diperoleh dari aplikasi RIPH ONLINE berdasarkan informasi yang Anda berikan.</p>
						<h5 class="d-flex justify-content-between align-items-center mb-3">
							<span class="text-muted">RESULT</span>
							<span>
								Sync Status: <span id="keterangan"  class="badge badge-success badge-pill">wait..</span>
							</span>
							<input type="hidden" id="h-keterangan" name="keterangan">
						</h5>

						<ul class="list-group mb-3 notification">
							<li>
								<a href="#" class="d-flex align-items-center">
									<span class="d-flex flex-column flex-1 ml-1">
										<span class="name">
											<h6>Perusahaan/Lembaga </h6>
											<span id="nama" class="fw-500 position-absolute pos-top pos-right mt-1" id="nama_perusahaan">
											</span>
											<input type="hidden" id="h-nama" name="nama">
										</span>
										<footer class="blockquote-footer text-left">
											<cite title="Source Title">Pemegang Rekomendasi Import Produk Hortikultura</cite>
										</footer>
									</span>
								</a>
							</li>
							<li>
								<a href="#" class="d-flex align-items-center">
									{{-- <div class="icon-stack display-4 mr-1 flex-shrink-0">
										<i class="fas fa-check icon-stack-1x opacity-100 color-success-500"></i>
									</div> --}}
									<span class="d-flex flex-column flex-1 ml-1">
										<span class="name">
											<h6>NPWP </h6>
											<span id="npwpout"  class="fw-500 position-absolute pos-top pos-right mt-1">
											</span>
											<input type="hidden" id="h-npwpout" name="npwp" >
										</span>
										<footer class="blockquote-footer text-left">
											<cite title="Source Title">Nomor Pokok Wajib Pajak</cite>
										</footer>
									</span>
								</a>
							</li>
							<li>
								<a href="#" class="d-flex align-items-center">
									{{-- <div class="icon-stack display-4 mr-1 flex-shrink-0">
										<i class="fas fa-check icon-stack-1x opacity-100 color-success-500"></i>
									</div> --}}
									<span class="d-flex flex-column flex-1 ml-1">
										<span class="name">
											<h6>Nomor RIPH </h6>
											<span id="no_ijin"  class="fw-500 position-absolute pos-top pos-right mt-1">
											</span>
											<input type="hidden" id="h-no_ijin" name="no_ijin" >	

										</span>
										<footer class="blockquote-footer text-left">
											<cite title="Source Title">Persetujuan Rekomendasi Import Produk Hortikultura</cite>
										</footer>
									</span>
								</a>
							</li>
							<li>
								<a href="#" class="d-flex align-items-center">
									<span class="d-flex flex-column flex-1 ml-1">
										<span class="name">
											<h6>Periode/Tahun Anggaran </h6>
											<span id="periodetahun"  class="fw-500 position-absolute pos-top pos-right mt-1">
												
											</span>
											<input type="hidden" id="h-periodetahun"name="periodetahun" >	

										</span>
										<footer class="blockquote-footer text-left">
											<cite title="Source Title">Tahun Terbit</cite>
										</footer>
									</span>
								</a>
							</li>
							<li>
								<a href="#" class="d-flex align-items-center">
									<span class="d-flex flex-column flex-1 ml-1">
										<span class="name">
											<h6>Tanggal Terbit </h6>
											<span id="tgl_ijin" class="fw-500 position-absolute pos-top pos-right mt-1">
												
											</span>
											<input type="hidden" id="h-tgl_ijin" name="tgl_ijin" >	

										</span>
										<footer class="blockquote-footer text-left">
											<cite title="Source Title">Tanggal diterbitkannya Persetujuan RIPH</cite>
										</footer>
									</span>
								</a>
							</li>
							<li>
								<a href="#" class="d-flex align-items-center">
									<span class="d-flex flex-column flex-1 ml-1">
										<span class="name">
											<h6>Tanggal berakhir </h6>
											<span id="tgl_akhir" class="fw-500 position-absolute pos-top pos-right mt-1">
												
											</span>
											<input type="hidden" id="h-tgl_akhir" name="tgl_akhir" >	

										</span>
										<footer class="blockquote-footer text-left">
											<cite title="Source Title">Tanggal berakhirnya masa berlaku RIPH</cite>
										</footer>
									</span>
								</a>
							</li>
							<li>
								<a href="#" class="d-flex align-items-center">
									<span class="d-flex flex-column flex-1 ml-1">
										<span class="name">
											<h6>Komoditas </h6>
											<span id="no_hs" class="fw-500 position-absolute pos-top pos-right mt-1">
												
											</span>
											<input type="hidden" id="h-no_hs" name="no_hs" >	

										</span>
										<footer class="blockquote-footer text-left">
											<cite title="Source Title">Komoditas import pada RIPH</cite>
										</footer>
									</span>
								</a>
							</li>
							<li>
								<a href="#" class="d-flex align-items-center">
									<span class="d-flex flex-column flex-1 ml-1">
										<span class="name">
											<h6>Volume Import (ton)</h6>
											<span id="volume_riph"  class="fw-500 position-absolute pos-top pos-right mt-1">
												
											</span>
											<input type="hidden" id="h-volume_riph" name="volume_riph" >	

										</span>
										<footer class="blockquote-footer text-left">
											<cite title="Source Title">Total Volume import yang tertera pada Persetujuan RIPH</cite>
										</footer>
									</span>
								</a>
							</li>
							<li>
								<a href="#" class="d-flex align-items-center">
									<span class="d-flex flex-column flex-1 ml-1">
										<span class="name">
											<h6>Volume Wajib Produksi (ton)</h6>
											<span id="volume_produksi" class="fw-500 position-absolute pos-top pos-right mt-1">
												
											</span>
											<input type="hidden" id="h-volume_produksi" name="volume_produksi"  >	

										</span>
										<footer class="blockquote-footer text-left">
											<cite title="Source Title">Total kewajiban produksi yang harus dipenuhi.</cite>
										</footer>
									</span>
								</a>
							</li>
							<li>
								<a href="#" class="d-flex align-items-center">
									<span class="d-flex flex-column flex-1 ml-1">
										<span class="name">
											<h6>Luas Wajib Tanam (ha)</h6>
											<span id="luas_wajib_tanam"  class="fw-500 position-absolute pos-top pos-right mt-1">
												
											</span>
											<input type="hidden" id="h-luas_wajib_tanam" name="luas_wajib_tanam"  >	

										</span>
										<footer class="blockquote-footer text-left">
											<cite title="Source Title">Total kewajiban luas tanam yang harus dipenuhi.</cite>
										</footer>
									</span>
								</a>
							</li>
						</ul>
						<hr class="mb-4">
						<!-- field pernyataan kebenaran-->
						
						<span class="text-bold text-secondary">Kami menyatakan:</span>
						<div class="form-group ">
							<div class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" id="correct-riph" name="correct" required>
								<label class="custom-control-label text-danger" for="correct-riph">Data tersebut di atas adalah benar data RIPH dari Perusahaan/Lembaga kami.</label>
							</div>
							<div class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" id="responsible" name="responsible" required>
								<label class="custom-control-label text-danger" for="responsible">Bertanggungjawab sepenuhnya atas informasi dan data yang kami sampaikan.</label>
							</div>
						</div>
						
						<a id="submitbtn" class="btn btn-sm btn-primary text-white" role="button" type="submit">
							<i class="fal fa-upload text-align-center  mr-1"></i> Simpan untuk pelaporan
						</a>
						<hr class="mb-4">
						<!-- field konfirmasi, pada db mysql, is_confirm bernilai true jika berisi "username" -->
						{{-- <span class="text-bold text-secondary">Konfirmasi</span> --}}
						{{-- <div class="form-group">
							<div class="input-group">
								<input name="username" type="text" class="form-control form-control-sm @error('username') is-invalid @enderror" placeholder="ketikan username untuk konfirmasi" required>
								
								
								<div class="input-group-append">
									<a class="btn btn-sm btn-danger text-white" role="button">
										<i class="fal fa-times text-align-center  mr-1"></i> Cancel
									</a>
								</div>
								
								<div class="input-group-append">
									<a id="submitbtn" class="btn btn-sm btn-primary text-white" role="button" type="submit">
										<i class="fal fa-upload text-align-center  mr-1"></i> Submit
									</a>
								</div>
							</div>
						</div> --}}
						
					
				</div>
			</div>
		</form>
	</div>
</div>
<!-- End Page Content -->
@endcan
@endsection

@section('scripts')
@parent
<script src="{{ asset('js/jquery/jquery.validate.js') }}"></script>
<script src="{{ asset('js/jquery/additional-methods.js') }}"></script>
<script src="{{ asset('js/formplugins/inputmask/inputmask.bundle.js') }}"></script>
<script>

	function getCookie(name) {
		if (!document.cookie) {
			return null;
		}

		const xsrfCookies = document.cookie.split(';')
			.map(c => c.trim())
			.filter(c => c.startsWith(name + '='));

		if (xsrfCookies.length === 0) {
			return null;
		}
		return decodeURIComponent(xsrfCookies[0].split('=')[1]);
	}
	$(document).ready(function()
	{
		var $validator = $("#dataForm").validate({
		rules: {
			correct: {
				required: true
			},
			responsible: {
				required: true
			},
			username: {
				required: true
			},
			},
			messages:{
				correct: {
                        required: "!"
                    },
                responsible: {
                        required: "!"
                    },
				username: {
						required: "Harus diisi"
				}
			}
		})

		$(":input").inputmask();

		$("#btnexec").on('click', function(){
			
			stnpwp = $("#npwp").val().replace(/[\.,-]+/g,'');
			stnomor = $("#nomor").val();
			//console.log(stnpwp);
			//console.log(stnomor);
			$.ajax ({
				url: "{{ route('admin.task.getriph') }}",
				type: 'get',
				data: {npwp: stnpwp, nomor: stnomor},
				
				success: function(response){
					$('#correct-riph').prop({checked: false});
					$('#responsible').prop({checked: false});
					$('#keterangan').html(response.keterangan);
					$('#h-keterangan').val(response.keterangan);
					if (response.keterangan == 'SUCCESS') {
						$('#no_ijin').html(response.riph.persetujuan.no_ijin);
						$('#h-no_ijin').val(response.riph.persetujuan.no_ijin);
						$('#nama').html(response.riph.persetujuan.nama);
						$('#h-nama').val(response.riph.persetujuan.nama);
						$('#npwpout').html($("#npwp").val());
						$('#h-npwpout').val($("#npwp").val());
						$('#periodetahun').html(stnomor.substr(stnomor.length - 4));
						$('#h-periodetahun').val(stnomor.substr(stnomor.length - 4));
						$('#tgl_ijin').html(response.riph.persetujuan.tgl_ijin);
						$('#h-tgl_ijin').val(response.riph.persetujuan.tgl_ijin);
						$('#tgl_akhir').html(response.riph.persetujuan.tgl_akhir);
						$('#h-tgl_akhir').val(response.riph.persetujuan.tgl_akhir);
						$('#no_hs').html(response.riph.komoditas.loop[0].no_hs  + response.riph.komoditas.loop[0].nama_produk);
						$('#h-no_hs').val(response.riph.komoditas.loop[0].no_hs  + response.riph.komoditas.loop[0].nama_produk);
						$('#volume_riph').html(response.riph.wajib_tanam.volume_riph);
						$('#h-volume_riph').val(response.riph.wajib_tanam.volume_riph);
						$('#volume_produksi').html(response.riph.wajib_tanam.volume_produksi);
						$('#h-volume_produksi').val(response.riph.wajib_tanam.volume_produksi);
						$('#luas_wajib_tanam').html(response.riph.wajib_tanam.luas_wajib_tanam);
						$('#h-luas_wajib_tanam').val(response.riph.wajib_tanam.luas_wajib_tanam);
					} else {
						$('#no_ijin').html('');
						$('#h-no_ijin').val('');
						$('#nama').html('');
						$('#h-nama').val('');
						$('#npwpout').html('');
						$('#h-npwpout').val('');
						$('#periodetahun').html('');
						$('#h-periodetahun').val('');
						$('#tgl_akhir').html('');
						$('#h-tgl_akhir').html('');
						$('#tgl_ijin').html('');
						$('#h-tgl_ijin').val('');
						$('#no_hs').html('');
						$('#h-no_hs').val('');
						$('#volume_produksi').html('');
						$('#h-volume_riph').val('');
						$('#luas_wajib_tanam').html('');
						$('#h-luas_wajib_tanam').val('');
					}
					
				},
				complete: function(response){
					if(!$("#collapseData").hasClass('show')){
						$('#collapseData').collapse('toggle');
					}
				}
			});
		})

		$("#submitbtn").click(function(event) {

			var $valid = $("#dataForm").valid();
			if (!$valid) {
				$validator.focusInvalid();
				return false;
			}
			$("#dataForm").submit();
			
			
		});
	});

</script>


@endsection