<div>
    <!-- Page Banner Area Start -->
    <div class="page-banner-area overlay section">
        <div class="container">
            <div class="row">
                <!-- Page Banner -->
                <div class="page-banner text-center col-xs-12">
                    <h1>Galeri Kami</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Page Banner Area -->
    @if ($galleries)
    <x-section.gallery :datas="$galleries" />
    @endif
</div>