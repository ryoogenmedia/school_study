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
                                <th>Name</th>
                                <th>Email</th>
                                <th>Create At</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($users as $user )
                            <tr>
                                <td>
                                    <span class="d-block  text-inherit mb-0">{{ $user->name }}</span>
                                </td>
                                <td>
                                    <span class="d-block  text-inherit mb-0">{{ $user->email }}</span>
                                </td>
                                <td>
                                    <span class="d-block  text-inherit mb-0">{{ $user->created_at->format('d M y , h:i
                                        a') }}</span>
                                </td>
                                <td>
                                    <div class="gap-2">
                                        <button class="btn btn-sm btn-primary"
                                            wire:click='editToggle({{ $user->id }})'>Edit</button>
                                        @if (auth()->user()->id == $user->id)
                                        <button class="btn btn-sm btn-danger" disabled>Delete</button>
                                        @else
                                        <button class="btn btn-sm btn-danger" wire:click='delete({{ $user->id }})'
                                            wire:loading.attr='disabled'>Delete</button>
                                        @endif
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
                    @foreach ($form->except('password') as $key => $value )
                    <div class="mb-3">
                        <label class="form-label" for="input{{ $key }}">{{ Str::ucfirst($key) }}</label>
                        <input type="text" id="input{{ $key }}" class="form-control" placeholder="{{ $key}}"
                            wire:model.lazy='form.{{ $key }}'>
                        @error('form.'.$key)
                        <code>{{ $message }}</code>
                        @enderror
                    </div>
                    @endforeach
                    <div class="mb-3">
                        <label class="form-label" for="inputpassword">{{ Str::ucfirst('password') }}</label>
                        <input type="text" id="inputpassword" class="form-control" placeholder="Password"
                            wire:model.lazy='password'>
                        @error('password')
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