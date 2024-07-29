<div>
    <!-- Page Banner Area Start -->
    <div class="page-banner-area overlay section">
        <div class="container">
            <div class="row">
                <!-- Page Banner -->
                <div class="page-banner text-center col-xs-12">
                    <h1>Kontak Kami</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Page Banner Area -->

    <!-- Contact Area Start -->
    @if ($meta)

    <div class="contact-area bg-white section pt-120 pb-70">
        <div class="container">
            <div class="contact-wrapper row">
                <div class="col-md-4 offset-lg-1 col-sm-5 col-xs-12 mb-50">
                    <!-- Contact Info -->
                    <h4>Kontak Info</h4>
                    <div class="contact-info">
                        <p><i class="zmdi zmdi-phone"></i><span>{{ $meta->phone }}</span></p>
                        <p><i class="zmdi zmdi-email"></i><span>{{ $meta->email }}</span></p>
                        <p><i class="zmdi zmdi-pin"></i><span>{{ $meta->address }}</span></p>
                    </div>
                    <!-- Contact Social -->
                    @if ($socialMedias)

                    <h4>social media</h4>
                    <div class="contact-social fix">
                        @if ($socialMedias)
                        @foreach ($socialMedias as $social )
                        <a target="_blank" rel="noopener" href="https://{{ $social->url }}"><i
                                class="{{ $social->icon }}"></i></a>
                        @endforeach
                        @endif
                    </div>
                    @endif
                </div>
                <!-- Contact Form -->
                <div class="col-lg-6 col-md-8 col-sm-7 col-xs-12">
                    <h4>send your massage</h4>
                    <div id="contact-form" class="contact-form">
                        <div class="row">

                            <div class="col-md-6 col-12 mb-20">
                                @error('form.name')
                                <code>{{ $message }}</code>
                                @enderror
                                <input type="text" id="name" wire:model='form.name' placeholder="Name">
                            </div>

                            <div class="col-md-6 col-12 mb-20">
                                @error('form.email')
                                <code>{{ $message }}</code>
                                @enderror
                                <input type="email" id="name" wire:model='form.email' placeholder="Email">
                            </div>
                            <div class="col-12 mb-20">
                                @error('form.message')
                                <code>{{ $message }}</code>
                                @enderror
                                <textarea wire:model='form.message' id="message" cols="30" rows="10"
                                    placeholder="Message"></textarea>
                            </div>
                            <div class="col-12">
                                <button class="btn-submit" type="submit" wire:click='sendMessage()'>Submit</button>
                            </div>
                        </div>
                    </div>
                    <div class="form-message"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Contact Area -->
    @endif
</div>