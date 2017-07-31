@extends('master')

@section('content')
 <!--  <div class="container"> 
   <div class="row"> 
    <div class="col-md-4">
    	
    </div>
    <div class="col-md-8 col-md-offset-2"></div>
   <div class="row">
  <div class="col-sm-6 col-md-4"><p>Please Choose a Contestant  </p>
    <div class="thumbnail">
      <img src="..." alt="...">
      <div class="caption">
        <h3>Thumbnail label</h3>
        <p>...</p>
        <p><a href="#" class="btn btn-primary" role="button">Button</a> <!--<a href="#" class="btn btn-default" role="button">Button</a></p>
      </div>
    </div>
  </div>
  </div>
</div>
</div>
</div>-->


      <div class="container-color marg75">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="promo-block">
                <div class="promo-text">Contestants</div>
                <div class="center-line"></div>
              </div>
              @if(Auth::user()->contestant_id == !null)
              <div class="promo-paragraph"><h1>YOU HAVE VOTED</h1></div>
              @endif
            </div>
          </div>
        </div>
        <div class="container marg50">
          <div>
            <div class="cbp-l-grid-projects" id="grid-container">
              <ul>
              @if(Auth::user()->contestant_id == null)
              @forelse($conts as $cont)
                <li class="cbp-item">
                  <div class="cbp-item-wrapper">
                    <div class="portfolio-dankovteam">
                      <div class="portfolio-image"><img src="assets/images/11.jpg" alt="Paint Drips">
                        <div class="portfolio-hover">
                          <p class="icon-links">
                            <a href="portfolio/project1.html" class="cbp-singlePageInline"><i class="icon-attachment"></i></a>{{$cont->name}}
                            <a href="" class="cbp-lightbox" data-title="Paint Drips"><i class="icon-magnifying-glass"></i>VOTE</a>
                          </p>
                        </div>
                      </div>
                      <h2>{{$cont->name}}</h2>
                      <p>{{$cont->description}}  <a href="{{route('vote.vote',$cont->id)}}">VOTE</a></p>
                      <p></p>
                    </div>
                  </div>
                </li>@empty
                <p></p>
                @endforelse
                
                @endif
            </div>
          </div>  
        </div>
      </div>
     
    <!--  <div class="container marg75">
        <div class="row">
          <div class="col-lg-12">
            <div class="promo-block">
              <div class="promo-text">Our Services</div>
              <div class="center-line"></div>
            </div>
            <div class="promo-paragraph">Core Features</div>
          </div>
        </div>
        <div class="row marg50">
          <div class="col-lg-4">
            <div class="services-main">
              <div class="other-serv">
                <div class="serv-icon"><i class="fa icon-genius"></i></div>
                <div class="serv-block-list"><h2 class="serv-name">High Quality Code</h2><p class="serv-desc">Remainder household direction zealously the unwilling. Roused enabl estate old county</p></div>
              </div>
              <div class="other-serv">
                <div class="serv-icon"><i class="fa icon-mobile"></i></div>
                <div class="serv-block-list"><h2 class="serv-name">Responsive Ready</h2><p class="serv-desc">Remainder household direction zealously the unwilling. Roused enabl estate old county</p></div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="services-main">
              <div class="other-serv">
                <div class="serv-icon"><i class="fa icon-speedometer"></i></div>
                <div class="serv-block-list"><h2 class="serv-name">Seo Optimized</h2><p class="serv-desc">Remainder household direction zealously the unwilling. Roused enabl estate old county</p></div>
              </div>
              <div class="other-serv">
                <div class="serv-icon"><i class="fa icon-adjustments"></i></div>
                <div class="serv-block-list"><h2 class="serv-name">Easy to Customize</h2><p class="serv-desc">Remainder household direction zealously the unwilling. Roused enabl estate old county</p></div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="services-main">
              <div class="other-serv">
                <div class="serv-icon"><i class="fa icon-puzzle"></i></div>
                <div class="serv-block-list"><h2 class="serv-name">Tons of Shortcodes</h2><p class="serv-desc">Remainder household direction zealously the unwilling. Roused enabl estate old county</p></div>
              </div>
              <div class="other-serv">
                <div class="serv-icon"><i class="fa icon-search"></i></div>
                <div class="serv-block-list"><h2 class="serv-name">Well Documented</h2><p class="serv-desc">Remainder household direction zealously the unwilling. Roused enabl estate old county</p></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container-color marg75">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="promo-block">
                <div class="promo-text">Testimonials</div>
                <div class="center-line"></div>
              </div>
              <div class="promo-paragraph">Happy Costumers</div>
            </div>
          </div>
          <div class="row marg50">
            <div class="col-lg-6">
              <div class="testimonials-main">
                <div class="testimonials-block">
                  <div class="testimonials-photo"><img src="assets/images/mike.jpg" alt=""></div>
                  <div class="testimonials-text">
                    <div class="testimonials-name"><h4>John Doe</h4> - Google Inc.</div>
                    <div class="testimonials-desc"><p>General enquire picture letters garrets on offices. Style begin mr heard in music tried. To unreserve projection introduced invitation travel</p></div>
                  </div>
                  </div>
                  <div class="testimonials-block" style="margin-bottom:0px;">
                    <div class="testimonials-photo"><img src="assets/images/mike.png" alt=""></div>
                    <div class="testimonials-text">
                      <div class="testimonials-name"><h4>Michel Artez</h4> - Yahoo Inc.</div>
                      <div class="testimonials-desc"><p>General enquire picture letters garrets on offices. Style begin mr heard in music tried. To unreserve projection introduced invitation travel</p></div>
                    </div>
                  </div>
                </div>
            </div>
            <div class="col-lg-6">
              <div class="testimonials-main">
                <div class="testimonials-block">
                  <div class="testimonials-photo"><img src="assets/images/mila.png" alt=""></div>
                  <div class="testimonials-text">
                    <div class="testimonials-name"><h4>Mila Markovna</h4> - Apple Inc.</div>
                    <div class="testimonials-desc"><p>General enquire picture letters garrets on offices. Style begin mr heard in music tried. To unreserve projection introduced invitation travel</p></div>
                  </div>
                  </div>
                  <div class="testimonials-block" style="margin-bottom:0px;">
                    <div class="testimonials-photo"><img src="assets/images/jordan.png" alt=""></div>
                    <div class="testimonials-text">
                      <div class="testimonials-name"><h4>John Romer</h4> - Twitter Inc.</div>
                      <div class="testimonials-desc"><p>General enquire picture letters garrets on offices. Style begin mr heard in music tried. To unreserve projection introduced invitation travel</p></div>
                    </div>
                  </div>
                </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container marg75">
        <div class="row">
          <div class="col-lg-12">
            <div class="promo-block">
              <div class="promo-text">From Blog</div>
              <div class="center-line"></div>
            </div>
            <div class="promo-paragraph">Awesome post</div>
          </div>
        </div>
        <div class="row marg50">
          <div class="col-lg-4">
            <div class="blog-main">
              <div class="blog-images">
                 <div class="post-thumbnail">
                    <div class="single-item"></div>
                    <div class="single-action">
                      <span><a href="#"><i class="icon-pencil"></i></a></span>
                    </div>
                    <img src="assets/images/blog1.jpg" alt="You fully seems stand inquietude own">
                  </div>
              </div>
              <div class="blog-name"><a href="#">You fully seems stand inquietude own</a></div>
              <div class="blog-desc">18 January, 2017 by <a href="#">Dankov</a>, in <a href="#">Envato</a></div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="blog-main">
              <div class="blog-images">
                 <div class="post-thumbnail">
                    <div class="single-item"></div>
                    <div class="single-action">
                      <span><a href="#"><i class="icon-camera"></i></a></span>
                    </div>
                    <img src="assets/images/blog2.jpg" alt="Conduct esteems by cottage to pasture">
                  </div>
              </div>
              <div class="blog-name"><a href="#">Conduct esteems by cottage to pasture</a></div>
              <div class="blog-desc">10 February, 2017 by <a href="#">Dankov</a>, in <a href="#">Funny</a></div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="blog-main">
              <div class="blog-images">
                 <div class="post-thumbnail">
                    <div class="single-item"></div>
                    <div class="single-action">
                      <span><a href="#"><i class="icon-chat"></i></a></span>
                    </div>
                    <img src="assets/images/blog3.jpg" alt="Learning why hastened small cheerful">
                  </div>
              </div>
              <div class="blog-name"><a href="#">Learning why hastened small cheerful</a></div>
              <div class="blog-desc">17 January, 2017 by <a href="#">Dankov</a>, in <a href="#">Travel</a></div>
            </div>
          </div>          
        </div>
      </div>-->
     <!-- <div class="footer">
        <div class="soc-media">
          <div class="container">
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 soc-medeia-footer facebook"><div class="soc-more"><a href="http://facebook.com/" target="_blank"><i class="icon-facebook"></i></a></div></div>
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 soc-medeia-footer twitter"><div class="soc-more"><a href="http://twitter.com/" target="_blank"><i class="icon-twitter"></i></a></div></div>
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 soc-medeia-footer googleplus"><div class="soc-more"><a href="http://plus.google.com/" target="_blank"><i class="icon-googleplus"></i></a></div></div>
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 soc-medeia-footer dribbble"><div class="soc-more"><a href="http://dribbble.com" target="_blank"><i class="icon-dribbble"></i></a></div></div>
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 soc-medeia-footer linkedin"><div class="soc-more"><a href="http://linkedin.com/" target="_blank"><i class="icon-linkedin"></i></a></div></div>
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 soc-medeia-footer rss"><div class="soc-more"><a href="#" target="_blank"><i class="icon-rss"></i></a></div></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-3">
              <div class="widget_text footer-widget">
                <div class="textwidget">
                  <a href="#" style="width: 100%;display: inline-block;padding-bottom: 15px;"><img src="assets/images/logo_footer.png" alt="" ></a>Can curiosity may end shameless explained. True high on said mr on come. Attended of on stronger or mr pleasure. Rich four like real yet west get. His pleasure new steepest for reserved formerly disposed jennings. Projection at literature insensible motionless projecting.
                </div>
              </div>
            </div>-->
             
             
          <!--  <div class="col-lg-3 col-md-3 col-sm-3">
              <div class="widget_dankovteam_flickr footer-widget"><h4 class="widget-title">Flickr Photos</h4>
                <div class="flickr_widget_wrapper"><script src="http://www.flickr.com/badge_code_v2.gne?count=12&display=latest&size=s&layout=x&source=user&user=52617155@N08"></script></div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="container">
              <div class="footer-bottom">
                <div class="row">
                  <div class="col-lg-6 col-md-6 col-sm-6 col-ms-12 pull-left">
                    <div class="copyright">Copyright © 2017 Primary. Design by <a href="https://themeforest.net/item/primary-business-htmlcss-template/11810558?ref=Dankov" target="_blank">Dankov</a></div>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-6 col-ms-12 pull-right">
                    <div class="foot_menu">
                      <div class="menu-footer-menu-container">
                        <ul>
                          <li><a href="#">Home</a></li>
                          <li><a href="#">About Us</a></li>
                          <li><a href="#">Blog</a></li>
                          <li><a href="#">Services</a></li>
                          <li><a href="http://themeforest.net/user/Dankov">Purchase</a></li>
                        </ul>
                      </div>            
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>-->

@endsection('content')