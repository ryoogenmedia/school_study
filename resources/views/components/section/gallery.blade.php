@props(['datas' => []])
<div class="gallery-area section bg-white pt-120 pb-0">
    {{ $slot }}
    <!-- Portfolio Wrapper -->
    <div class="container-fluid">
        <div class="row">
            @foreach ($datas as $data )

            <a href="{{ asset(Storage::url($data->url)) }}"
                class="gallery-item image-popup col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                <img src="{{ asset(Storage::url($data->url)) }}" alt="Image"></a>
            @endforeach
        </div>
    </div>
</div>