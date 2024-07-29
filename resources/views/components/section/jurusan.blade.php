@props(['jurusans' => []])
<div class="course-area bg-gray section pt-120 pb-120">
    <div class="container">
        <!-- Section Title -->
        <div class="row">
            <div class="section-title text-center col-xs-12 mb-80">
                <h3>Jurusan</h3>
                <p></p>
            </div>
        </div>
        <!-- Course Wrapper -->
        <div class="course-wrapper row mb--30">
            @if($jurusans)
            @foreach ($jurusans as $jurusan )
            <!-- Course Item -->
            <div class="col-lg-4 col-md-6 col-sm-12 mb-30">
                <div class="course-item">
                    <a class="image" href="{{ $jurusan->slug }}"><img src="{{ asset($jurusan->thumbnail) }}"
                            alt="Image"></a>
                    <div class="content">
                        <h4 class="title"><a href="{{ $jurusan->slug }}">{{ $jurusan->title }}</a></h4>
                        <div class="course-info">
                            <a href="{{ $jurusan->slug }}">{{ $jurusan->sub_title }}</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            @endif
        </div>

    </div>
</div>