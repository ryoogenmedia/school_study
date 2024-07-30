<div>
    <!-- Page Banner Area Start -->
    <div class="page-banner-area overlay section">
        <div class="container">
            <div class="row">
                <!-- Page Banner -->
                <div class="page-banner text-center col-xs-12">
                    <h1>Berita Terkini</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Page Banner Area -->

    <!-- News Area Start -->
    <div class="news-area bg-white section pt-120 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-xl-9 col-lg-8 col-12 mb-20">
                    <!-- Single News Details -->
                    <div class="single-news-details">
                        <img class="mb-4" src="{{ asset(Storage::url($new->thumbnail)) }}" alt="Image">
                        <div class="content">
                            <h3 class="title">{{ Str::ucfirst($new->title) }}</h3>
                            <div class="news-meta fix">
                                <span><i class="zmdi zmdi-calendar-check"></i>{{ $new->created_at->format('d M y')
                                    }}</span>
                            </div>
                            <p>
                                {{ $new->description }}
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Sidebar Wrapper -->
                <div class="col-xl-3 col-lg-4 col-12">
                    <!-- Recent News -->
                    <div class="single-sidebar">
                        <h4 class="title">Berita Terbaru</h4>
                        <div class="recent-news">
                            @foreach ($news->take(5) as $item )
                            <div class="recent-news-item">
                                <a class="image" href="{{ route('news.detail' , ['slug' => $item->slug]) }}"><img
                                        src="{{ asset(Storage::url($item->thumbnail)) }}" alt="Image"></a>
                                <div class="content">
                                    <h5><a href="{{ route('news.detail' , ['slug' => $item->slug]) }}">
                                            {{ Str::ucfirst($item->title) }}
                                        </a></h5>
                                    <p>{{ Str::limit($item->description, 70, '...') }}</p>
                                </div>
                            </div>
                            <br />
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End of News Area-->
</div>