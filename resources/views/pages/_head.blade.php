  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title')</title>
  @yield('stylesheet')
  {{ HTML::style('css/bootstrap.css', array('media' => 'print')) }}
  {{ HTML::style('css/font-awesome.min.css', array('media' => 'print')) }}
  {{ HTML::style('css/animate.css.css', array('media' => 'print')) }}
  {{ HTML::style('css/style.css', array('media' => 'print')) }}


  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="js/html5shiv.min.js"></script>
    <script src="js/respond.min.js"></script>
  <![endif]-->

