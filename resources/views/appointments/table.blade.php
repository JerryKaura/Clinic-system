<div class="table-responsive">
    <table class="table" id="appointments-table">
        <thead>
            <tr>
                <th>Name</th>
        <th>Who To See</th>
        <th>Description</th>
        <th>Date</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($appointments as $appointments)
            <tr>
                <td>{{ $appointments->name }}</td>
            <td>{{ $appointments->who_to_see }}</td>
            <td>{{ $appointments->description }}</td>
            <td>{{ $appointments->date }}</td>
                <td>
                    {!! Form::open(['route' => ['appointments.destroy', $appointments->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('appointments.show', [$appointments->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('appointments.edit', [$appointments->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
