<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $patients->name }}</p>
</div>

<!-- Id Number Field -->
<div class="form-group">
    {!! Form::label('id_number', 'Id Number:') !!}
    <p>{{ $patients->id_number }}</p>
</div>

<!-- Bloodgroup Field -->
<div class="form-group">
    {!! Form::label('bloodgroup', 'Bloodgroup:') !!}
    <p>{{ $patients->bloodgroup }}</p>
</div>

<!-- Gender Field -->
<div class="form-group">
    {!! Form::label('gender', 'Gender:') !!}
    <p>{{ $patients->gender }}</p>
</div>

<!-- Phone Field -->
<div class="form-group">
    {!! Form::label('phone', 'Phone:') !!}
    <p>{{ $patients->phone }}</p>
</div>

<!-- Email Field -->
<div class="form-group">
    {!! Form::label('email', 'Email:') !!}
    <p>{{ $patients->email }}</p>
</div>

<!-- Dob Field -->
<div class="form-group">
    {!! Form::label('dob', 'Dob:') !!}
    <p>{{ $patients->dob }}</p>
</div>

<!-- Address Field -->
<div class="form-group">
    {!! Form::label('address', 'Address:') !!}
    <p>{{ $patients->address }}</p>
</div>

<!-- Guardian Field -->
<div class="form-group">
    {!! Form::label('guardian', 'Guardian:') !!}
    <p>{{ $patients->guardian }}</p>
</div>

<!-- Status Field -->
<div class="form-group">
    {!! Form::label('status', 'Status:') !!}
    <p>{{ $patients->status }}</p>
</div>

