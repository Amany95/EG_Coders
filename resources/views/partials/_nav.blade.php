<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
        <a class="navbar-brand" href="{{ url('index') }}">
          <img alt="Brand" src="img/logo.jpg">
        </a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right text-center">
          <li class="active"><a href="{{ url('index') }}" class="text-capitalize">home</a></li>
          <li><a href="{{ url('about') }}" class="text-capitalize">about</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle text-capitalize" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">services<span class="caret"></span></a>
            <ul class="dropdown-menu text-center">
              <li><a href="{{ url('services') }}">Web</a></li>
              <li class="divider"></li>
              <li><a href="{{ url('services') }}">Markting</a></li>
              <li class="divider"></li>
              <li><a href="{{ url('services') }}">Desktop</a></li>
              <li class="divider"></li>
              <li><a href="{{ url('services') }}">E-commerce</a></li>
            </ul>
          </li>
          <li><a href="{{ url('portfolio') }}" class="text-capitalize">portfolio</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle text-capitalize" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">products<span class="caret"></span></a>
            <ul class="dropdown-menu text-center">
              <li><a href="{{ url('product') }}">Zero to hero</a></li>
              <li class="divider"></li>
              <li><a href="{{ url('product') }}">E-commerce</a></li>
            </ul>
          </li>
        </ul>
      </div>
      <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
  </nav>