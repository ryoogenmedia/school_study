<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header  ">
                <h2>Message</h2>
            </div>
            <div class="card-body">
                <div class="table-responsive datatable-custom">
                    <table
                        class="js-datatable table table-borderless table-thead-bordered table-nowrap table-align-middle card-table">
                        <thead class="thead-light">
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Message</th>
                        </thead>

                        <tbody>
                            @foreach ($messages as $message )
                            <tr>
                                <td>
                                    <span class="d-block fs-5 text-body">{{ $message->name }}</span>
                                </td>
                                <td>
                                    <span class="d-block fs-5 text-body">{{ $message->email }}</span>
                                </td>
                                <td>
                                    <x-p :text="$message->message" />
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>