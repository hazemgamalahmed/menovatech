@extends('front.layouts.app')
@section('title')
Venice Decor | Digital Marketing Page
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
        <h1 class="text-uppercase text-center page_title text_bold margin_top_4"> Digital Marketing</h1>
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
                <img class="w-80 br_radius margin_bottom mx-auto" src="{{ asset('assets/images/dm.png') }}" alt="article image">
              </div>
              <div class="article_content margin_top">
 
<!-- <div class="bullet"> -->
<h2>Our vision in Menovatech-Marketing</h2>
<ul class="bullet">
<li> To be the first company in Egypt &MENA that provides integrated Digital 
Marketing services starting from situation analysis till delivering the estimated promised results.</li>

<li> To serve all kinds of businesses from small to international companies, 
as services are customized to each client based on his needs.</li>

<li> <p> We Seek to combine expertise from competitive intelligence with internet marketing professionals 
to support its clients with full integrated internet marketing strategy and strategy support for their internet related investment decisions.</p></li>
</ul>
<!-- </div> -->


<h2>Our Team </h2>
<p> We are the fastest growing Digital Marketing and web design Company, managed to approve our success in internet solutions
 field in a short period of time. We seek to provide our services to our clients with more flexibility and efficiency by the following elements:</p>

<h2>Specialized Teamwork</h2>
<p> Our attitude based on creating the best outcome of the new technology by using the creative teamwork skill to motivate
 it well in order to provide the best quality for our client.</p>

 <h2>Creative Teamwork </h2>
<p>  we have faith that the future is requires to keep pace with the renewed technology. So, our teamwork thinking to 
take the advantage of the best software solutions.</p>

<h2> Collaborative Environment</h2>
<p> we have a professional team, work with the team spirit to provide the best quality services for clients.</p>

<h2> Our services</h2>
<p> Menovatech-Marketing is gladly serving more than 200 clients in Egypt & K.S.A,  providing them with 
highest value of digital marketing services.
<ul class="bullet">
<li>	Advertising Agencies  </li>
<li>	Content Marketing Agencies </li>
<li>	User Experience Agencies </li>
<li>	Digital Marketing Agencies </li>
<li>	Video Production Agencies </li>
<li>	Animation Studios </li>
<li>	Design Agencies </li>
<li>	Web Development Agencies </li>
<li>	Social Media Agencies </li>
<li>	Ecommerce Agencies </li>
<li>	3D Agencies </li>
<li>	Online Advertising Agencies </li>
<li>	Email Marketing Agencies </li>
<li>	Media Agencies </li>
<li>	SEO Agencies </li>
<li>	Event Agencies </li>
<li>	Gaming Agencies </li>
<li>	Data Consulting Agencies </li>
<li>	Web Analytics Agencies </li>
<li>	Photography Studios </li>
<li>	Public Relations Agencies </li>
<li>	Copywriting Agencies </li>
<li>	Mobile App Development Agencies </li>
<li>	Web Design Agencies </li>
<li>	Branding Agencies </li>
<li>	Innovation Consulting Agencies </li>
</ul>
</p> 


<h2>Our value</h2>
<p>
<ul class="bullet">
<li>	Menovatech-Marketing Established in 2019, It has showed a fast growing performance in the field of E-marketing 
and web Design that the company turned -from being limited E-marketing business to an integrated internet solutions 
provider managed to open new markets across Egypt and the Middle East in the future. </li>
<li> We have faith that the future always requires to keep pace with the renewed technology. So, our attitude based on
 creating the best outcome of the new digital -technology by using a creative team work thinking through a collaborative work environment.
<li>	Widely we deal with clients from different industries. So, we specify our service to -meet their various business </li>
requirements. Our team of experts keep focusing on -the client needs,  examining his points of weakness,  threats and strengthens, 
 building his unique campaign that initiate with unique design through to product development delivery and results analysis.</li>
 </ul>
 </p>
 <br>
 <br>
 


                <div class="social d-flex align-items-center">
                  <h3 class="text-uppercase margin_right">share on : </h3>
                  <span><a class="facebook" href="#"><i class="fab fa-facebook-f"></i></a></span>
                  <span><a class="twitter" href="#"><i class="fab fa-twitter"></i></a></span>
                  <span><a class="google" href="#"><i class="fab fa-google-plus-g"></i></a></span>
                </div>
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