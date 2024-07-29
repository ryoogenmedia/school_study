@props(['datas' => []])
<div class="gallery-area section bg-white pt-120 pb-0">
    <div class="container">
        <!-- Section Title -->
        <div class="section-title mb-80">
            <h3>Galeri</h3>
        </div>
    </div>
    <!-- Portfolio Wrapper -->
    <div class="container-fluid">
        <div class="row">
            @foreach ($datas->take(8) as $data )

            <a href="{{ asset($data->url) }}"
                class="gallery-item image-popup col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                <img src="{{ $data->url }}" alt="Image"></a>
            @endforeach
        </div>
    </div>
</div>