@props(['news' => []])
<div class="news-area bg-white section pt-120 pb-120">
    <div class="container">
        {{ $slot }}
        <div class="row mb--30">
            @foreach ($news as $item )
            <!-- News Item -->
            <div class="col-lg-4 col-md-6 col-12 mb-30">
                <div class="news-item">
                    <a href="{{ route('news.detail' , ['slug' => $item->slug]) }}" class="image"><img
                            src="{{ asset($item->thumbnail) }}" alt="Image"></a>
                    <div class="content">
                        <h3><a href="{{ route('news.detail' , ['slug' => $item->slug]) }}">{{ Str::ucfirst($item->title)
                                }}</a></h3>
                        <div class="news-meta fix">
                            <span><i class="zmdi zmdi-calendar-check"></i>{{ $item->created_at->format('d M Y')
                                }}</span>
                        </div>
                        <p class="truncate ">
                            {{ Str::limit($item->description, 100, '...') }}
                        </p>
                        <a href="{{ route('news.detail' , ['slug' => $item->slug]) }}">Lihat Detail</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>