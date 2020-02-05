@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">Staff</h1>
        <h1 class="pull-right">
            <a data-toggle="modal" data-target="#staff-show" class="btn btn-success pull-right" style="margin-top: -10px;margin-bottom: 5px">Add New</a>
            <a href="" data-toggle="modal" data-target=""></a>
        </h1>
    </section>

    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')
        @include('adminlte-templates::common.errors')
        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                    @include('staff.table')
                    {!! Form::open(['route' => 'staff.store']) !!}

                        @include('staff.fields')

                    {!! Form::close() !!}
            </div>
        </div>
        <div class="text-center">
        
        </div>
    </div>
@endsection

