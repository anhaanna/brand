
@section('header')
<head>
    <title>Brand</title>
    <link rel="stylesheet" type="text/css" href="{{ url('css/main.css') }}">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <script type="text/javascript" src=" {{ url('js/jquery-3.2.1.min.js') }} "></script>
    <script type="text/javascript" src=" {{ url('js/main.js') }} "></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    
</head>
 <div class="header-top">
        <div class="wrapper">
            <div class="top-tools">
                <ul class="top-ul">
                    <li><a href="/" class="tools" title="Home" data="Home"><img src="/images/icons/bg-home.png"></a></li>
                    <li><a href="http://brandskonnect.com/wp-content/uploads/2016/04/BrandsKonnect_Corporate-Profile.pdf" target="_blank" class="tools" download="BrandsKonnect_Corporate-Profile.pdf" title="Corporate Profile"><img src="/images/icons/bg-download.png"></a></li>
                    <li><a href="#" class="tools" title="Contact Us"><img src="/images/icons/bg-phone.png"></a></li>
                    <li><a href="#" class="tools" title="News &amp; Events"><img src="/images/icons/bg-news.png"></a></li>
                </ul>

            <div class="top-form">
                 <form role="search" method="get" class="search-form" action="http://brandskonnect.com/">
                    <input type="search" id="box" placeholder="" value="" name="search" title="Search for:">
                    <input type="submit" value="" style="display:none">

                </form>

            </div>

            </div>
        </div>
    </div>



    <div class="header">
        <div class="wrapper">
            <div class="logo">
                <a href="/">
                    <img src="/images/logo.png">
                </a>
            </div>

            <div class="menu">
                <nav>
                    <ul class="nav-ul">
                        <li class="nav-li nav-li-about">
                            <a href="#">about</a>
                            <div class="dropdown-about">
                                <div class="flex-drop">
                                 
                                <div class="menu-tabs">
                                    <ul>
                                        <li class="about" id="about_1">
                                            <i class="fas fa-chevron-right"></i>
                                            <a href=""> who we are </a>
                                        </li>
                                        <li class="about" id="about_2">
                                            <i class="fas fa-chevron-right"></i>
                                            <a href=""> philosophy </a>
                                        </li>
                                        <li class="about" id="about_3">
                                            <i class="fas fa-chevron-right"></i>
                                            <a href=""> vision & mission </a>
                                        </li>
                                        <li class="about" id="about_4">
                                            <i class="fas fa-chevron-right"></i>
                                            <a href=""> team </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tabs">
                                    <div class="tab" id="tab_1">
                                        <div class="menu-img">
                                            <img src="/images/icons/menu1.jpg">
                                        </div>
                                        <div class="menu-txt">
                                            <p>An emerging markets specialist, we close the chasm between high-potential brands and the fledgling markets of Asia and Africa that represent the largest potential consumer base in the world.</p>
                                            <p class="read-more"><a href="#">Read More</a> </p>
                                        </div>
                                    </div>
                                    <div class="tab"  id="tab_2">
                                        <div class="menu-img">
                                            <img src="/images/icons/menu2.jpg">
                                        </div>
                                        <div class="menu-txt">
                                            <p>The ethics of sincerity, transparency, dependability and professionalism are the four pillars on which our business stands strong. We are care passionately about becoming the pioneers in introducing top-quality brands across multiple channels in key emerging markets.</p>
                                            <p class="read-more"><a href="#">Read More</a> </p>
                                        </div>
                                    </div>
                                    <div class="tab"  id="tab_3">
                                        <div class="menu-img">
                                            <img src="/images/icons/menu3.jpg">
                                        </div>
                                        <div class="menu-txt">
                                            <p>Our bespoke ideas and unconventional approach will make us the most dependable and preferred distribution and marketing partner for consumer brands in emerging markets. Our long-term vision sees our business relationship encompass a lot – right from a brand’s development to its end-to-end management to handling a multi-category product portfolio with our local partners.</p>
                                            <p class="read-more"><a href="#">Read More</a> </p>
                                        </div>
                                    </div>
                                    <div class="tab"  id="tab_4">
                                        <ul>
                                            <li>
                                               <a href="#" style="font-size:12px;color:#545355;border:none;padding:0px;font-weight:normal"><img src="/images/icons/img1.png"><br>

                                                        EXECUTIVE <br>

                                                        DIRECTOR</a></li> 
                                            </li>
                                            <li><a href="http://brandskonnect.com/about/team#amit" style="font-size:12px;color:#545355;border:none;padding:0px;font-weight:normal"><img src="/images/icons/img2.png"><br>

                                                        BUSINESS <br>

                                                        DIRECTOR</a>
                                            </li>
                                            <li><a href="#" style="padding:0px;"><img src="/images/icons/arrow.png"></a></li>


                                        </ul>
                                    </div>
                                </div>

                                </div>
                            </div>
                        </li>
                        <li class="nav-li">
                            <a href="#">core capabilitis</a>
                        </li>
                        <li class="nav-li">
                            <a href="#">brands</a>
                        </li>
                        <li class="nav-li">
                            <a href="#">reach</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        
    </div>




@show
@yield('content')
@section('footer')
    <div id="footer">
    <div class="wrapper">
    <div class="footer-box footer-box1">
        <h5 class="footer-title">Testimonials</h5>
        <div class="btm-bar"></div>
        <div class="footer-test">
            <div class="footer-img">
                <img src="/images/staff/IMG_1.jpg">
            </div>
            <div class="foot-test">
                <a href="#" class="footer-rev">

                    <p class="footer-p" style="color:#6d6e71;margin-bottom:15px;"><span style="color:#00abef;text-transform:uppercase">
                        <strong>Syed Sheharyar Ali – Executive Director, TREET Group of Companies
                            <br></strong></span>
                    </p>

                    <em>
                        <blockquote> Brands Konnect has proven to be an excellent partner in helping expand TREET’s business in the African continent within a short...</blockquote>
                    </em> 

                </a> 
            </div>
        </div>
    </div>
        <div class="footer-box footer-box2">
            <h5 class="footer-title">Sitemap</h5>
            <div class="btm-bar"></div>
            <div class="quick">
                <ul>
                    <li class="menu-item quick-about"><a href="#">ABOUT</a>
                        <ul class="sub-menu">
                            <li><a href="#">WHO WE ARE</a></li>
                            <li><a href="#">PHILOSOPHY</a></li>
                            <li><a href="#">VISION</a></li>
                            <li><a href="#">TEAM</a></li>
                        </ul>
                    </li>
                    <li class="menu-item"><a href="#">CORE CAPABILITIES</a></li>
                    <li class="menu-item"><a href="#">BRANDS</a></li>
                    <li class="menu-item"><a href="#">REACH</a></li>
                    <li class="menu-item"><a href="#">NEWS & EVENTS</a></li>
                    <li class="menu-item"><a href="#">TESTIMONIALS</a></li>
                    <li class="menu-item"><a href="#">JOIN US</a></li>
                    <li class="menu-item"><a href="#">CONTACT</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-box footer-box3">
            <div class="footer-box31">
                <h5 class="footer-title">konnect</h5>
                <div class="btm-bar"></div>
                <div class="footer-social">
                    <a href="https://www.linkedin.com/company/10517318" target="_blank" class="linkedin-icon social-icon"> <i class="fab fa-linkedin-in"></i></a>
                    <a href="https://www.facebook.com/BrandsKonnect/" target="_blank" class="facebook-icon social-icon"> <i class="fab fa-facebook-f"></i> </a>
                </div>
            </div>
            <div class="footer-box31">
                <h5 class="footer-title">SUBSCRIBE FOR NEWSLETTER</h5>
                <div class="btm-bar"></div>
                <div class="footer-form">
                    <form method="post" id="subscribe-form" class="validate"">

                        <input type="email" value="" name="email" class="email" id="sub-email" placeholder="Enter your email here" required="">

                        <input type="submit" value="Subscribe" name="subscribe" id="sub-submit" class="button">

                  <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->

              </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="footer-bottom"> 


  <div class="wrapper">
    <div class="row">

      <p class="copyright"> © 2016 Brands Konnect. All Copyright Reserved.</p>
      <p class="cop-privacy"><a href="#" style="color:#fff">Privacy Policy</a></p>

    </div>

  </div>

</div>
@show