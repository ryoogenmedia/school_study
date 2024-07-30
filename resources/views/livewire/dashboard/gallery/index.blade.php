<div class="row">
    <div class="col-12  ">
        <div class="gallery-area section bg-white pt-120 pb-0">
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
            <!-- Portfolio Wrapper -->
            <div class="container-fluid">
                <div class="row">
                    @foreach ($galleries as $data )
                    <a href="{{ asset(Storage::url($data->url)) }}"
                        class="gallery-item image-popup col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-2 ">
                        <img src="{{ asset(Storage::url($data->url)) }}" alt="Image">
                    </a>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-2 ">
                        <button class="btn btn-sm btn-danger" wire:click='delete({{ $data->id }})'>Delete</button>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>


    </div>
    @push('styles')
    <x-styles />
    @endpush

    @push('scripts')
    <x-scripts />
    @endpush
</div>