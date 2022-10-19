@extends('layouts.admin')
@section('content')
@include('partials.breadcrumb')
@include('partials.subheader')
@can('pull_access')
<!-- Page Content -->
<!--
	Yang ingin dicapai halaman ini adalah:
	Pelaku usaha melakukan sinkronisasi data RIPH yang telah diisi sebelumnya pada aplikasi RIPH menggunakan 2 key yakni nomor RIPH dan NPWP.
	Data hasil sinkronisasi yang ditampilkan hanyalah summary yang mewakili keseluruhan data.
	data dapat akan dikoleksi jika pengguna mengkonfirmasi kebenaran data yang dimiliki dengan memberikan pernyataan, konfirmasi username dan tombol submit.
	
	tombol submit akan me-redirect ke (jika sukses) halaman success page berisi informasi nomor RIPH, (jika gagal) ke halaman failed page jika gagal sinkronisasi (jaringan) atau gagal menyimpan di database, tombol coba coba ulang.
	
	halaman ini hanya sebagai contoh untuk menggambarkan apa yang ingin dicapai. Prosedur, proses dan metode dapat menggunakan teknologi lain yang lebih relevan dan tepat.
-->
<div class="row">
	<div class="col-12">
		<div class="text-center">
			<i class="fa fa-sync-alt fa-3x text-primary"></i>
			<h2>Sinkronisasi Data</h2>
			<div class="row justify-content-center">
				<div class="col-md-8 order-md-2 mb-4">
					<form class="row" action="#">
						<div class="form-group col-lg-6 text-left">
							<label class="form-label">No. RIPH</label>
							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text"><i class="fal fa-file-invoice text-align-center"></i></span>
								</div>
								<!-- Nomor RIPH ini diinput oleh user importir untuk dicocokkan dengan data RIPH -->
								<input type="text" placeholder="0155/PP.240/D/03/2022" data-inputmask="'mask': '9999/PP.240/D/99/9999'" class="form-control" required>
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
								<input type="text" placeholder="999-99-999-9999-9 (by API)" data-inputmask="'mask': '99.999.999.6-999.999'" class="form-control" disabled>
							</div>
							<footer class="blockquote-footer text-left">
								<cite title="Source Title">ini adalah Nomor Pokok Wajib Pajak (NPWP) Anda.</cite>
							</footer>
						</div>
					</form>
					<!--
						-	Button ini memeriksa dan mencocokkan data yang diberikan dengan data yang ada pada API RIPH
						-	alamat ujicoba: http://riph.pertanian.go.id/api.php/testing/simethris_get
						-	alamat wsdl: http://riph.pertanian.go.id/api.php/simethris?wsdl
						-	Data Uji Coba:
							-	User	: simethris
							-	Pass	: wsriphsimethris
							-	Method	: get_riph
							-	NPWP	: 831346234112000
							-	No.RIPH	: 0155/PP.240/D/03/2022
							
						-	Data yang ditampilkan sementara hanya pada data pokok di bawa ini.
					-->
					<a class="btn btn-sm btn-primary btn-block" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
						<i class="fas fa-sync"></i> Kirim
					</a>
				</div>
			</div>
		</div>
		<div class="row justify-content-center collapse" id="collapseExample">
			<div class="col-md-8 order-md-2 mb-4">
				<p class="lead">Berikut adalah data yang diperoleh dari aplikasi RIPH ONLINE berdasarkan informasi yang Anda berikan.</p>
				<h5 class="d-flex justify-content-between align-items-center mb-3">
					<span class="text-muted">RESULT</span>
					<span>
						<!-- status ini diperoleh dari WSDL field <keterangan></keterangan> RIPH-->
						Sync Status: <span class="badge badge-success badge-pill">Success</span>
					</span>
				</h5>
				<ul class="list-group mb-3 notification">
					<li>
						<a href="#" class="d-flex align-items-center">
							<span class="d-flex flex-column flex-1 ml-1">
								<span class="name">
									<h6>Perusahaan/Lembaga </h6>
									<!-- field ini diperoleh dari WSDL field <nama></nama> RIPH-->
									<span class="fw-500 position-absolute pos-top pos-right mt-1" id="nama_perusahaan">
										AGRA JAYA NUSANTARA
									</span>
								</span>
								<footer class="blockquote-footer text-left">
									<cite title="Source Title">Pemegang Rekomendasi Import Produk Hortikultura</cite>
								</footer>
							</span>
						</a>
					</li>
					<li>
						<a href="#" class="d-flex align-items-center">
							<div class="icon-stack display-4 mr-1 flex-shrink-0">
								<i class="fas fa-check icon-stack-1x opacity-100 color-success-500"></i>
							</div>
							<span class="d-flex flex-column flex-1 ml-1">
								<span class="name">
									<h6>NPWP </h6>
									<!-- field ini diperoleh dari WSDL field <npwp></npwp> RIPH-->
									<span class="fw-500 position-absolute pos-top pos-right mt-1">
										83.134.623.4-112.000
									</span>
								</span>
								<footer class="blockquote-footer text-left">
									<cite title="Source Title">Nomor Pokok Wajib Pajak</cite>
								</footer>
							</span>
						</a>
					</li>
					<li>
						<a href="#" class="d-flex align-items-center">
							<div class="icon-stack display-4 mr-1 flex-shrink-0">
								<i class="fas fa-check icon-stack-1x opacity-100 color-success-500"></i>
							</div>
							<span class="d-flex flex-column flex-1 ml-1">
								<span class="name">
									<h6>Nomor RIPH </h6>
									<!-- field ini diperoleh dari WSDL field <no_ijin></no_ijin> RIPH-->
									<span class="fw-500 position-absolute pos-top pos-right mt-1">
										0155/PP.240/D/03/2022
									</span>
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
									<!-- field ini diperoleh dari WSDL field <tgl_ijin></tgl_ijin> RIPH-->
									<span class="fw-500 position-absolute pos-top pos-right mt-1">
										2022
									</span>
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
									<!-- field ini diperoleh dari WSDL field <tgl_ijin></tgl_ijin> RIPH-->
									<span class="fw-500 position-absolute pos-top pos-right mt-1">
										2022-03-24
									</span>
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
									<!-- field ini diperoleh dari WSDL field <tgl_akhir></tgl_akhir> RIPH-->
									<span class="fw-500 position-absolute pos-top pos-right mt-1">
										2022-12-31
									</span>
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
									<!-- field ini diperoleh dari field <no_hs></no_hs> dan <nama_produk></nama_produk> pada WSDL RIPH-->
									<span class="fw-500 position-absolute pos-top pos-right mt-1">
										07032090 - - Bawang putih, segar atau dingin
									</span>
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
									<!-- field ini diperoleh dari akumulasi nilai seluruh field <volume></volume> pada WSDL RIPH-->
									<span class="fw-500 position-absolute pos-top pos-right mt-1">
										5.640
									</span>
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
									<h6>Volume Import (ton)</h6>
									<!-- field ini diperoleh dari field <volume_produksi></volume_produksi> pada WSDL RIPH atau dihitung menggunakan script formula-->
									<span class="fw-500 position-absolute pos-top pos-right mt-1">
										autocalculate
									</span>
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
									<!-- field ini diperoleh dari field <luas_wajib_tanam></luas_wajib_tanam> pada WSDL RIPH atau dihitung menggunakan script formula-->
									<span class="fw-500 position-absolute pos-top pos-right mt-1">
										autocalculate
									</span>
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
				<div class="custom-control custom-checkbox">
					<input type="checkbox" class="custom-control-input" id="correct-riph" required>
					<label class="custom-control-label text-danger" for="correct-riph">Data tersebut di atas adalah benar data RIPH dari Perusahaan/Lembaga kami.</label>
				</div>
				<div class="custom-control custom-checkbox">
					<input type="checkbox" class="custom-control-input" id="responsible" required>
					<label class="custom-control-label text-danger" for="responsible">Bertanggungjawab sepenuhnya atas informasi dan data yang kami sampaikan.</label>
				</div>
				<hr class="mb-4">
				<!-- field konfirmasi, pada db mysql, is_confirm bernilai true jika berisi "username" -->
				<span class="text-bold text-secondary">Confirmation</span>
				<div class="form-group">
					<div class="input-group">
						<input type="text" class="form-control form-control-sm" placeholder="type your username here">
						<div class="input-group-append">
							<a class="btn btn-sm btn-danger" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample"><i class="fal fa-times text-align-center mr-1"></i> Cancel</a>
						</div>
						<!--
							-	saat Submit ditekan seluruh data WSDL/JSON terkait disimpan di database
							-	redirect ke halaman "Successful: Your RIPH data has been pulled succesfully"
						-->
						<div class="input-group-append">
							<a href="#" class="btn btn-sm btn-primary" role="button" type="submit">
								<i class="fal fa-upload text-align-center mr-1"></i> Submit
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End Page Content -->
@endcan
@endsection

@section('scripts')
@parent
<script src="{{ asset('js/formplugins/inputmask/inputmask.bundle.js') }}"></script>
<script>
	$(document).ready(function()
	{
		$(":input").inputmask();
	});

</script>


@endsection