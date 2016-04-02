@extends('layouts.main')

@section('content')
<div class="col-md-4 col-md-offset-4">
    <div class="panel panel-primary">
        <!-- Login Credentials -->
        <div class="panel-heading">
            <strong>Login</strong>
        </div>
        <div class="panel-body">
            {{ Form::open(['url' => url('auth/login'), 'method' => 'POST']) }}
                <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                    {{ Form::label('email', "E-mail") }}
                    {{ Form::email('email', null, ['class' => 'form-control', 'placeholder' => "Enter your E-mail."])}}
                    <span class="help-block text-danger">
                        {!! $errors-> first('email') !!}
        			</span>
                </div>

                <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                    {{ Form::label('password', "Password") }}
                    {{ Form::password('password', ['class' => 'form-control', 'placeholder' => 'Enter Password']) }}
                    <span class="help-block text-danger">
                            {!! $errors -> first('password') !!}
        			</span>
                </div>
                {{ Form::submit('Login', ['class' => 'btn btn-primary']) }}

                {{ link_to(url('auth/register'), 'For Register Click Here', ['class' => 'pull-right']) }}
                <!-- <button type="submit" class="">Submit</button> -->
            {{ Form::close() }}
        </div>
    </div>
</div>
@stop
