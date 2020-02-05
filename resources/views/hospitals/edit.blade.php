@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Hospital
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($hospital, ['route' => ['hospitals.update', $hospital->id], 'method' => 'patch']) !!}

                        @include('hospitals.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection