@extends('front.layouts.app')
@section('title')
Venice Decor | IT Services Page
@endsection

@section('css')

@endsection
@section('js')

<script>
    // var el=$( 'a[href="#services"]' );
    // $(el).addClass('active');
</script>
@endsection

@section('content')
<main class="main_site">
    <div class="top_section d-flex align-items-center">
      <div class="container">
        <h1 class="text-uppercase text-center page_title text_bold margin_top_4">IT Services</h1>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Services</li>
          </ol>
        </nav>
      </div>
    </div>
    <section class="blog_page">
      <div class="container">
        <div class="row text-left">
          <div class="col-md-12 col-lg-8 left-side">
            <div class="article">
              <div class="article_img br_radius text-center d-flex align-items-center">
              <img class="w-100 br_radius margin_bottom mx-auto" src="{{ asset('assets/images/it.png') }}" alt="article image">
              </div>
              <div class="article_content margin_top">
<p>
Menovatech has the experience and expertise to help your business meet your goals and objectives faster, with less risk. 
Menovatech is a consulting organization who assists customers in achieving their business objectives with the use of technology.

Whether you are looking at Wireless Networking, Data Backup, other IT services, or just want to better understand your current environment, 
Menovatech can provide the expertise to help you build a strategy that is right for you.
</p>
<br>

<h2>Our Vision</h2>
<p> We seek in Menova with our experienced teamwork to be a Trusted partner to provide IT Supporting, IT Outsourcing Services and all 
IT Services in Egypt and Middle East Region. We seek to satisfy our clients’ needs in professional and innovated manners.
<br>
<br>
</p>
<h2> Our Values </h2>
<ul class="bullet"> 
</li> Innovative  </li>
</li> 	Experience </li>
</li> 	Flexibility </li>
</li> Excellency </li>
</li> 	Commitment </li>
</li> Experienced Team work </li>
</ul>
<br>
<br>
<h2> Our IT Services</h2>
<p> Menovatech delivers different levels of IT Supporting, IT Outsourcing and all IT Services depending upon the nature and situations 
of our business partners. However, the following is a list of common reasons why Menova IT Services will be your Choice as a Trusted Partner
 in all IT Services Supporting:</p>
<ul class="bullet">
<li>	All Technical Support Services (Onsite and Remote)  </li>
<li>	IT Infrastructure Services & Building IT Networks  </li>
<li>	Cameras Networks (Building\installation\Support)  </li>
<li>	Supporting All Microsoft products (Building & Support)
<li>	IT Consultancy </li>
<li>	IT Operations </li>
<li>	Virtualization </li>
<li>	Network & Communications </li>
<li>	technical Training </li>
<li>	Desktop & Device Management </li>
<li>	Architecture & Planning </li>
<li>	IT Outsourcing Services  </li>
</ul>

                <!-- <div class="social d-flex align-items-center">
                  <h3 class="text-uppercase margin_right">share on : </h3>
                  <span><a class="facebook" href="#"><i class="fab fa-facebook-f"></i></a></span>
                  <span><a class="twitter" href="#"><i class="fab fa-twitter"></i></a></span>
                  <span><a class="google" href="#"><i class="fab fa-google-plus-g"></i></a></span>
                </div> -->
              </div>
            </div>
          </div>
          <div class="col-md-12 col-lg-4">
            <aside class="aside-sec">
              <div class="categories margin_bottom">
                <h3 class="text-uppercase aside_tit margin_bottom">Our Services</h3>
                <ul>
                   
                <li class="cat_item"><a href="/services/business-development">Business Development<i class="fas fa-chevron-right float-right col_purple"></i></a></li>
                    <li class="cat_item"><a href="/services/digital-marketing">Digital Marketing <i class="fas fa-chevron-right float-right col_purple"></i></a></li>
                    <li class="cat_item"><a href="/services/software-development">Software Development<i class="fas fa-chevron-right float-right col_purple"></i></a></li>
                    <li class="cat_item"><a href="/services/it-solutions">IT Sevices<i class="fas fa-chevron-right float-right col_purple"></i></a></li>
                </ul>
              </div>
            </aside>
          </div>
        </div>
      </div>
    </section>
  </main>
@endsection