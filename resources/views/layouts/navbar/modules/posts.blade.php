<!-- posts modules menu goes here  -->
@if(isset($module) && $module=='posts')
<!-- individual links -->
<li><a href="{{ url('/posts/create') }}"><i class="fa fa-home"></i> Create a Post</a></li>
<li><a href="{{ url('/posts') }}"><i class="fa fa-file-text-o"></i> Posts List </a></li>

<!-- dropdown links of menu -->
<li class="dropdown">
    <a href="#" data-toggle="dropdown" class="dropdown-toggle"><i class="fa fa-edit"></i> Tests Dropdown <b class="caret"></b></a>
    <ul class="dropdown-menu">
        <li><a href="{{ url('/lab/lab-category') }}"><span class="glyphicon glyphicon-flag"></span>Drop  down goes here</a></li>
    </ul>
</li>
@endif
