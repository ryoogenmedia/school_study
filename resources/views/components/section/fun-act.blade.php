@props(['teacher' => 0 , 'student' => 0 , 'course' => 0])
<div class="funfact-area section pt-100 pb-50">
    <div class="container">
        <div class="row">
            <!-- Single Funfact -->
            <div class="col-md-4 col-sm-6 mb-50">
                <div class="single-funfact">
                    <h2><span class="counter">{{ $teacher }}</span></h2>
                    <h4>Total Pengajar</h4>
                </div>
            </div>
            <!-- Single Funfact -->
            <div class="col-md-4 col-sm-6 mb-50">
                <div class="single-funfact">
                    <h2><span class="counter">{{ $student }}</span></h2>
                    <h4>Total Pelajar</h4>
                </div>
            </div>
            <!-- Single Funfact -->
            <div class="col-md-4 col-sm-6 mb-50">
                <div class="single-funfact">
                    <h2><span class="counter">{{ $course }}</span></h2>
                    <h4>Jurusan</h4>
                </div>
            </div>
        </div>
    </div>
</div>