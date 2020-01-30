@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Appointments
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($appointments, ['route' => ['appointments.update', $appointments->id], 'method' => 'patch']) !!}

                        @include('appointments.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection