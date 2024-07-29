<header class="header-area section ">
    <!-- Header Top -->
    <div class="header-top section">
        <div class="container">
            <div class="row">
                <!-- Header Top Left -->
                <div class="header-top-left text-start col-7">
                    <p>Have any question? +968 547856 254</p>
                </div>
                <!-- Header Top Right -->
                <div class="header-top-right text-end col-5">
                    <ul>
                        <li><a href="#">Kontak Kami</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Header Bottom -->
    <div class="header-bottom bg-white sticker section sticker">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <!-- Header Logo -->
                    <div class="header-logo float-start">
                        <a href="{{ route('index') }}"><img src="img/logo/logo.png" alt="logo"></a>
                    </div>
                    <!-- Main Menu -->
                    <div class="main-menu float-end hidden-xs">
                        <nav>
                            <ul>

                                @foreach (config('header') as $link)
                                <li class="
                                @if (Route::currentRouteName() == $link['url'])
                                    active
                                @endif
                                "><a href="{{ route($link['url']) }}">{{ $link['title'] }}</a></li>
                                @endforeach
                            </ul>
                        </nav>
                    </div>
                    <!-- Mobile Menu -->
                    <div class="mobile-menu"></div>
                </div>
            </div>
        </div>
    </div>
</header>