@props(['testimonis' => []])
<div class="testimonial-area overlay section pt-100 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-sm-10 col-12 m-auto">
                <!-- Testimonial Slider -->
                <div class="testimonial-slider text-center">
                    @foreach ($testimonis as $testimoni )
                    <!-- Single Testimonial -->
                    <div class="sin-testimonial">
                        <p>
                            {{ $testimoni->testimoni }}
                        </p>
                        <h4>{{ $testimoni->name }}</h4>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>