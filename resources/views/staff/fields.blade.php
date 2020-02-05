
<div class="modal fade" id="staff-show" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h5 class="modal-title" id="exampleModalLabel">New Staff</h5>
            </div>
            <div class="modal-body"> 
                    <!-- Name Field -->
                <div class="form-group col-sm-6">
                    {!! Form::label('name', 'Name:') !!}
                    {!! Form::text('name', null, ['class' => 'form-control']) !!}
                </div>

                <!-- Email Field -->
                <div class="form-group col-sm-6">
                    {!! Form::label('email', 'Email:') !!}
                    {!! Form::email('email', null, ['class' => 'form-control']) !!}
                </div>

                <!-- Phone Field -->
                <div class="form-group col-sm-6">
                    {!! Form::label('phone', 'Phone:') !!}
                    {!! Form::text('phone', null, ['class' => 'form-control']) !!}
                </div>

                <!-- Gender Field -->
                <div class="form-group col-sm-6">
                    {!! Form::label('gender', 'Gender:') !!}
                    {{-- {!! Form::text('gender', null, ['class' => 'form-control']) !!} --}}
                    <select name="gender" id="gender" class="form-control">
                        <option value="">Select Gender</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                </div>

                <!-- Hospital Id Field -->
                <div class="form-group col-sm-6">
                    {!! Form::label('hospital', 'Hospital:') !!}

                    <select name="hospital" id="hospital" class="form-control">
                        <option value="">Select Hospital</option>
                        @foreach($hospitals as $hospital)
                        <option value="{{$hospital->id}}">{{$hospital->name}}</option>
                        @endforeach
                    </select>
                </div>

                <!-- User Id Field -->
                <div class="form-group col-sm-6">
                    {!! Form::label('id number', 'User Id:') !!}
                    {!! Form::number('id number', null, ['class' => 'form-control']) !!}
                </div>

                <!-- Status Field -->
                <div class="form-group col-sm-6">
                    {!! Form::label('status', 'Status:') !!}
                    <label class="checkbox-inline">
                        {!! Form::hidden('status', 0) !!}
                        {!! Form::checkbox('status', '1', null) !!}
                    </label>
                </div>
            </div>       
                <div class="modal-footer">
                    <!-- Submit Field -->
                    <div class="form-group col-sm-12">
                        {!! Form::submit('Save', ['class' => 'btn btn-success']) !!}
                        <a href="{{ route('staff.index') }}" class="btn btn-warning">Cancel</a>
                    </div>
                </div>
         </div>
    </div>    
</div>