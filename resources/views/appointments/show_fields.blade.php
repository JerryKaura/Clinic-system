<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $appointments->name }}</p>
</div>

<!-- Who To See Field -->
<div class="form-group">
    {!! Form::label('who_to_see', 'Who To See:') !!}
    <p>{{ $appointments->who_to_see }}</p>
</div>

<!-- Description Field -->
<div class="form-group">
    {!! Form::label('description', 'Description:') !!}
    <p>{{ $appointments->description }}</p>
</div>

<!-- Date Field -->
<div class="form-group">
    {!! Form::label('date', 'Date:') !!}
    <p>{{ $appointments->date }}</p>
</div>

