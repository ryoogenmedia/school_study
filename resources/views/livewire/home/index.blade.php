<div>
    <!-- Slider Area Start -->
    @if ($sliders)
    <x-section.slider :datas="$sliders" />
    @endif
    <!-- End of Slider Area -->

    <!-- About Area Start -->
    @if ($meta)
    <x-section.about :description="$meta->about" />
    @endif
    <!-- End of About Area -->

    <!-- Course Area Start -->
    @if ($jurusans)
    <x-section.jurusan :jurusans="$jurusans">
        <!-- Section Title -->
        <div class="row">
            <div class="section-title text-center col-xs-12 mb-80">
                <h3>Jurusan</h3>
                <p></p>
            </div>
        </div>
    </x-section.jurusan>
    @endif
    <!-- End of Course Area -->

    <!-- Funfact Area Start -->
    @if ($meta)
    <x-section.fun-act :teacher="$meta->total_teacher" :student="$meta->total_teacher" :course="$jurusans->count()" />
    @endif
    <!-- End of Funfact Area -->

    <!-- Gallery Area Start -->
    @if ($galleries)
    <x-section.gallery :datas="$galleries->take(8)">
        <div class="container">
            <!-- Section Title -->
            <div class="section-title mb-80">
                <h3>Galeri</h3>
            </div>
        </div>
    </x-section.gallery>
    @endif
    <!-- End of Gallery Area -->

    <!-- Event Area Start -->
    @if ($events)
    <x-section.event :events="$events->take(6)">
        <!-- Section Title -->
        <div class="row">
            <div class="section-title col-xs-12 mb-80">
                <h3>EVENTS</h3>
            </div>
        </div>
    </x-section.event>
    @endif
    <!-- End of Event Area -->

    <!-- Testimonial Area Start -->
    @if ($testimonis)
    <x-section.testimoni :testimonis="$testimonis" />
    @endif
    <!-- End of Testimonial Area -->

    <!-- News Area Start -->
    @if ($news)
    <x-section.news :news="$news->take(3)">
        <!-- Section Title -->
        <div class="row">
            <div class="section-title col-xs-12 mb-80">
                <h3>Berita Terkini </h3>
            </div>
        </div>
    </x-section.news>
    @endif
    <!-- End of Latest News Area -->

</div>