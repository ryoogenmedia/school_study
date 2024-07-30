<div class="row">

    <div class="col-12">
        <div class="card">
            <div class="card-header  ">
                <h2>List Slider</h2>
            </div>
            <div class="card-body">
                <div class="table-responsive datatable-custom">
                    <table
                        class="js-datatable table table-borderless table-thead-bordered table-nowrap table-align-middle card-table">
                        <thead class="thead-light">
                            <tr>
                                <th>Image</th>
                                <th>Title</th>
                                <th>Sub Title</th>
                                <th>Description</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($sliders as $slider )
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="avatar avatar-circle">
                                            <img class="avatar-img" src="{{ asset(Storage::url($slider->image)) }}"
                                                alt="Image Description">
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <span class="d-block h5 text-inherit mb-0">{{ $slider->title }}</span>
                                </td>
                                <td>
                                    <span class="d-block h5 text-inherit mb-0">{{ $slider->sub_title }}</span>
                                </td>
                                <td>
                                    <x-p :text="Str::limit($slider->description , 50 , '...')" />
                                </td>
                                <td>
                                    <div class="gap-2">
                                        <button class="btn btn-sm btn-primary">Edit</button>
                                        <button class="btn btn-sm btn-danger" wire:click='delete({{ $slider->id }})'
                                            wire:loading.attr='disabled'>Delete</button>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 mt-5">
        <div class="card">
            <div class="card-header">
                <h2>Create </h2>
            </div>
            <div class="card-body">
                <form wire:submit='create()'>
                    @foreach ($form->except(['image' , 'description']) as $key => $value )
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
                        <label class="form-label" for="inputThumbail">Image</label>
                        <input type="file" id="inputThumbail" class="form-control" accept="image/*" wire:model='image'>
                        @error('image')
                        <code>{{ $message }}</code>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <textarea type="text" class="form-control" wire:model='form.description'
                            placeholder="Deskripsi " rows="10"></textarea>
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