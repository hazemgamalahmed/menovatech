@extends('front.layouts.app')
@section('title')
Venice Decor | Software Development Page
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
        <h1 class="text-uppercase text-center page_title text_bold margin_top_4">Software Development</h1>
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
              <img class="w-100 br_radius margin_bottom mx-auto" src="{{ asset('assets/images/sw.png') }}" alt="article image">
              </div>
              <div class="article_content margin_top">

            <h2> Why we are your choice?</h2>
We have our experienced teamwork and also have a big network of freelancers with many projects categorized according industries, 
So you will get your App in a professional and fast way.

<br>
<br>
<h2>Our Target </h2>
One of Menovatech Services is to be a trusted partner as a software development house we design and develop professional Business 
Solutions which are presented to our customers with the most friendly and easy to use interfaces. And we have an experienced teamwork
 to analysis and develop our client’s needs,
 <br>
 <br>

 <h2>Our Values</h2>
 <ul class="bullet"> 
<li>	Innovative  </li>
<li>	Experience </li>
<li>	Flexibility </li>
<li>Excellency </li>
<li>	Commitment </li>
<li>	Experienced Team work </li>
</ul>
<br>
<br>

<h2>Our Software Developing Fields:</h2>
<ul class="bullet">
<li>	Desktop Development Solutions  </li>
<li>	Web Development Solutions </li>
<li>	Mobile Applications Solutions </li>
<li>	Business Apps analysis  </li>
<li>	Analysis clients Requirements in A professional manner. </li>
</ul>
<br>
<br>
 
<h2>Our Partners:</h2>
<ul class="bullet">
<li>Learnadora </li>
<li>TheBigLab</li>
<li>Mattagerna </li>                                                                 
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