<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>What&#39;s New in Bootstrap 4</title>
    <meta name="description" content="One page Bootstrap 4 theme to show What&#39;s new in Bootstrap 4. Discover new features like cards, the xl grid tier, em sizing and how to convert from Bootstrap 3." />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="generator" content="Codeply">

    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" />
    <link href="//cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.1/animate.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />
    <link rel="stylesheet" href="css/styles.css" />
  </head>
  <body class="bg-faded">
    <header id="first">
    <div class="header-content">
        <div class="inner">
            <h1>What's New in Bootstrap 4</h1>
            <h5 class="wow fadeIn text-normal wow fadeIn">A free, one-page theme to highlight the new features</h5>
            <a href="#one" class="btn btn-primary-outline btn-xl page-scroll wow fadeInUp m-t-3">Get Started</a>
        </div>
    </div>
</header>
<nav id="topNav" class="navbar fixed-top navbar-toggleable-sm">
    <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsingNavbar">
            <span>☰</span>
        </button>
        <a class="navbar-brand page-scroll" href="#first">Bootstrap 4</a>
        <div class="collapse navbar-collapse" id="collapsingNavbar">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#one">Cards</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#two">Flexbox</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#examples">Examples</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#three">5 Tiers</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#four">More</a>
                </li>
            </ul>
            <ul class="nav navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link page-scroll" data-toggle="modal" title="A free Bootstrap theme" href="#aboutModal">About</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<section id="one">
       <div class="container wow fadeInUp">
        <h2>Cards</h2>
        <p class="lead">
            What you notice first in <a href="http://v4-alpha.getbootstrap.com/">Bootstrap 4</a> is that <code>.panel</code> and <code>.well</code> have been replaced by the <code>.card</code>. This makes a lot of sense as "cards" are one of the more well known trends in responsive design.
            The <a href="">Bootstrap 4 Cards</a> can be singular, grouped together (as shown) or <a href="">equal height</a>. There are many different layout and content options.
        </p>
        <div class="card-group">
            <!-- card -->
            <div class="card">
                <img class="card-img-top img-fluid" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sample13.jpg" alt="Card image cap">
                <div class="card-block">
                    <h4 class="card-title">Consise</h4>
                    <p class="card-text">Cards are a good way to display content composed of different types of objects. They’re well-suited for presenting similar objects whose size or supported actions vary, like headings and photos with captions.</p>
                </div>
            </div>
            <!-- card -->
            <div class="card">
                <img class="card-img-top img-fluid" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sample19.jpg" alt="Card image cap">
                <div class="card-block">
                    <h4 class="card-title">Grouped</h4>
                    <p class="card-text">Use card groups to render equal height cards without gutters between the cards. Use <code>.card-deck</code> for cards that aren’t attached to each another.</p>
                </div>
            </div>
            <!-- card -->
            <div class="card">
                <img class="card-img-top img-fluid" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sample14.jpg" alt="Card image cap">
                <div class="card-block">
                    <h4 class="card-title">Same Height</h4>
                    <p class="card-text">A frequent problem occurs when you have multiple items in a row with content of varying height. Thanks to flexbox (and display:table) we now have equal height cards!</p>
                    
                </div>
            </div>
        </div>
    </div>
</section>
<section id="two" class="bg-alt">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="mt-0 text-primary">Flexbox</h2>
                <hr class="primary">
            </div>
        </div>
    </div>
    <div class="container wow fadeInUp">
        <div class="row">
            <div class="col-lg-4 col-md-4 text-center">
                <div class="feature">
                    <i class="icon-lg ion-ios-grid-view-outline wow fadeIn" data-wow-delay=".1s"></i>
                    <h6 class="text-uppercase">Easier</h6>
                    <p class="text-muted m-b-0">Flexbox provides <a href="http://v4-alpha.getbootstrap.com/getting-started/flexbox">simpler, more flexible layout</a> options like vertical centering.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 text-center">
                <div class="feature">
                    <i class="icon-lg ion-social-sass wow fadeInUp"></i>
                    <h6 class="text-uppercase">Sass-y</h6>
                    <p class="text-muted m-b-0">Use SASS to easily customize your Bootstrap 4 projects.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 text-center">
                <div class="feature">
                    <i class="icon-lg ion-social-css3-outline wow fadeIn" data-wow-delay=".1s"></i>
                    <h6 class="text-uppercase">It's Modern</h6>
                    <p class="text-muted m-b-0">Introduced in CSS3, flexbox won't work in older browsers like <a href="http://caniuse.com/#feat=flexbox">IE9</a>.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="last">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <h2 class="margin-top-0 wow fadeIn">Get in Touch</h2>
                <hr class="primary">
                <p>We love feedback. Fill out the form below and we'll get back to you as soon as possible.</p>
            </div>
            <div class="col-lg-10 offset-lg-1 text-center">
                <form class="contact-form row">
                    <div class="col-md-4">
                        <label></label>
                        <input type="text" class="form-control" placeholder="Name">
                    </div>
                    <div class="col-md-4">
                        <label></label>
                        <input type="text" class="form-control" placeholder="Email">
                    </div>
                    <div class="col-md-4">
                        <label></label>
                        <input type="text" class="form-control" placeholder="Phone">
                    </div>
                    <div class="col-md-12">
                        <label></label>
                        <textarea class="form-control" rows="9" placeholder="Your message here.."></textarea>
                    </div>
                    <div class="col-md-4 offset-md-4">
                        <label></label>
                        <button type="button" data-toggle="modal" data-target="#alertModal" class="btn btn-primary btn-block btn-lg">Send <i class="ion-android-arrow-forward"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="col-6 col-sm-3">
                <h6 class="text-uppercase">Bootstrap 4</h6>
                <ul class="list-unstyled">
                    <li><a href="https://medium.com/@bootply/bootstrap-4-whats-new-visual-guide-c84dd81d8387" target="ext">What's New</a></li>
                    <li><a href="http://codeply.com/tagged/bootstrap-4" target="ext">Examples</a></li>
                    <li><a href="http://getbootstrap.com" target="ext">Official</a></li>
                    <li><a href="http://www.codeply.com/go/p/bootstrap_4.0.alpha" target="ext">Playground</a></li>
                </ul>
            </div>
            <div class="col-6 col-sm-3 column">
                <h6 class="text-uppercase">About</h6>
                <ul class="list-unstyled">
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="#">Delivery Information</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms &amp; Conditions</a></li>
                </ul>
            </div>
            <div class="col-12 col-sm-3 column">
                <h6 class="text-uppercase">Stay Posted</h6>
                <form>
                    <div class="form-group">
                        <input type="text" class="form-control" title="No spam, we promise!" placeholder="Tell us your email">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary" data-toggle="modal" data-target="#alertModal" type="button">Subscribe for updates</button>
                    </div>
                </form>
            </div>
            <div class="col-12 col-sm-3 text-right">
                <h6 class="text-uppercase">Follow</h6>
                <ul class="list-inline">
                    <li class="list-inline-item"><a rel="nofollow" href="" title="Twitter"><i class="icon-lg ion-social-twitter-outline"></i></a>&nbsp;</li>
                    <li class="list-inline-item"><a rel="nofollow" href="" title="Facebook"><i class="icon-lg ion-social-facebook-outline"></i></a></li>
                </ul>
            </div>
        </div>
        <br>
        <span class="float-right text-muted small"><a href="http://bootstrap4.guide">Made by Themes.guide</a> ©2015-2017 Company</span>
    </div>
</footer>
<div id="galleryModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body text-center">
                <img src="//placehold.it/1200x700/222?text=..." id="galleryImage" class="center-block img-fluid">
                <p>
                    <br>
                    <button class="btn btn-primary btn-lg" data-dismiss="modal" aria-hidden="true">Close <i class="ion-android-close"></i></button>
                </p>
            </div>
        </div>
    </div>
</div>
<div id="aboutModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body text-center">
                <h2 class="text-center">Bootstrap 4 Theme</h2>
                <h6 class="text-center">A free, responsive template</h6>
                <p class="text-center">
                    This is a customized, single page example template that demonstrates some of the new features to check out in Bootstrap 4. Some of the features include Google Montserrat fonts, animation using Dan Eden's animate.css and the WOW jQuery plugin to watch the scrolling.
                </p>
                <p class="text-center"><a href="http://bootstrap4.guide">Download at Bootstrap4.guide</a></p>
                <br>
                <button class="btn btn-primary btn-lg" data-dismiss="modal" aria-hidden="true"> OK </button>
            </div>
        </div>
    </div>
</div>
<div id="alertModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-body text-center">
                <h2 class="text-center">Nice Job!</h2>
                <p class="text-center">You clicked the button, but it doesn't actually go anywhere because this is only a demo.</p>
                <p class="text-center"><a href="https://medium.com/@bootply/bootstrap-4-whats-new-visual-guide-c84dd81d8387">Learn More</a></p>
                <br>
                <button class="btn btn-primary btn-lg" data-dismiss="modal" aria-hidden="true">OK <i class="ion-android-close"></i></button>
            </div>
        </div>
    </div>
</div>
    <!--scripts loaded here-->
    
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.js"></script>
    <script src="js/scripts.js"></script> </body>
</html>