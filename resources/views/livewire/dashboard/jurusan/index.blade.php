<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header  ">
                <h2>List Jurusan</h2>
                <a class="btn btn-sm btn-primary float-end " href="{{ route('dashboard.jurusan.create') }}">Create </a>
            </div>
            <div class="card-body">
                <div class="table-responsive datatable-custom">
                    <table
                        class="js-datatable table table-borderless table-thead-bordered table-nowrap table-align-middle card-table">
                        <thead class="thead-light">
                            <tr>
                                <th>Thumbnail</th>
                                <th>Jurusan</th>
                                <th>Description</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($jurusans as $jurusan )
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="avatar avatar-circle">
                                            <img class="avatar-img" src="{{ asset(Storage::url($jurusan->thumbnail)) }}"
                                                alt="Image Description">
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <a href="{{ route('course.detail' , ['slug' => $jurusan->slug]) }}" target="_blank">
                                        <span class="d-block h5 text-inherit mb-0">{{ $jurusan->title }}</span>
                                        <span class="d-block fs-5 text-body">{{ $jurusan->sub_title }}</span>
                                    </a>
                                <td>
                                    <x-p :text="Str::limit($jurusan->description , 50 , '...')" />
                                </td>
                                <td>
                                    <div class="gap-2">
                                        <button class="btn btn-sm btn-primary"
                                            wire:click='editToggle({{ $jurusan->id }})'>Edit</button>
                                        <button class="btn btn-sm btn-danger" wire:click='delete({{ $jurusan->id }})'
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
    @if ($isEdit)
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h2>Edit Jurusan</h2>
            </div>
            <div class="card-body">
                <form wire:submit='edit()'>
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
                            Update
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @endif
</div>