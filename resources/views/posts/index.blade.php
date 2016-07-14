@extends('posts.layout')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <h1>Posts List</h1>
            <hr/>

        </div>
    </div>

    @if (count($posts))

    <table class="table table-bordered table-condensed">
        <thead>
            <tr>
                <th>S.I.</th>
                <th>Title</th>
                <th>Description</th>
                <th>Actions</th>
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
                <td>
                    <!-- edit btn -->
                    {!! Html::link(
                        'posts/'. $item->id. '/edit',
                        'Edit',
                        [
                            'class' => 'btn btn-info btn-xs'
                        ]
                    ) !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    @else
    <h3>There is no posts.</h3>
    @endif

@stop
