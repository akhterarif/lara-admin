<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Lara Admin</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <!-- Module's list -->
        @include('layouts.navbar.module_list')

        <!-- each modules menu -->
        <ul class="nav navbar-nav navbar-right">

            <!-- @if(Auth::guest()) -->

                <li><a href="{{ url('/login') }}"><i class="fa fa-sign-in"></i> Login</a></li>
                <li><a href="{{ url('/auth/register') }}"><i class="fa fa-sign-in fa-rotate-270"></i> Sign Up</a></li>

                <!-- @else -->
                <!--Menu for Selected Module-->
                @include('layouts.navbar.menu')
                <!-- End of Module Wise Menu -->

                <li><a href="{{ url('/logout') }}"><i class="fa fa-sign-out"></i> {{ trans('navbar.logout') }}</a></li>

            <!-- @endif -->

        </ul><!-- End of each modules menu -->
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
