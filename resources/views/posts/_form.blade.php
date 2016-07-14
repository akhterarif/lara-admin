<!-- title  -->
@include('flash::message')
<div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
    {!! Form::label('title', 'Post Title', ['class' => 'col-sm-3']) !!}
    <div class="col-sm-9">
        {!! Form::text('title', null, [ 'class' => 'form-control', 'autocomplete' => 'off' ]) !!}
        <span class="help-block text-danger">
            {!! $errors->first('title') !!}
        </span>
    </div>
</div>

<!-- description  -->
<div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
    {!! Form::label('description', 'Post Description', ['class' => 'col-sm-3']) !!}
    <div class="col-sm-9">
        {!! Form::textarea('description', null, [ 'class' => 'form-control', 'autocomplete' => 'off' ]) !!}
        <span class="help-block text-danger">
            {!! $errors->first('description') !!}
        </span>
    </div>
</div>

<!-- published at  -->
<div class="form-group{{ $errors->has('published_at') ? ' has-error' : '' }}">
    {!! Form::label('description', 'Publish At', ['class' => 'col-sm-3']) !!}
    <div class="col-sm-9">
        <div class='input-group date datetimepicker'>
            {!! Form::text('published_at', null, [ 'class' => 'form-control', 'autocomplete' => 'off' ]) !!}
            <span class="input-group-addon">
                <span class="glyphicon glyphicon-calendar"></span>
            </span>
        </div>
        <span class="help-block text-danger">
            {!! $errors->first('published_at') !!}
        </span>
    </div>
</div>
