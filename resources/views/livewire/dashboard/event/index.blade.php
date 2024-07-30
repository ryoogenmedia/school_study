<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header  ">
                <h2>List Event</h2>
            </div>
            <div class="card-body">
                <div class="table-responsive datatable-custom">
                    <table
                        class="js-datatable table table-borderless table-thead-bordered table-nowrap table-align-middle card-table">
                        <thead class="thead-light">
                            <tr>
                                <th>Thumbnail</th>
                                <th>Title</th>
                                <th>Schedule</th>
                                <th>Start</th>
                                <th>End</th>
                                <th>Location</th>
                                <th>Description</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($events as $event )
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="avatar avatar-circle">
                                            <img class="avatar-img" src="{{ asset(Storage::url($event->thumbnail)) }}"
                                                alt="Image Description">
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <span class="d-block  text-inherit mb-0">{{ $event->title }}</span>
                                </td>
                                <td>
                                    <span class="d-block  text-inherit mb-0">
                                        {{\Illuminate\Support\Carbon::parse($event->schedule)->format('d M y') }}
                                    </span>
                                </td>
                                <td>
                                    <span class="d-block  text-inherit mb-0">
                                        {{\Illuminate\Support\Carbon::parse($event->start)->format('h:i a') }}
                                    </span>
                                </td>
                                <td>
                                    <span class="d-block  text-inherit mb-0">
                                        {{\Illuminate\Support\Carbon::parse($event->end)->format('h:i a') }}
                                    </span>
                                </td>
                                <td>
                                    <span class="d-block  text-inherit mb-0">{{ $event->location }}</span>
                                </td>
                                <td>
                                    <x-p :text="Str::limit($event->description , 50 , '...')" />
                                </td>
                                <td>
                                    <div class="gap-2">
                                        <button class="btn btn-sm btn-primary">Edit</button>
                                        <button class="btn btn-sm btn-danger" wire:click='delete({{ $event->id }})'
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
                    @foreach ($form->except(['thumbnail' , 'description' , 'schedule' , 'start' , 'end','slug']) as $key
                    =>
                    $value )
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
                        <label class="form-label" for="inputThumbail">Schedule</label>
                        <input type="date" class="form-control" wire:model='form.schedule'>
                        @error('form.schedule')
                        <code>{{ $message }}</code>
                        @enderror
                    </div>
                    <div class="mb-3 row">
                        <div class="col-6">
                            <label class="form-label" for="inputThumbail">Start</label>
                            <input type="time" class="form-control" wire:model='form.start'>
                            @error('form.start')
                            <code>{{ $message }}</code>
                            @enderror
                        </div>
                        <div class="col-6">
                            <label class="form-label" for="inputThumbail">End</label>
                            <input type="time" class="form-control" wire:model='form.end'>
                            @error('form.end')
                            <code>{{ $message }}</code>
                            @enderror
                        </div>
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
                            Create
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>