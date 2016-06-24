@extends('posts.layout')

@section('content')
    
    @if (count($posts))
    <table class="table table-bordered table-condensed">
        <thead>
            <tr>
                <th>S.I.</th>
                <th>Title</th>
                <th>Description</th>
            </tr>
        </thead>
        <!-- initializing index  -->
        <?php $index = 0; ?>
        <tbody>
        @foreach($posts as $item)
            <tr>
                <td>{{ ++$index }}</td>
                <td>{{ $item->title }}</td>
                <td>{{ $item->description }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    @else
    <h3>There is no posts.</h3>
    @endif

@stop
