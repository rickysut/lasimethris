@extends ('layouts.global')
@section ('style')
<link rel="stylesheet" media="screen, print" href="/css/page-invoice.css">
@endsection
@section('content')
<div class="container">
    <div data-size="A4">
        <div class="row">
            <div class="col-sm-12">
                <div class="d-flex align-items-center mb-0">
                    <img class="mr-2" src="/img/favicon/favicon.png" alt="Simethris" aria-roledescription="logo" style="width: 70px">
                    <div class="keep-print-font mb-0 flex-1 position-relative">
                        <h5 class="text-center fw-500 mb-0">KEMENTERIAN PERTANIAN</h3>
                            <h3 class="text-center fw-700 mb-0">DIREKTORAT JENDERAL HORTIKULTURA</h3>
                            <h6 class="text-muted mb-0 fs-xs text-center">
                                Jalan AUP No. 3 Pasar Minggu - Jakarta Selatan 12520<br>
                                <div class="row justify-content-center small mt-2">
                                    <span class="mr-2">
                                        TELP/FAX (021) 780665 - 7817611
                                    </span>
                                    <span class="mr-2">
                                        EMAIL: ditsayurobat@pertanian.go.id
                                    </span>
                                    <span>
                                        WEBSITE http://ditsayur.hortikultura.pertanian.go.id
                                    </span>
                                </div>
                            </h6>
                    </div>
                </div>
                <hr class="solid mb-0 mt-1">
                <hr class="thick mt-1">
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 d-flex">
                <div class="table-responsive">
                    <table class="table table-clean table-sm align-self-end">
                        <tbody>
                            <tr>
                                <td>
                                    <strong>Nomor</strong>
                                </td>
                                <td>
                                    : .../.../.../...
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <strong>Lampiran</strong>
                                </td>
                                <td>
                                    : -
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <strong>Hal</strong>
                                </td>
                                <td>
                                    : Keterangan Telah Melaksanakan Wajib Tanam dan Wajib Produksi
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-sm-6 ml-sm-auto">
                <div class="table-responsive">
                    <table class="table table-sm table-clean text-right">
                        <tbody>
                            <tr>
                                <td>
                                    <strong>dd/mmmm/yyyy</strong>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="row fs-xl">
            <div class="col-sm-12">
                Kepada Yth.<br>
                Pimpinan<br>
                <strong>CV. Pandan Dua Delapan</strong><br>
                di<br>
                Tempat<br>
                <p class="justify-align-stretch mt-5">
                    Berdasarkan hasil evaluasi dan validasi laporan realisasi tanam dan produksi, dengan ini kami menyatakan:
                </p>
                <dl class="row">
                    <dd class="col-sm-3">Nama Perusahaan</dd>
                    <dt class="col-sm-9">: [Nama Perusahaan]</dt>
                    <dd class="col-sm-3">Nomor RIPH</dd>
                    <dt class="col-sm-9">: [Nomor RIPH]</dt>
                    <dd class="col-sm-3">Wajib Tanam</dd>
                    <dt class="col-sm-9">
                        <dl class="row">
                            <dd class="col-sm-3">Beban</dd>
                            <dt class="col-sm-9">: [...] ha;</dt>
                            <dd class="col-sm-3">Realisasi</dd>
                            <dt class="col-sm-9">: [...] ha</dt>
                        </dl>
                    </dt>
                    <dd class="col-sm-3">Wajib Produksi</dd>
                    <dt class="col-sm-9">
                        <dl class="row">
                            <dd class="col-sm-3">Beban</dd>
                            <dt class="col-sm-9">: [...] ton;</dt>
                            <dd class="col-sm-3">Realisasi</dd>
                            <dt class="col-sm-9">: [...] ton</dt>
                        </dl>
                    </dt>
                </dl>
                <p class="justify-align-stretch">
                    Telah melaksanakan kewajiban pengembanga bawang putih di dalam negeri sebagaimana ketentuan dalam Permentan 39 tahun 2019 dan perubahannya.
                </p>
                <p class="justify-align-stretch mt-3">
                    Atas perhatian dan kerjasama Saudara disampaikan terima kasih.
                </p>

                <dl class="row mt-5 align-items-center">
                    <dd class="col-sm-7"><img id="barcode" alt="" class="border-bottom border-top border-left border-right height-10 mt-1 hidden-md-down" src="/img/qrcode/qrcode_sample.svg"></dd>
                    <dd class="col-sm-5">
                        <div class="text-dark">
                            Direktur,<br><br>Ttd.<br><br>
                            <u><strong>[Nama Direktur]</strong></u><br>
                            NIP. .....
                        </div>
                    </dd>
                </dl>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <ul><u>Tembusan</u>
                    <li>Direktur Jenderal Hortikultura</li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
<!-- @parent -->
<!-- start script for this page -->
@section('scripts')

@endsection