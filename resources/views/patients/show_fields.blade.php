<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $patient->name }}</p>
</div>

<!-- Id Number Field -->
<div class="form-group">
    {!! Form::label('id_number', 'Id Number:') !!}
    <p>{{ $patient->id_number }}</p>
</div>

<!-- Bloodgroup Field -->
<div class="form-group">
    {!! Form::label('bloodgroup', 'Bloodgroup:') !!}
    <p>{{ $patient->bloodgroup }}</p>
</div>

<!-- Gender Field -->
<div class="form-group">
    {!! Form::label('gender', 'Gender:') !!}
    <p>{{ $patient->gender }}</p>
</div>

<!-- Phone Field -->
<div class="form-group">
    {!! Form::label('phone', 'Phone:') !!}
    <p>{{ $patient->phone }}</p>
</div>

<!-- Email Field -->
<div class="form-group">
    {!! Form::label('email', 'Email:') !!}
    <p>{{ $patient->email }}</p>
</div>

<!-- Dob Field -->
<div class="form-group">
    {!! Form::label('dob', 'Dob:') !!}
    <p>{{ $patient->dob }}</p>
</div>

<!-- Address Field -->
<div class="form-group">
    {!! Form::label('address', 'Address:') !!}
    <p>{{ $patient->address }}</p>
</div>

<!-- Guardian Field -->
<div class="form-group">
    {!! Form::label('guardian', 'Guardian:') !!}
    <p>{{ $patient->guardian }}</p>
</div>

<!-- Status Field -->
<div class="form-group">
    {!! Form::label('status', 'Status:') !!}
    <p>{{ $patient->status }}</p>
</div>

