@extends ('layouts.global')
@section ('style')
<link rel="stylesheet" media="screen, print" href="{{ asset('/css/miscellaneous/lightgallery/lightgallery.bundle.css') }}">
@endsection
@section('content')
<div class="" data-title="System Alert" data-intro="Ini adalah Panel yang berisi informasi atau pemberitahuan penting untuk Anda." data-step="1">@include('partials.sysalert')</div>

<div class="row">
    <div class="col-md-12">
        <div id="panel-1" class="panel">
            <!--
				Yang ingin dicapai bagian ini adalah:
				Dokumentasi kegiatan wajib tanam-produksi.
			-->
            <div class="panel-hdr">
                <h2>
                    <i class="subheader-icon fal fa-images mr-1"></i>GALERI DOKUMENTASI
                </h2>
                <div class="panel-toolbar">

                </div>
            </div>
            <div class="alert alert-info border-0 mb-0">
            </div>
            <div class="panel-container show">
                <div class="panel-content">
                    <div id="js-lightgallery">
                        <a class="" href="/img/demo/gallery/1.jpg" data-sub-html="Keterangan foto">
                            <img class="img-responsive" src="/img/demo/gallery/thumb/1.jpg" alt="Judul foto">
                        </a>
                        <a class="" href="/img/demo/gallery/2.jpg" data-sub-html="Keterangan foto">
                            <img class="img-responsive" src="/img/demo/gallery/thumb/2.jpg" alt="Judul foto">
                        </a>
                        <a class="" href="/img/demo/gallery/3.jpg" data-sub-html="Keterangan foto">
                            <img class="img-responsive" src="/img/demo/gallery/thumb/3.jpg" alt="Judul foto">
                        </a>
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
<script src="{{ asset('/js/datagrid/datatables/datatables.bundle.js') }}"></script>
<script src="{{ asset('/js/datagrid/datatables/datatables.export.js') }}"></script>
<script src="{{ asset('/js/miscellaneous/lightgallery/lightgallery.bundle.js') }}"></script>
<!-- gallery -->
<script>
    $(document).ready(function() {
        var $initScope = $('#js-lightgallery');
        if ($initScope.length) {
            $initScope.justifiedGallery({
                border: -1,
                rowHeight: 150,
                margins: 8,
                waitThumbnailsLoad: true,
                randomize: false,
            }).on('jg.complete', function() {
                $initScope.lightGallery({
                    thumbnail: true,
                    animateThumb: true,
                    showThumbByDefault: true,
                });
            });
        };
        $initScope.on('onAfterOpen.lg', function(event) {
            $('body').addClass("overflow-hidden");
        });
        $initScope.on('onCloseAfter.lg', function(event) {
            $('body').removeClass("overflow-hidden");
        });
    });
</script>
@endsection