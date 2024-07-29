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
    <x-section.jurusan :jurusans="$jurusans" />
    @endif
    <!-- End of Course Area -->

    <!-- Funfact Area Start -->
    @if ($meta)
    <x-section.fun-act :teacher="$meta->total_teacher" :student="$meta->total_teacher" :course="$jurusans->count()" />
    @endif
    <!-- End of Funfact Area -->

    <!-- Gallery Area Start -->
    @if ($galleries)
    <x-section.gallery :datas="$galleries" />
    @endif
    <!-- End of Gallery Area -->

    <!-- Event Area Start -->
    @if ($events)
    <x-section.event :events="$events" />
    @endif
    <!-- End of Event Area -->

    <!-- Testimonial Area Start -->
    @if ($testimonis)
    <x-section.testimoni :testimonis="$testimonis" />
    @endif
    <!-- End of Testimonial Area -->

    <!-- News Area Start -->
    @if ($news)
    <x-section.news :news="$news" />
    @endif
    <!-- End of Latest News Area -->

</div>