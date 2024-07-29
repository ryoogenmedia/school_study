<div>
    <!-- Page Banner Area Start -->
    <div class="page-banner-area overlay section">
        <div class="container">
            <div class="row">
                <!-- Page Banner -->
                <div class="page-banner text-center col-xs-12">
                    <h1>Jurusan</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Page Banner Area -->
    @if ($jurusans)
    <x-section.jurusan :jurusans="$jurusans" />
    @endif
</div>