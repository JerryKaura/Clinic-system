<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $staff->name }}</p>
</div>

<!-- Email Field -->
<div class="form-group">
    {!! Form::label('email', 'Email:') !!}
    <p>{{ $staff->email }}</p>
</div>

<!-- Phone Field -->
<div class="form-group">
    {!! Form::label('phone', 'Phone:') !!}
    <p>{{ $staff->phone }}</p>
</div>

<!-- Gender Field -->
<div class="form-group">
    {!! Form::label('gender', 'Gender:') !!}
    <p>{{ $staff->gender }}</p>
</div>

<!-- Id Number Field -->
<div class="form-group">
    {!! Form::label('id_number', 'Id Number:') !!}
    <p>{{ $staff->id_number }}</p>
</div>

<!-- Hospital Field -->
<div class="form-group">
    {!! Form::label('hospital', 'Hospital:') !!}
    <p>{{ $staff->hospital }}</p>
</div>

<!-- Status Field -->
<div class="form-group">
    {!! Form::label('status', 'Status:') !!}
    <p>{{ $staff->status }}</p>
</div>

