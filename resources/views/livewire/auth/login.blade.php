<form class="row g-3 " wire:submit='login()'>

    <div class="col-12">
        <label for="yourUsername" class="form-label">Email</label>
        <input type="text" wire:model='form.email' class="form-control" id="yourUsername" required>
        <div class="invalid-feedback">Please enter your email.</div>
    </div>

    <div class="col-12">
        <label for="yourPassword" class="form-label">Password</label>
        <input type="password" wire:model='form.password' class="form-control" id="yourPassword" required>
        <div class="invalid-feedback">Please enter your password!</div>
    </div>

    <div class="col-12">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" wire:model='form.remember' id="rememberMe">
            <label class="form-check-label" for="rememberMe">Remember me</label>
        </div>
    </div>
    <div class="col-12">
        <button class="btn btn-primary w-100" type="submit" wire:loading.attr='disabled'>Login</button>
    </div>
</form>