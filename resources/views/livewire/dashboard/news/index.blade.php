<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header  ">
                <h2>List News</h2>
            </div>
            <div class="card-body">
                <div class="table-responsive datatable-custom">
                    <table
                        class="js-datatable table table-borderless table-thead-bordered table-nowrap table-align-middle card-table">
                        <thead class="thead-light">
                            <tr>
                                <th>Thumbnail</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Create At</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($news as $new )
                            <tr>
                                <td>
                                    <a href="{{ route('news.detail' , ['slug' => $new->slug]) }}" target="_blank"
                                        class="d-flex align-items-center">
                                        <a href="{{ asset(Storage::url($new->thumbnail)) }}" target="_blank">
                                            <img class="avatar-img border border-primary"
                                                src="{{ asset(Storage::url($new->thumbnail)) }}" alt="Image Description"
                                                width="200px" height="100px">
                                        </a>
                                    </a>
                                </td>
                                <td>
                                    <span class="d-block  text-inherit mb-0">{{ $new->title }}</span>
                                </td>
                                <td>
                                    <x-p :text="Str::limit($new->description , 50 , '...')" />
                                </td>
                                <td>
                                    <span class="d-block  text-inherit mb-0">{{ $new->created_at->format('d M y , h:i
                                        a') }}</span>
                                </td>

                                <td>
                                    <div class="gap-2">
                                        <button class="btn btn-sm btn-primary"
                                            wire:click='editToggle({{ $new->id }})'>Edit</button>
                                        <button class="btn btn-sm btn-danger" wire:click='delete({{ $new->id }})'
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
                <h2>{{ $isEdit ? 'Edit' : 'Create' }} </h2>
            </div>
            <div class="card-body">
                <form @if ($isEdit) wire:submit='edit()' @else wire:submit='create()' @endif>
                    <div class="mb-3">
                        <label class="form-label" for="inputtitle">Title</label>
                        <input type="text" id="inputtitle" class="form-control" placeholder="Title"
                            wire:model='form.title'>
                        @error('form.title')
                        <code>{{ $message }}</code>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="inputThumbail">Image</label>
                        <input type="file" class="form-control" accept="image/*" wire:model='image'>
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
                            {{ $isEdit ? 'Edit' : 'Create' }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>