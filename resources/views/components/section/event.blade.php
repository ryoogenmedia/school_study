@props(['events' => []])
<div class="event-area bg-white section pt-120 pb-120">
    <div class="container">
        <!-- Section Title -->
        <div class="row">
            <div class="section-title col-xs-12 mb-80">
                <h3>EVENTS</h3>
            </div>
        </div>
        <div class="row mb--30">
            @foreach ($events->take(6) as $event )
            <!-- Event Item -->
            <div class="col-lg-4 col-md-6 col-12 mb-30">
                <div class="event-item">
                    <img src="img/event/3.jpg" alt="Image">
                    <span class="date">{{ \Illuminate\Support\Carbon::parse($event->schedule)->format('d') }}
                        <span>{{ \Illuminate\Support\Carbon::parse($event->schedule)->format('M') }}</span></span>
                    <div class="content">
                        <h3><a href="event-details.html">{{ $event->title }}</a></h3>
                        <div class="event-meta fix">
                            <span><i class="zmdi zmdi-time"></i>
                                {{\Illuminate\Support\Carbon::parse($event->start)->format('H:i a') }}
                                -
                                {{\Illuminate\Support\Carbon::parse($event->end)->format('H:i a') }}
                            </span>
                            <span><i class="zmdi zmdi-pin"></i> {{ Str::ucfirst($event->location) }}</span>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>