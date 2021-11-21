@extends('layouts.app')

@section('content')

    <div class="container mt-4 w-50 border ">
        <h1 class="text-center">Create new Merchandise</h1>


        @if($message = Session::get('success'))


        <div class="alert alert-success alert-block text-center">
                <strong>{{ $message }}</strong>
        </div>

        @endif
        {!! Form::open(['url' => ['store-merchandise'], 'method' => 'post']) !!}
            <div class="form-group">
                {{ Form::label('name','Name') }}
                {{ Form::text('name',null,['class'=>'input-group']) }}
            </div>
            <div class="form-group">
                {{ Form::label('description','Description') }}
                {{ Form::text('description',null,['class'=>'input-group']) }}
            </div>
            <div class="form-group">
                {{ Form::label('quantity','Quantity') }}
                {{ Form::text('quantity',null,['class'=>'input-group']) }}
            </div>

            <div class="form-group">
                {{ Form::label('price','Price') }}
                {{ Form::text('price',null,['class'=>'input-group']) }}
            </div>

            <div class="form-group shadow-none">
                {!! Form::button('Create', ['type' => 'submit', 'class' => 'btn btn-success']) !!}

            </div>
        {!! Form::close() !!}

    </div>

@endsection
