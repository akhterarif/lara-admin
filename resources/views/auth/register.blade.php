@extends('layouts.main')

@section('content')
<div class="col-md-4 col-md-offset-4">
    <div class="panel panel-success">
        <!-- Login Credentials -->
        <div class="panel-heading">
            <strong>Register</strong>
        </div>
        <div class="panel-body">
            {{ Form::open(['url' => url('auth/register'), 'method' => 'POST', ]) }}
                <!-- username -->
                <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                    {{ Form::label('name', "Name") }}
                    {{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => "Enter your Username."])}}
                    <span class="help-block text-danger">
                        {!! $errors-> first('name') !!}
        			</span>
                </div>
                <!-- email -->
                <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                    {{ Form::label('email', "E-mail") }}
                    {{ Form::email('email', null, ['class' => 'form-control', 'placeholder' => "Enter your E-mail."])}}
                    <span class="help-block text-danger">
                        {!! $errors-> first('email') !!}
        			</span>
                </div>
                <!-- Password -->
                <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
                    {{ Form::label('password', "Password") }}
                    {{ Form::password('password', ['class' => 'form-control', 'placeholder' => 'Enter Password']) }}
                    <span class="help-block text-danger">
                        {!! $errors-> first('password') !!}
        			</span>
                </div>
                <!-- Confirm Password  -->
                <div class="form-group {{ $errors->has('password_confirmation') ? 'has-error' : '' }}">
                    {{ Form::label('password_confirmation', "Confirm Password") }}
                    {{ Form::password('password_confirmation', ['class' => 'form-control', 'placeholder' => 'Re-type password']) }}
                    <span class="help-block text-danger">
                        {!! $errors-> first('password_confirmation') !!}
        			</span>
                </div>

                {{ Form::submit('Register', ['class' => 'btn btn-success']) }}

                {{ link_to(url('auth/login'), 'For Login Click Here', ['class' => 'pull-right']) }}
                <!-- <button type="submit" class="">Submit</button> -->
            {{ Form::close() }}
        </div>
    </div>
</div>
@stop
