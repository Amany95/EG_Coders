<section class="contact">
    <div class="container">
      <h2 class=" text-center text-capitalize">contact us</h2>
      <hr class="hr">
      <div class="row">
        <div class="col-md-7" >
          <h3 class="text-capitalize">contact details</h3>
          <p class="lead">Phone : 0000000</p>
          <p class="lead">Address : 0000000</p>
          <p class="lead">E-mail : e_mail@yahoo.com</p>

        </div>
        <div class="col-md-5">
          <div class="contact-form">
            <h2 class="cont text-capitalize text-center" >contact form</h2>
               <form role="form" action="/contactus" method="post">
                {{ csrf_field() }}
              <div class="form-group">
                <input type="text" name="name" class="form-control input-lg" placeholder="your name" required>
              </div>
              <div class="form-group">
                <input type="email" name="email" class="form-control input-lg" placeholder="E-mail" required>
              </div>
              <div class="form-group">
                <input type="tel" name="phone" class="form-control input-lg" placeholder="Phone number" required>
              </div>
              <div class="form-group">
                <textarea class="form-control input-lg" name="message" placeholder="Message" required></textarea>
              </div>
              <button type="submit" class="btn btn-primary btn-block btn-lg">Contact US</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="copyR">
      <div class="container">
        <div class="row">
          <div id="copy" class="col-sm-6 col-xs-12 text-left">
            <p class="lead text-left">Copyright &copy; Egcoders.com</p>
          </div>
          <div id="social" class="col-sm-6 col-xs-12 text-right">
            <i class="fa fa-facebook fa-2x"></i>
            <i class="fa fa-linkedin fa-2x"></i>
            <i class="fa fa-twitter fa-2x "></i>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--start scorll top-->
  <div id="to_top">
    <i class="fa fa-chevron-up fa-3x"></i>
  </div>
  <!-- End scorll top-->