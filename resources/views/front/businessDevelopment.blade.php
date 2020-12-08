@extends('front.layouts.app')
@section('title')
Venice Decor | Business Development Page
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
        <h1 class="text-uppercase text-center page_title text_bold margin_top_4">Business Development</h1>
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
              <img class="w-100 br_radius margin_bottom mx-auto" src="{{ asset('assets/images/bd.png') }}" alt="article image">
              </div>
              <div class="article_content margin_top">
             
              <h2>Our Team </h2>
<p> We are the fastest growing IT Services, Digital Marketing and Web Design & Development Company, managed to approve our success in internet solutions
 field in a short period of time. We seek to provide our services to our clients with more flexibility and efficiency by the following elements:</p>
 <br>
 <br>
<h2>Specialized Teamwork</h2>
<p> Our attitude based on creating the best outcome of the new technology by using the creative teamwork skill to motivate
 it well in order to provide the best quality for our client.</p>
 <br>
 <br>

 <h2>Creative Teamwork </h2>
<p>  we have faith that the future is requires to keep pace with the renewed technology. So, our teamwork thinking to 
take the advantage of the best software solutions.</p>
<br>
<br>

<h2> Collaborative Environment</h2>
<p> we have a professional team, work with the team spirit to provide the best quality services for clients.</p>
<br>
<br>

<h2> Our services</h2>
<p> Menovatech-Marketing is gladly serving more than 20 clients in Egypt & K.S.A,  providing them with 
highest value of Business Development, IT Services, Software Development and Digital Marketing Services.
<ul class="bullet">
<li>	Sales  </li>
<li>	Marketing </li>
<li>	Product Management </li>
<li>	Project Management </li>
<li>	Vendor Management </li>

</ul>
</p> 
                
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
                    <li class="cat_item"><a href="/services/it-Sevices">IT Solutions<i class="fas fa-chevron-right float-right col_purple"></i></a></li>
                </ul>
              </div>
            </aside>
          </div>
        </div>
      </div>
    </section>
  </main>
@endsection