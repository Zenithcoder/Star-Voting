@extends('master')

@section('content')
    You received a  Job Application from mml.com.ng:

             
<p>
Name: {{ $name }}
</p>

<p>
email: {{ $email }}
</p>

<p>
phone: {{ $phone }}
</p>


<p>
country: {{ $country }}
</p>


<p>
education: {{ $education }}
</p>


<p>
role: {{ $role }}
</p>

<p>
Current Employer: {{ $employer }}
</p>


<p>
years: {{ $years }}
</p>


<p>
salary: {{ $salary}}
</p>

           
@endsection