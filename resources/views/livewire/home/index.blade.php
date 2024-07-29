<div>
    <!-- Slider Area Start -->
    <x-section.slider :datas="$sliders" />
    <!-- End of Slider Area -->

    <!-- About Area Start -->
    @if ($meta)
    <x-section.about :description="$meta->about" />
    @endif
    <!-- End of About Area -->

    <!-- Course Area Start -->
    <x-section.jurusan :jurusans="$jurusans" />
    <!-- End of Course Area -->

    <!-- Funfact Area Start -->
    @if ($meta)
    <x-section.fun-act :teacher="$meta->total_teacher" :student="$meta->total_teacher" :course="$jurusans->count()" />
    @endif
    <!-- End of Funfact Area -->

    <!-- Gallery Area Start -->
    <x-section.gallery />
    <!-- End of Gallery Area -->

    <!-- Event Area Start -->
    <x-section.event />
    <!-- End of Event Area -->

    <!-- Testimonial Area Start -->
    <x-section.testimoni />
    <!-- End of Testimonial Area -->

    <!-- News Area Start -->
    <x-section.news />
    <!-- End of Latest News Area -->

</div>