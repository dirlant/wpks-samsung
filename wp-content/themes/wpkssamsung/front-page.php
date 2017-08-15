<?php get_header(); ?>

  <div id="preloader">
      <div class="book">
        <div class="book__page"></div>
        <div class="book__page"></div>
        <div class="book__page"></div>
      </div>
  </div>

  <!-- 
  Header start
  ==================== -->
  <div class="navbar-default navbar-fixed-top" id="navigation">
      <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">
                  <img class="logo-1" src="<?php $logo = get_field('logo1', 'option'); echo $logo['url'] ?>" alt="LOGO">
                  <img class="logo-2" src="<?php $logo = get_field('logo2', 'option'); echo $logo['url'] ?>" alt="LOGO">
              </a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <nav class="collapse navbar-collapse" id="navbar">
              <ul class="nav navbar-nav navbar-right" id="top-nav">
                  <li class="current"><a href="#body">Home</a></li>
                  <li><a href="#about">About us</a></li>
                  <li><a href="#service">Services</a></li>
                  <li><a href="#contact">Contact</a></li>
              </ul>
          </nav><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
  </div>


  <section id="hero-area">    
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->

      <?php $slider = get_field('home_sliders', 'option') ?>      
      <ol class="carousel-indicators">
                
        <?php for ($i=0; $i < count($slider); $i++): ?>
          <li data-target="#carousel-example-generic" data-slide-to="<?php echo $i ?>"></li>        
        <?php endfor; ?>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">             
        <?php for ($i=0; $i < count($slider); $i++): ?>
          <div class="item <?php echo $i == 0 ? 'active' : '' ?>">
            <img src="<?php echo $slider[$i]['imagen']['url'] ?>" data-holder-rendered="true" width="100%">
            <div class="carousel-caption">
              <?php echo $slider[$i]['texto'] ?>
            </div>
          </div>
        <?php endfor; ?>                
      </div>

      <!-- Controls -->
      <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Anterior</span>
      </a>
      <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Siguiente</span>
      </a>
    </div>
  </section><!-- header close -->



  <!-- 
  About start
  ==================== -->
  <section id="about" class="section">
      <div class="container">
          <div class="row">              
              <div class="col-md-7 col-sm-12 wow fadeInLeft">
                  <div class="sub-heading">
                      <h3><?php echo get_field('titulo', 'option')  ?></h3>
                  </div>
                  <div class="block">
                      <p><?php echo get_field('textarea', 'option')  ?></p>
                  </div>
              </div>
              <div class="col-md-5 col-sm-12 wow fadeInLeft" data-wow-delay="0.3s">
                  <?php $nosotros = get_field('array_slider', 'option') ?>                    
                  <div class="about-slider">
                      <div class="init-slider" id="countdown_dashboard">
                          <?php for ($i=0; $i < count($nosotros); $i++): ?>                          
                            <div class="about-item">
                                <img src="<?php echo $nosotros[$i]['imagen']['url'] ?>" alt="" class="img-responsive">
                            </div>
                          <?php endfor; ?>                
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section><!-- #about close -->

  <!-- 
  Service start
  ==================== -->
  <section id="service" class="section">
    <div class="container">
      <div class="row">
        <div class="heading wow fadeInUp">
            <h2><?php echo get_field('servicio_titulo', 'option') ?></h2>
            <p><?php echo get_field('servicio_textarea', 'option') ?></p>
        </div>

        <?php $servicios = get_field('servicios', 'option') ?>                                  
        <?php for ($i=0; $i < count($servicios); $i++): ?>                 
          <div class="col-sm-6 col-md-3 wow fadeInLeft">                  
            <div class="icon-box">                        
              <img src="<?php echo $servicios[$i]['imagen']['url'] ?>" alt="">                          
            </div>
            <div class="caption">
              <h3><?php echo $servicios[$i]['titulo'] ?></h3>
              <p><?php echo $servicios[$i]['texto'] ?></p>
            </div>                  
          </div>
        <?php endfor; ?>

      </div>
    </div>
  </section>

  <!-- 
  Contact start
  ==================== -->
  <section id="contact" class="section">
      <div class="container">
          <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-12">
                  <div class="block">
                      <div class="heading wow fadeInUp">
                          <h2>Get In Touch</h2>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et <br> dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex</p>
                      </div>
                  </div>
              </div>
              <div class="col-xs-12 col-sm-12 col-md-5 wow fadeInUp">
                  <div class="block text-left">
                      <div class="sub-heading">
                          <h4>Contact Address</h4>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet quos maxime voluptate doloribus, voluptatum nemo vel ipsa in eligendi, ullam. Ducimus consequuntur labore error hic.</p>
                      </div>
                      <address class="address">
                          <hr>
                          <p>Dhanmondi 32,<br> Dhaka,<br> Bangladesh</p>
                          <hr>
                          <p><strong>E:</strong>&nbsp;hello@foundry.net<br>
                          <strong>P:</strong>&nbsp;+614 3948 2726</p>
                          
                          
                      </address>
                  </div>
              </div>

              <div class="col-xs-12 col-sm-12 col-md-5 col-md-offset-1 wow fadeInUp" data-wow-delay="0.3s">
                  <div class="form-group">
                      <form action="#" method="post" id="contact-form">
                          <div class="input-field">
                              <input type="text" class="form-control" placeholder="Your Name" name="name">
                          </div>
                          <div class="input-field">
                              <input type="email" class="form-control" placeholder="Email Address" name="email">
                          </div>
                          <div class="input-field">
                              <textarea class="form-control" placeholder="Your Message" rows="3" name="message"></textarea>
                          </div>
                          <button class="btn btn-send" type="submit">Send me</button>
                      </form>

                      <div id="success">
                          <p>Your Message was sent successfully</p>
                      </div>
                      <div id="error">
                          <p>Your Message was not sent successfully</p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>

  <section clas="wow fadeInUp">
    <div class="map-wrapper">
    </div>
  </section>

<?php get_footer(); ?>
