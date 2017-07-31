@extends('admin.layout')

@section('title')
HomePage
@endsection

@section('content')

<div class="row">
 @if(Session::has('message'))
    <div class="alert alert-info">
      {{Session::get('message')}}
    </div>
    @endif

    <div class="col-md-8 col-md-offset-1">
    <ul>
    @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
</ul>
        <h3>Enter  Contestant Details </h3>

        {!! Form::open(['route' => 'admin.storeC', 'method' => 'post']) !!}

        <div class="form-group">
            {{ Form::label('name', 'Name') }}
            {{ Form::text('name', null, array('class' => 'form-control')) }}
        </div>

        <div class="form-group">
            {{ Form::label('description', 'Description') }}
            {{ Form::text('description', null, array('class' => 'form-control')) }}
        </div>

        <div class="form-group">
            {!! Form::label('Image') !!}
            {!!  Form::file('image')!!}
        </div>

        
         

        {{ Form::submit('Submit', array('class' => 'button success')) }}
        {!! Form::close() !!}
    </div>

@endsection