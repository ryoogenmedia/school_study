<div class="row">
    <div class="col-12  ">

        <x-section.gallery :datas="$galleries">
            <div class="card mb-3">
                <div class="card-body row ">
                    <div class="col-9 text-center">
                        @error('image')
                        <code>{{ $message }}</code>
                        @enderror
                        <input type="file" wire:model='image' class="form-control" accept="image/*">
                    </div>
                    <div class="col-3 text-center">
                        <button class="btn btn-sm btn-primary " wire:click='create()'>Upload</button>
                    </div>
                </div>
            </div>
        </x-section.gallery>

    </div>
    @push('styles')
    <x-styles />
    @endpush

    @push('scripts')
    <x-scripts />
    @endpush
</div>