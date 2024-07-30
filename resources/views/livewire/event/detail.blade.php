<div>
    <!-- Page Banner Area Start -->
    <div class="page-banner-area overlay section">
        <div class="container">
            <div class="row">
                <!-- Page Banner -->
                <div class="page-banner text-center col-xs-12">
                    <h1>Event Details</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Page Banner Area -->

    <!-- Event Area Start -->
    <div class="event-area bg-white section pt-120 pb-70">
        <div class="container">
            <div class="row">

                <div class="col-12 mb-20">
                    <!-- Single Event Details -->
                    <div class="single-event-details">
                        <img src="{{ asset(Storage::url($event->thumbnail)) }}" alt="Image">
                        <span class="date">{{ \Illuminate\Support\Carbon::parse($event->schedule)->format('d') }}
                            <span>{{ \Illuminate\Support\Carbon::parse($event->schedule)->format('M') }}</span></span>
                        <div class="content">
                            <h3>{{ Str::ucfirst($event->title) }}</h3>
                            <div class="event-meta fix">
                                <span><i class="zmdi zmdi-time"></i>
                                    {{\Illuminate\Support\Carbon::parse($event->start)->format('H:i a') }}
                                    -
                                    {{\Illuminate\Support\Carbon::parse($event->end)->format('H:i a') }}
                                </span>
                                <span><i class="zmdi zmdi-pin"></i> {{ Str::ucfirst($event->location) }}</span>
                            </div>
                            <p>
                                {{ $event->description }}
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!--End of Event Area-->
</div>