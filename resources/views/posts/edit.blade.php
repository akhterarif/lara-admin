@extends('posts.layout')

@section('content')
{{--Create Post--}}
<div class="row">
    <div class="col-sm-8 col-sm-offset-2">
        <div class="row">
            <h1>Edit A Post</h1>
            <hr/>
        </div>

        {!! Form::model(
            $post,
            [
                'method' => 'PUT',
                'url' => url('posts/'. $post->id),
                'class' => 'form-horizontal'
            ]
        ) !!}
        <div class="form-group">
            {{--Loading Form--}}
            @include('posts._form')

            <div class="row">
                <div class="col-sm-offset-3">
                    <div class="col-sm-6">
                        {!! Form::submit('Update', ['class' => 'btn btn-primary form-control']) !!}
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
