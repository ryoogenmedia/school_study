<div class="row">
    <div class="col-lg-3">
        <!-- Navbar -->
        <div class="navbar-expand-lg navbar-vertical mb-3 mb-lg-5" wire:ignore>
            <div class="d-grid">
                <button type="button" class="navbar-toggler btn btn-white mb-3" data-bs-toggle="collapse"
                    data-bs-target="#navbarVerticalNavMenu" aria-label="Toggle navigation" aria-expanded="false"
                    aria-controls="navbarVerticalNavMenu">
                    <span class="d-flex justify-content-between align-items-center">
                        <span class="text-dark">Menu</span>

                        <span class="navbar-toggler-default">
                            <i class="bi-list"></i>
                        </span>

                        <span class="navbar-toggler-toggled">
                            <i class="bi-x"></i>
                        </span>
                    </span>
                </button>
            </div>
            <div id="navbarVerticalNavMenu" class="collapse navbar-collapse" style="">
                <ul id="navbarSettings"
                    class="js-sticky-block js-scrollspy card card-navbar-nav nav nav-tabs nav-lg nav-vertical hs-kill-sticky"
                    data-hs-sticky-block-options="{
                     &quot;parentSelector&quot;: &quot;#navbarVerticalNavMenu&quot;,
                     &quot;targetSelector&quot;: &quot;#header&quot;,
                     &quot;breakpoint&quot;: &quot;lg&quot;,
                     &quot;startPoint&quot;: &quot;#navbarVerticalNavMenu&quot;,
                     &quot;endPoint&quot;: &quot;#stickyBlockEndPoint&quot;,
                     &quot;stickyOffsetTop&quot;: 20
                   }" style="">

                    @foreach ($menus as $menu )
                    <li class="nav-item">
                        <a class="nav-link" href="#{{ $menu['target'] }}">
                            {{ Str::ucfirst($menu['label']) }}
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <!-- End Navbar -->
    </div>

    <div class="col-lg-9">
        <div class="d-grid gap-3 gap-lg-5">

            @if ($metas)

            <!-- Card -->
            <div class="card" id="basicInfo">
                <div class="card-header">
                    <h2 class="card-title h4">Basic Info</h2>
                </div>

                <!-- Body -->
                <div class="card-body">
                    <!-- Form -->
                    <form wire:submit='update()'>
                        @foreach ($form->except(['description' , 'about']) as $key => $value )

                        <!-- Form -->
                        <div class="row mb-4" wire:key='{{ $key }}'>
                            <label for="emailLabel" class="col-sm-3 col-form-label form-label">{{ Str::ucfirst($key)
                                }}</label>

                            <div class="col-sm-9">
                                <input type="text" class="form-control" placeholder="{{ Str::ucfirst($key) }}"
                                    wire:model='form.{{ $key }}'>
                                @error('form.'.$key)

                                <span>
                                    <code>{{ $message }}</code>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <!-- End Form -->
                        @endforeach
                        <!-- Form -->
                        <div class="row mb-4">
                            <label for="emailLabel" class="col-sm-3 col-form-label form-label">Description</label>

                            <div class="col-sm-9">
                                <textarea type="text" class="form-control" wire:model='form.description'
                                    placeholder="Deskripsi Website" rows="10">
                                </textarea>
                                @error('form.description')
                                <code>{{ $message }}</code>
                                @enderror
                            </div>
                        </div>

                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary" wire:loading.attr='disabled'>Save
                                changes</button>
                        </div>
                    </form>
                    <!-- End Form -->
                </div>
                <!-- End Body -->
            </div>
            <!-- End Card -->
            <div class="card" id="about">
                <div class="card-header">
                    <h2 class="card-title h4">About Info</h2>
                </div>

                <!-- Body -->
                <div class="card-body">
                    <!-- Form -->
                    <form wire:submit='update()'>
                        <!-- Form -->
                        <div class="row mb-4">
                            <label for="emailLabel" class="col-sm-3 col-form-label form-label">About </label>

                            <div class="col-sm-9">
                                <textarea type="text" class="form-control" wire:model='form.about'
                                    placeholder="About Website" rows="10">
                                            </textarea>
                                @error('form.about')
                                <code>{{ $message }}</code>
                                @enderror
                            </div>
                        </div>

                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary" wire:loading.attr='disabled'>Save
                                changes</button>
                        </div>
                    </form>
                    <!-- End Form -->
                </div>
                <!-- End Body -->
            </div>
            <!-- End Card -->
            @endif
        </div>

        <!-- Sticky Block End Point -->
        <div class="d-grid gap-3 gap-lg-5 mt-5">
            <!-- Card -->
            <div class="card" id="socialMedia">
                <div class="card-header">
                    <h2 class="card-title h4">Social Media</h2>
                </div>

                <!-- Body -->
                <div class="card-body">
                    @foreach ($socialMedias as $socialMedia )

                    <div class="mb-3" wire:key='{{ $socialMedia->id }}'>
                        <label for="inputGroupMergeEmail" class="form-label">{{ $socialMedia->name }}</label>

                        <div class="input-group input-group-merge">
                            <div class="input-group-prepend input-group-text">
                                <i class="{{ $socialMedia->icon }}"></i>
                            </div>
                            <input type="text" class="form-control" value="{{ $socialMedia->url }}" readonly>
                            <div class="btn-group">
                                <button class="btn btn-sm btn-danger"
                                    wire:click='remove({{ $socialMedia->id }})'>Remove</button>
                            </div>
                        </div>
                    </div>
                    @endforeach

                    <div class="mb-3">
                        <h3>Add Social Media</h3>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-6">
                            <label class="form-label">Name</label>

                            <div class="input-group input-group-merge">
                                <input type="text" class="form-control" required wire:model='social.name'
                                    placeholder="Name">
                            </div>
                            @error('social.name')
                            <code>{{ $message }}</code>
                            @enderror
                        </div>
                        <div class="mb-3 col-6">
                            <label class="form-label">Icon <span>Gunakan </span>
                                <a href="https://blade-ui-kit.com/blade-icons?set=3" target="_blank" class="text-info ">
                                    Blade Icon Bootstrap
                                </a>
                            </label>
                            <div class="input-group input-group-merge">
                                @if ($social->icon)
                                <div class="input-group-prepend input-group-text">
                                    <i class="{{ $social->icon }}"></i>
                                </div>
                                @endif
                                <input type="text" class="form-control" wire:model.live='social.icon'
                                    placeholder="contoh bi-facebook">

                            </div>
                            @error('social.icon')
                            <code>{{ $message }}</code>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 ">
                        <label class="form-label">Url</label>

                        <div class="input-group input-group-merge">
                            <input type="text" class="form-control" required wire:model='social.url'
                                placeholder="Url Social Media https://">
                        </div>
                        @error('social.url')
                        <code>{{ $message }}</code>
                        @enderror
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="button" class="btn btn-primary" wire:loading.attr='disabled'
                            wire:click='addSocial()'>
                            Add</button>
                    </div>
                </div>
                <!-- End Body -->
            </div>
        </div>

        <!-- Sticky Block End Point -->
        <div id="stickyBlockEndPoint"></div>
    </div>
</div>