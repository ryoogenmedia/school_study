<!-- Footer Top Area Start -->
<div class="footer-top-area section pt-100 pb-0 pb-xl-4">
    <div class="container">
        <div class="row">
            <!-- Footer Widget -->
            <div class="footer-widget col-lg-3 col-md-6 col-12 mb-50">
                <a class="footer-logo" href="index.html"><img src="{{ asset('img/logo/footer.png') }}" alt="Image">
                </a>
                @if ($meta)
                <p>
                    {{ $meta->description }}
                </p>
                @endif
                <div class="footer-social">
                    @if ($socialMedias)
                    @foreach ($socialMedias as $social )
                    <a target="_blank" rel="noopener" href="https://{{ $social->url }}"><i
                            class="{{ $social->icon }}"></i></a>
                    @endforeach
                    @endif
                </div>
            </div>
            <!-- Footer Widget -->
            <div class="footer-widget col-lg-3 col-md-6 col-12 mb-50">
                <h3>GET IN TOUCH</h3>
                <ul>
                    @if ($meta)
                    <li><i class="fa fa-phone"></i> <span>{{ $meta->phone }}</span></li>
                    <li><i class="fa fa-envelope"></i> <span>{{ $meta->email }}</span></li>
                    <li><i class="fa fa-map-marker"></i> <span>{{ $meta->address }}</span></li>
                    @endif
                </ul>
            </div>
            <!-- Footer Widget -->
            <div class="footer-widget col-lg-3 col-md-6 col-12 mb-50">
                <h3>Useful Links</h3>
                <ul>
                    @foreach (config('header') as $link )
                    <li><a href="{{ route($link['url']) }}">{{ $link['title'] }}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
<!--End of Footer Top Area-->