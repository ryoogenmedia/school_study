<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        @foreach (config('aside') as $side )
        <li class="nav-item ">
            <a class="nav-link collapsed " href="{{ route($side['url']) }}">
                <i class="{{ $side['icon'] }}"></i>
                <span>{{ $side['title'] }}</span>
            </a>
        </li>
        @endforeach

        <!-- End Dashboard Nav -->

    </ul>

</aside>