<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h2>Create New Jurusan</h2>
            </div>
            <div class="card-body">
                @if ($thumbnail)
                <div class="d-flex justify-content-center align-items-center ">
                    <img class="rounded" src="{{ $thumbnail->temporaryUrl() }}" width="50%" height="50%"
                        alt="Image Description">
                </div>
                @endif
                <form wire:submit='create()'>
                    @foreach ($form->except(['thumbnail' , 'description' ]) as $key => $value )
                    <div class="mb-3">
                        <label class="form-label" for="input{{ $key }}">{{ Str::ucfirst($key == 'sub_title' ? 'Sub
                            Title' : $key) }}</label>
                        <input type="text" id="input{{ $key }}" class="form-control"
                            placeholder="{{ $key == 'sub_title' ? 'Singkatan' : $key}}"
                            wire:model.lazy='form.{{ $key }}'>
                        @error('form.'.$key)
                        <code>{{ $message }}</code>
                        @enderror
                    </div>
                    @endforeach
                    <div class="mb-3">
                        <label class="form-label" for="inputThumbail">Thumbnail</label>
                        <input type="file" id="inputThumbail" class="form-control" accept="image/*"
                            wire:model='thumbnail'>
                        @error('thumbnail')
                        <code>{{ $message }}</code>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <textarea type="text" class="form-control" wire:model='form.description'
                            placeholder="Deskripsi Jurusan" rows="10"></textarea>
                        @error('form.description')
                        <code>{{ $message }}</code>
                        @enderror
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary" wire:loading.attr='disabled'>
                            Create
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>