@props(['news' => []])
<div class="news-area bg-white section pt-120 pb-120">
    <div class="container">
        <!-- Section Title -->
        <div class="row">
            <div class="section-title col-xs-12 mb-80">
                <h3>Berita Terkini </h3>
            </div>
        </div>
        <div class="row mb--30">
            @foreach ($news as $item )
            <!-- News Item -->
            <div class="col-lg-4 col-md-6 col-12 mb-30">
                <div class="news-item">
                    <a href="news-details.html" class="image"><img src="{{ asset($item->thumbnail) }}" alt="Image"></a>
                    <div class="content">
                        <h3><a href="news-details.html">{{ Str::ucfirst($item->title) }}</a></h3>
                        <div class="news-meta fix">
                            <span><i class="zmdi zmdi-calendar-check"></i>{{ $item->created_at->format('d M Y')
                                }}</span>
                        </div>
                        <p class="truncate ">
                            {{ Str::limit($item->description, 100, '...') }}
                        </p>
                        <a href="news-details.html">LEARN Now</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>