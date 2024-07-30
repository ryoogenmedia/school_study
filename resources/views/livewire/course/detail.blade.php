<div>
    <!-- Page Banner Area Start -->
    <div class="page-banner-area overlay section">
        <div class="container">
            <div class="row">
                <!-- Page Banner -->
                <div class="page-banner text-center col-xs-12">
                    <h1>{{ $jurusan->title }}</h1>
                    <!-- Breadcrumb -->
                </div>
            </div>
        </div>
    </div>
    <!-- End of Page Banner Area -->

    <!-- Course Area Start -->
    <div class="course-area bg-white section pt-120 pb-70">
        <div class="container">
            <div class="row">

                <div class="col-xl-9 col-lg-8 col-12 mb-20">
                    <!-- Single Course Details -->
                    <div class="single-course-details">
                        <div class="image mb-4"><img alt="Image" src="{{ asset(Storage::url($jurusan->thumbnail)) }}">
                        </div>
                        <div class="content">
                            <h4 class="title">{{ Str::ucfirst($jurusan->title) }}</h4>
                            <div class="course-info">
                                <span>{{ $jurusan->sub_title }}</span>
                            </div>
                            <div class="course-text-content">
                                <x-p :text="$jurusan->description" />
                            </div>
                        </div>
                    </div>
                    <!-- Comment -->

                </div>
                <!-- Sidebar Wrapper -->
                <div class="col-xl-3 col-lg-4 col-12">
                    <!-- Recent Event -->
                    <div class="single-sidebar">
                        <h4>Jurusan </h4>
                        <div class="recent-event">
                            @foreach ($jurusans as $item )
                            <div class="recent-event-item">
                                <a class="image" href="{{ route('course.detail' , ['slug' => $item->slug]) }}"><img
                                        src="{{ asset(Storage::url($item->thumbnail)) }}" alt="Image"></a>
                                <div class="content">
                                    <h5><a href="{{ route('course.detail' , ['slug' => $item->slug]) }}">
                                            {{ Str::ucfirst($item->title) }}
                                        </a></h5>
                                </div>
                            </div>
                            <br>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End of Course Area-->
</div>