@extends('posts.layout')

@section('content')
{{--Create Post--}}
<div class="row">
    <div class="col-sm-8 col-sm-offset-2">
        <div class="row">
            <h1>Add A Post</h1>
            <hr/>
        </div>

        {!! Form::open([
            'url' => url('posts'),
            'class' => 'form-horizontal'
        ]) !!}
        <div class="form-group">
            {{--Loading Form--}}
            @include('posts._form')
            
            <div class="row">
                <div class="col-sm-offset-3">
                    <div class="col-sm-6">
                        {!! Form::submit('Add', ['class' => 'btn btn-primary form-control']) !!}
                    </div>
                    <div class="col-sm-6">
                        <a href="{{url('posts')}}" class = "btn btn-danger form-control"> Cancel</a>
                    </div>
                </div>
            </div>
        </div>
        {!! Form::close() !!}
    </div>
</div>
@stop
