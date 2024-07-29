@props(['datas' => []])
@if($datas)
<div class="slider-area section">
    <div id="hero-slider" class="slides">
        @foreach ($datas as $data )
        <img src="{{ $data->image }}" alt="Image" title="#slider-caption{{ $data->id }}" />
        @endforeach
    </div>
    @foreach ($datas as $data )
    <div id="slider-caption{{ $data->id }}" class="nivo-html-caption nivo-caption">
        <div class="container">
            <div class="row">
                <div class="hero-content col-md-12">
                    <h2 class="wow fadeInUp" data-wow-delay="0.5s">{{ Str::ucfirst($data->sub_title) }}</h2>
                    <h1 class="wow fadeInUp" data-wow-delay="1s">{{ Str::ucfirst($data->title) }}</h1>
                    <p class="wow fadeInUp" data-wow-delay="1.5s">{{ Str::ucfirst($data->description) }}</p>
                    <a class="btn wow fadeInUp" data-wow-delay="2s" href="{{ route('course.index') }}">View Courses</a>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endif