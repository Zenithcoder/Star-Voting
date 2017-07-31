@extends('admin.layout')

@section('title')
Editing
@endsection

@section('content')

<div class="row">
<h1 style="padding-left: 20px">Editing {{ $eroles->role }}</h1>
<div class="col-md-8 col-md-offset-1">
@if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

{{ Form::model($eroles, array('route' => array('admin.update', $eroles->id), 'method' => 'PATCH')) }}

<div class="form-group">
            {{ Form::label('Role', 'Role') }}
            {{ Form::text('role', null, array('class' => 'form-control')) }}
        </div>

        <div class="form-group">
            {{ Form::label('sector', 'Sector') }}
            {{ Form::text('sector', null, array('class' => 'form-control')) }}
        </div>

        <div class="form-group">
            {{ Form::label('deadline', 'Deadline') }}
            {{ Form::text('deadline', null, array('class' => 'form-control')) }}
        </div>

        <div class="form-group">
            {{ Form::label('Company', 'Company') }}
            {{ Form::textarea('company', null, array('class' => 'form-control')) }}
        </div>
        <div class="form-group">
            {{ Form::label('Responsibility', 'Responsibility') }}
            {{ Form::textarea('resp', null, array('class' => 'form-control')) }}
        </div>
        <div class="form-group">
            {{ Form::label('Qualification/Experience', 'Qualification/Experience') }}
            {{ Form::textarea('qual', null, array('class' => 'form-control')) }}
        </div>
        <div class="form-group">
            {{ Form::label('Skill', 'Skill') }}
            {{ Form::textarea('skill', null, array('class' => 'form-control')) }}
        </div>
         

        {{ Form::submit('UPDATE', array('class' => 'button success')) }}

{{ Form::close() }}
</div>
</div>
@endsection