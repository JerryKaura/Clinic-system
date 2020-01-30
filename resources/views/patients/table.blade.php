<div class="table-responsive">
    <table class="table" id="patients-table">
        <thead>
            <tr>
                <th>Name</th>
        <th>Id Number</th>
        <th>Bloodgroup</th>
        <th>Gender</th>
        <th>Phone</th>
        <th>Email</th>
        <th>Dob</th>
        <th>Address</th>
        <th>Guardian</th>
        <th>Status</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($patients as $patients)
            <tr>
                <td>{{ $patients->name }}</td>
            <td>{{ $patients->id_number }}</td>
            <td>{{ $patients->bloodgroup }}</td>
            <td>{{ $patients->gender }}</td>
            <td>{{ $patients->phone }}</td>
            <td>{{ $patients->email }}</td>
            <td>{{ $patients->dob }}</td>
            <td>{{ $patients->address }}</td>
            <td>{{ $patients->guardian }}</td>
            <td>{{ $patients->status }}</td>
                <td>
                    {!! Form::open(['route' => ['patients.destroy', $patients->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('patients.show', [$patients->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('patients.edit', [$patients->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
