@props(['jurusans' => []])
<div class="course-area bg-gray section pt-120 pb-120">
    <div class="container">
        {{ $slot }}
        <!-- Course Wrapper -->
        <div class="course-wrapper row mb--30">
            @if($jurusans)
            @foreach ($jurusans as $jurusan )
            <!-- Course Item -->
            <div class="col-lg-4 col-md-6 col-sm-12 mb-30">
                <div class="course-item">
                    <a class="image" href="{{ route('course.detail' ,['slug' => $jurusan->slug]) }}"><img
                            src="{{ asset(Storage::url($jurusan->thumbnail)) }}" alt="Image"></a>
                    <div class="content">
                        <h4 class="title"><a href="{{ route('course.detail' ,['slug' => $jurusan->slug]) }}">{{
                                $jurusan->title }}</a></h4>
                        <div class="course-info">
                            <a href="{{ route('course.detail' ,['slug' => $jurusan->slug]) }}">{{ $jurusan->sub_title
                                }}</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            @endif
        </div>

    </div>
</div>