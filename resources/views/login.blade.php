
@extends('base')

@section('content')

<div class="row mt-5">
    <div class="col-md-4 offset-md-4">
        <h1>User Login</h1>
    {!! Form::open(['url' => '/login', 'method' =>'post']) !!}

<div class="mb-3">
    {!! Form::label("email", "Email") !!}
    {!! Form::email("email", null, ['class'=>'form-contro']) !!}
</div> 
<div class="mb-3">
    {!! Form::label("password", "Password") !!}
    {!! Form::email("password", ['class'=>'form-contro']) !!}
</div> 

<div class="mb-3">
    <button class="btn btn-primary" type="submit">
        LOGIN
    </button>
</div>
{!! Form::close() !!}
    </div>
</div>

@endsection