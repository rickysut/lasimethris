@extends ('layouts.admin')
@section ('style')
@endsection
@section('content')
<div class="" data-title="System Alert" data-intro="Ini adalah Panel yang berisi informasi atau pemberitahuan penting untuk Anda." data-step="1">@include('partials.sysalert')</div>

<!-- Page Content -->
<!-- 
	Apa yang ingin dicapai di halaman ini
	Halaman ini ditujukan agar Administrator dapat melihat secara cepat dan ringkas data-data RIPH (JSON).
-->
<div class="row">
	<div class="col-md-12">
		<div class="panel" id="panel-1">
			<div class="panel-hdr">
				<h2>
					DATA <span class="fw-300"><i>RIPH</i></span>
				</h2>
				<div class="panel-toolbar">
					@include('partials.globaltoolbar')
				</div>
			</div>
			<div class="panel-container show">
				<div class="panel-content">
					<div class="row d-flex">
						<div class="form-group col-md-6">
							<label class="form-label" for="no_riph">Nomor RIPH</label>
							<input type="text" id="no_riph" class="form-control" placeholder="" aria-label="no_riph" aria-describedby="no_riph" readonly>
						</div>
						<div class="form-group col-md-6">
							<label class="form-label" for="company">Perusahaan</label>
							<input type="text" id="company" class="form-control" placeholder="" aria-label="company" aria-describedby="company" readonly>
						</div>
						<div class="form-group col-md-4">
							<label class="form-label" for="tgl_terbit">Tanggal Terbit</label>
							<input type="text" id="tgl_terbit" class="form-control" placeholder="" aria-label="tgl_terbit" aria-describedby="tgl_terbit" readonly>
						</div>
						<div class="form-group col-md-4">
							<label class="form-label" for="tgl_akhir">Tanggal Akhir</label>
							<input type="text" id="tgl_akhir" class="form-control" placeholder="" aria-label="tgl_akhir" aria-describedby="tgl_akhir" readonly>
						</div>
						<div class="form-group col-md-4">
							<label class="form-label" for="volume">Volume Import</label>
							<input type="text" id="volume" class="form-control" placeholder="" aria-label="volume" aria-describedby="volume" readonly>
						</div>
						<div class="form-group col-md-4">
							<label class="form-label" for="tanam">Wajib Tanam</label>
							<input type="text" id="tanam" class="form-control" placeholder="" aria-label="tanam" aria-describedby="tanam" readonly>
						</div>
						<div class="form-group col-md-4">
							<label class="form-label" for="produksi">Wajib Produksi</label>
							<input type="text" id="produksi" class="form-control" placeholder="" aria-label="produksi" aria-describedby="produksi" readonly>
						</div>
						<div class="form-group col-md-4">
							<label class="form-label" for="lokasi">Lokasi Tanam</label>
							<input type="text" id="lokasi" class="form-control" placeholder="" aria-label="lokasi" aria-describedby="lokasi" readonly>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="panel" id="panel-2">
			<div class="panel-hdr">
				<h2>
					DATA <span class="fw-300"><i>Perbenihan (berlabel)</i></span>
				</h2>
				<div class="panel-toolbar">
					@include('partials.globaltoolbar')
				</div>
			</div>
			<div class="panel-container show">
				<div class="panel-content">
					<div class="row d-flex">
						<div class="form-group col-md-4">
							<label class="form-label" for="kebutuhan">Kebutuhan</label>
							<input type="text" id="kebutuhan" class="form-control" placeholder="" aria-label="kebutuhan" aria-describedby="kebutuhan" readonly>
						</div>
						<div class="form-group col-md-4">
							<label class="form-label" for="stok">Stok Mandiri</label>
							<input type="text" id="stok" class="form-control" placeholder="" aria-label="stok" aria-describedby="stok" readonly>
						</div>
						<div class="form-group col-md-4">
							<label class="form-label" for="tangkar">Dari Penangkar</label>
							<input type="text" id="tangkar" class="form-control" placeholder="" aria-label="tangkar" aria-describedby="tangkar" readonly>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="panel" id="panel-3">
			<div class="panel-hdr">
				<h2>
					Daftar <span class="fw-300"><i>Penangkar Benih Mitra</i></span>
				</h2>
				<div class="panel-toolbar">
					@include('partials.globaltoolbar')
				</div>
			</div>
			<div class="panel-container show">
				<div class="panel-content">
					<!-- datatable start -->
					<table id="dt-tangkar" class="table table-sm table-bordered table-hover table-striped w-100">
						<thead class="thead-dark">
							<tr>
								<th id="nama_usaha">Penangkar</th>
								<th id="varietas">Varietas</th>
								<th id="alamat">Alamat</th>
								<th id="pimpinan">Pimpinan</th>
								<th id="no_hp">No. Kontak</th>
								<th id="ketersediaan">Ketersediaan</th>
								<th id="tindakan">Tindakan</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>API Penangkar</td>
								<td>API</td>
								<td>API</td>
								<td>API</td>
								<td>API</td>
								<td>API</td>
								<td></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<div class="panel" id="panel-4">
			<div class="panel-hdr">
				<h2>
					DATA <span class="fw-300"><i>Pengendalian</i></span>
				</h2>
				<div class="panel-toolbar">
					@include('partials.globaltoolbar')
				</div>
			</div>
			<div class="panel-container show">
				<div class="panel-content">
					<div class="row d-flex">
						<div class="form-group col-md-3">
							<label class="form-label" for="organik">Pupuk Organik</label>
							<input type="text" id="organik" class="form-control" placeholder="" aria-label="organik" aria-describedby="organik" readonly>
						</div>
						<div class="form-group col-md-3">
							<label class="form-label" for="npk">Nitrogen Phosfor Kalium (NPK)</label>
							<input type="text" id="npk" class="form-control" placeholder="" aria-label="npk" aria-describedby="npk" readonly>
						</div>
						<div class="form-group col-md-3">
							<label class="form-label" for="dolomit">Dolomit</label>
							<input type="text" id="dolomit" class="form-control" placeholder="" aria-label="dolomit" aria-describedby="dolomit" readonly>
						</div>
						<div class="form-group col-md-3">
							<label class="form-label" for="za">Zwavelzure Amonium</label>
							<input type="text" id="za" class="form-control" placeholder="" aria-label="za" aria-describedby="za" readonly>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="panel" id="panel-5">
			<div class="panel-hdr">
				<h2>
					DATA <span class="fw-300"><i>Lainnya</i></span>
				</h2>
				<div class="panel-toolbar">
					@include('partials.globaltoolbar')
				</div>
			</div>
			<div class="panel-container show">
				<div class="panel-content">
					<div class="row d-flex">
						<div class="form-group col-md-6">
							<label class="form-label" for="saprodi">Saprodi Lainnya</label>
							<input type="text" id="saprodi" class="form-control" placeholder="" aria-label="saprodi" aria-describedby="saprodi" readonly>
						</div>
						<div class="form-group col-md-6">
							<label class="form-label" for="bagiHasil">Bagi Hasil</label>
							<input type="text" id="bagiHasil" class="form-control" placeholder="" aria-label="bagiHasil" aria-describedby="bagiHasil" readonly>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
<!-- @parent -->
<!-- start script for this page -->
@section('scripts')
<script src="{{ asset('/js/statistics/easypiechart/easypiechart.bundle.js') }}"></script>
@endsection