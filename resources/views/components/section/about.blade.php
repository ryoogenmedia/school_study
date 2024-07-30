@props(['description'])
<div class="about-area section bg-white pt-120 pb-90">
    <div class="container">
        <div class="row align-items-center">
            <!-- About Image -->
            <div class="about-image col-md-5 col-xs-12 float-end mb-4 mb-md-0"><img src="{{ asset('img/about.jpg') }}"
                    alt="Image">
            </div>
            <!-- About Content -->
            <div class="about-content col-md-7 col-xs-12 mt-0">
                <h3>Tentang Kami </h3>
                <x-p :text="$description" />
                {{-- <a class="btn" href="about.html">Learn Now</a> --}}
            </div>
        </div>
    </div>
</div>