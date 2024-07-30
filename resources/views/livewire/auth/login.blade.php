<form class=" " wire:submit='login()'>
    <div class="text-center">
        <div class="mb-5">
            <h1 class="display-5">Sign in Admin</h1>
        </div>
    </div>

    <!-- Form -->
    <div class="mb-4">

        </label>
        <input type="email" class="form-control form-control-lg" wire:model='form.email' tabindex="1"
            placeholder="Email Address" aria-label="email@address.com" required>
        <span>
            @error('form.email')
            <code>{{ $message }}</code>
            @enderror
        </span>
    </div>
    <!-- End Form -->

    <!-- Form -->
    <div class="mb-4">
        {{-- <label class="form-label w-100" for="signupSrPassword" tabindex="0">
            <span class="d-flex justify-content-between align-items-center">
                <span>Password</span>
                <a class="form-label-link mb-0" href="authentication-reset-password-basic.html">Forgot Password?</a>
            </span>
        </label> --}}


        <div class="input-group input-group-merge" data-hs-validation-validate-class>
            <input type="{{ $showPassword ? 'text' : 'password' }}" wire:model='form.password'
                class="js-toggle-password form-control form-control-lg" placeholder="Password" required>
            <span id="changePassTarget" class="input-group-append input-group-text  " style="cursor: pointer"
                wire:click='toggle()'>
                @if ($showPassword)
                <i id="changePassIcon" class="bi-eye"></i>
                @else
                <i id="changePassIcon" class="bi-eye-slash"></i>
                @endif
            </span>
        </div>

        <span>
            @error('form.password')
            <code>{{ $message }}</code>
            @enderror
        </span>
    </div>
    <!-- End Form -->

    <!-- Form Check -->
    <div class="form-check mb-4">
        <input class="form-check-input" type="checkbox" id="termsCheckbox" wire:model='form.remember'>
        <label class="form-check-label" for="termsCheckbox">
            Remember me
        </label>
    </div>
    <!-- End Form Check -->

    <div class="d-grid">
        <button type="submit" class="btn btn-primary btn-lg" wire:loading.attr='disabled'> Sign in</button>
    </div>
</form>