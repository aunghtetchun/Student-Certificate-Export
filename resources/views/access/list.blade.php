<table class="table table-hover table-bordered table-responsive-sm mb-0">
    <thead>
    <tr>
        <th>ID</th>
        <th>User Name</th>
        <th>Batch Number</th>
        <th>Controls</th>
        <th>Created At</th>
    </tr>
    </thead>
    <tbody>


    @foreach($accessList as $ac)

        <tr>
            <td>{{ $ac->id }}</td>
            <td>{{ $ac->getStudent->name }}</td>
            <td>{{ $ac->getBatch->batch_number}}</td>
            <td class="control-group d-flex align-items-center">
                <a href="{{ route('access.edit',$ac->id) }}" class="btn btn-outline-warning btn-sm">
                    <i class="feather-edit"></i> Edit
                </a>
                <form action="{{ route('access.destroy',$ac->id) }}" class="ml-3" method="post">
                    @csrf
                    @method("DELETE")
                    <button href="" class="btn btn-sm btn-outline-danger text-left">
                        <i class="feather-trash-2"></i> Delete
                    </button>
                </form>

            </td>
            <td class="no-warp">{{ $ac->created_at->diffforhumans()  }}</td>
        </tr>

    @endforeach

    </tbody>
</table>
