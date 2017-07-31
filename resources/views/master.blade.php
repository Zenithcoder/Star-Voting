<!DOCTYPE html>
<html lang="en" class="no-js">
  <head>
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
    <title>Star Voting</title>
    <meta content="primary - responsive and retina ready template" name="description">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport"/>
    <link href="assets/images/favicon.ico" rel="shortcut icon"/>
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/apple-touch-icon-144x144-precomposed.png" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/apple-touch-icon-114x114-precomposed.png" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/apple-touch-icon-72x72-precomposed.png" />
    <link rel="apple-touch-icon-precomposed" href="assets/images/apple-touch-icon-precomposed.png" />
    <!-- JS FILES -->
    <script type="text/javascript" src="{{asset('assets/js/jquery-1.20.2.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/jquery-migrate-1.2.1.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/modernizr.custom.js')}}"></script>
    <!-- CSS FILES -->
    <link href="{{asset('assets/rs-plugin/css/settings.css')}}" media="screen" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/navstylechange.css')}}" media="screen" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/cubeportfolio-3.min.css')}}" media="screen" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/style.css')}}" media="screen" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/responsive.css')}}" media="screen" rel="stylesheet" type="text/css">
  </head>
  <body>
    <div class="wrapper">
<!--      <header>
        <div class="page_head">
            <div id="nav-container" class="nav-container" style="height: auto;">
                <nav role="navigation">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 pull-left">
                                <div class="logo">
                                    <a href="{{route('home')}}"><img src="{{asset('assets/images/logo.png')}}" alt="Logo"></a>
                                </div>
                            </div>
                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-6 pull-right">
                              <div class="menu dankovteam-menu-wrapper">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"></button>
                              <div class="navbar-collapse collapse">
                                <div class="menu-main-menu-container">
                                  <ul>
                                    <li class="current-menu-item"><a href="{{route('home')}}">Home</a></li>
                                    <li><a href="#">Raffle Draw</a> </li>
                                    <li><a href="{{route('home.vote')}}">Vote for Contestant</a> </li>
                                    @if(Auth::check())
                                    <li><span>Welcome {{ Auth::user()->name }} !</span><a href="{{route('user.logout')}}">LogOut</a> </li>
                                    @else
                                    <li><a href="{{route('user.signin')}}">Login</a> </li>
                                    <li><a href="{{route('user.signup')}}">Register</a> </li>@endif
                                    
                                   
                                </ul>
                              </div>
                            </div>
                          </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
      </header>    -->
      @yield('content')

        </div>
      </div>  
    </div>
    <script type="text/javascript" src="{{asset('assets/rs-plugin/js/jquery.themepunch.tools.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/retina.js')}}"></script>
    <script type="text/javascript" src="assets/js/waypoints.min.js"></script>
    <script type="text/javascript" src="assets/js/sticky.js"></script>
    <script type="text/javascript" src="assets/js/jquery.inview.js"></script>
    <script type="text/javascript" src="assets/js/jquery.parallax-1.1.3.js"></script>
    <script type="text/javascript" src="assets/js/jquery.cubeportfolio.min.js"></script>
    <script type="text/javascript" src="assets/js/portfolio-main.js"></script>
    <script type="text/javascript" src="assets/js/main.js"></script>
  </body>
</html>