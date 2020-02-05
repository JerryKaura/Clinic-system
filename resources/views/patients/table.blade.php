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
        @foreach($patients as $patient)
            <tr>
                <td>{{ $patient->name }}</td>
            <td>{{ $patient->id_number }}</td>
            <td>{{ $patient->bloodgroup }}</td>
            <td>{{ $patient->gender }}</td>
            <td>{{ $patient->phone }}</td>
            <td>{{ $patient->email }}</td>
            <td>{{ $patient->dob }}</td>
            <td>{{ $patient->address }}</td>
            <td>{{ $patient->guardian }}</td>
            <td>{{ $patient->status }}</td>
                <td>
                    {!! Form::open(['route' => ['patients.destroy', $patient->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('patients.show', [$patient->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('patients.edit', [$patient->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
