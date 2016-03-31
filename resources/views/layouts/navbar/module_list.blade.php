<!--  -->
    <ul class="nav navbar-nav">
        <li class="dropdown">
            <!-- <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-server"></i> {{isset($module)? ucwords($module) :'Modules'}}  <span class="caret"></span></a> -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-server"></i> Module  <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
                <li><a href="{{ url('/') }}">Accounts</a></li>
                <li><a href="{{ url('/diagnostic') }}">Diagnostic</a></li>
                <li><a href="{{ url('/hospital') }}">Hospital</a></li>
                <li><a href="{{ url('/hrm') }}">HRM</a></li>
                <li><a href="{{ url('/inventory') }}">Inventory</a></li>
                <li><a href="{{ url('/lab') }}">Lab</a></li>
                <li><a href="{{ url('/pharmacy') }}">Pharmacy</a></li>
                <li><a href="{{ url('/register') }}">Registration</a></li>
                <li><a href="{{ url('/#') }}">User Panel</a></li>
            </ul>
        </li>
    </ul>
<!--  -->
