  @extends('master')


  @section('title', 'About EGcoders')
    <!-- /.container-fluid -->
  
@section('body')

  <h3 class="offer wow bounceInRight" data-wow-duration="2s">be one form our markting and get <span>10%</span> from our profit</h3>
  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-example-generic" data-slide-to="1"></li>
      <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="img/slider.png" alt="...">
        <div class="carousel-caption">
          <h3 class="text-capitalize">sologn here 1</h3>
          <p class="lead">sologn here sologn here sologn here sologn here sologn here sologn here sologn here</p>
        </div>
      </div>
      <div class="item">
        <img src="img/slider.png" alt="...">
        <div class="carousel-caption">
          <h3 class="text-capitalize">sologn here 2</h3>
          <p class="lead">sologn here sologn here sologn here sologn here sologn here sologn here sologn here</p>
        </div>
      </div>
      <div class="item">
        <img src="img/slider.png" alt="...">
        <div class="carousel-caption">
          <h3 class="text-capitalize">sologn here 3</h3>
          <p class="lead">sologn here sologn here sologn here sologn here sologn here sologn here sologn here</p>
        </div>
      </div>
    </div>
  </div>

  <section class="about ">
    <div class="container wow fadeIn" data-wow-duration="2s" data-wow-offset="300">
      <h2 class="h1 text-capitalize">about us</h2>
      <hr class="hr">
      <p class="lead "> something here about something here about something here about something here about something here about something here about something here about something here about something here about something here about something here about something here about something here about something here about something here about something here about something here about something here about about something</p>
    </div>
  </section>


  <div class="projects">
    <div class="container">
      <h2 class="h1 text-capitalize text-center">Our Service</h2>
      <hr class="hr">
      <div class="col-md-12 ">
        <div class="col-md-3 wow fadeIn" data-wow-duration="2s" data-wow-delay="0.5s" data-wow-offset="300">
          <div class="card text-center">
            <img src="img/hand-gesture.png">
            <h4>Software Developmet</h4>
          </div>
        </div>
        <div class="col-md-3 wow fadeIn" data-wow-duration="2s" data-wow-delay="1s" data-wow-offset="300">
          <div class="card">
            <img src="img/customer-service.png">
            <h4>Digital Marketing</h4>
          </div>
        </div>
        <div class="col-md-3 wow fadeIn" data-wow-duration="2s" data-wow-delay="1.5s" data-wow-offset="300">
          <div class="card">
            <img src="img/stats.png">
            <h4>Branding</h4>
          </div>
        </div>
        <div class="col-md-3 wow fadeIn" data-wow-duration="2s" data-wow-delay="2s" data-wow-offset="300">
          <div class="card">
            <img src="img/store.png">
            <h4>Business Plan</h4>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <hr class="divider-project">
    </div>
  </div>
  <section class="partners">
    <div class="container">
      <h2 class="h1 text-capitalize text-center">our partners</h2>
      <hr class="hr">
      <ul class="list-unstyled">
        <li class="col-md-3 col-sm-3 col-xs-6">
          <img src="img/partners/cnn-hd-logo-png-sk1.png" class="img-responsive center-block">
        </li>
        <li class="col-md-3 col-sm-3 col-xs-6">
          <img src="img/partners/forbes-logo-dark.png" class="img-responsive center-block">
        </li>
        <li class="col-md-3 col-sm-3 col-xs-6">
          <img src="img/partners/thesprezz-techradar-logo-white2.png" class="img-responsive center-block">
        </li>
        <li class="col-md-3 col-sm-3 col-xs-6">
          <img src="img/partners/WSJ_facebook.png" class="img-responsive center-block">
        </li>
      </ul>
    </div>
  </section>

  @endsection



  