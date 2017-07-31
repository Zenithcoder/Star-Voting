@extends('master')

@section('content')
    You received a message from mml.com.ng:

<p>
Name: {{ $name }}
</p>

<p>
{{ $email }}
</p>

<p>
{{ $phone }}
</p>

<p>
{{ $user_message }}
</p>
           
@endsection