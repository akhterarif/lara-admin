<!-- all modules list goes here  -->
<ul class="nav navbar-nav">
    <li class="dropdown">
        <!-- <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-server"></i> {{isset($module)? ucwords($module) :'Modules'}}  <span class="caret"></span></a> -->
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-server"></i> Module  <span class="caret"></span></a>
        <ul class="dropdown-menu" role="menu">
            <li><a href="{{ url('/posts') }}">Posts</a></li>
        </ul>
    </li>
</ul>
