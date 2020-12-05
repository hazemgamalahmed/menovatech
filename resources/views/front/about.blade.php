@extends('front.layouts.app')
@section('title')
Venice Decor | About Us Page
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
        <h1 class="text-uppercase text-center page_title text_bold margin_top_4">about agency</h1>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">About Us</li>
          </ol>
        </nav>
      </div>
    </div>
    <section class="about_us">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-6 col-lg-3 text-center">
            <div class="about_serv margin_bottom">
              <i class="fas fa-pen-nib about_icon "></i>
              <h3 class="text-uppercase">creative design</h3>
            </div>
            <div class="about_serv">
              <i class="far fa-clock about_icon"></i>
              <h3 class="text-uppercase">Less time</h3>
            </div>
          </div>
          <div class="col-sm-12 col-md-6 col-lg-3 text-center">
            <div class="about_serv margin_bottom">
              <i class="fas fa-percent about_icon"></i>
              <h3 class="text-uppercase">big offers</h3>
            </div>
            <div class="about_serv">
              <i class="fas fa-users-cog about_icon"></i>
              <h3 class="text-uppercase">creative team</h3>
            </div>
          </div>
          <div class="col-md-12 col-lg-6">
            <div class="accordion">
              <div class="accordion_fillter margin_bottom d-flex">
                <h3 id="story" class="fillter_btn active margin_right">Story</h3>
                <!-- <h3 id="mission" class="fillter_btn margin_right">Mission</h3> -->
                <h3 id="vision" class="fillter_btn">Vision</h3>
              </div>
              <div class="accordion_tab animated fadeInUp open" data-target="story">
              Menova is a platform was founded in 2019, We provide all IT Supporting Services, IT Software Development Solutions and Digital Marketing Services. We deliver different levels of IT Supporting, IT Outsourcing Services, Software Development Solutions and all IT Services depending upon the nature, situations and requirements of our clients and partners. We have an experienced teamwork and have a big network of freelancers. And we seek to be a trusted partner to provide all the above IT Services in Egypt and Middle East Region.              </div>
              <!-- <div class="accordion_tab animated fadeInUp" data-target="mission">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
              </div> -->
              <div class="accordion_tab animated fadeInUp" data-target="vision">
              Our vision in Menovatech is to make the lives or our customers better. We focus on the needs of each individual client and what will help make them successful. 
We seeks in Menovatech to be Trusted partner for all IT Support Services, IT Outsourcing Services, IT Software Development Solutions, Digital Marketing services & strategies and all IT Services in Egypt and Middle East Region.
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="about_desc">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-12 col-lg-6">
            <img class="about_img w-100" src="/front/img/screen.png" alt="pic">
          </div>
          <div class="col-md-12 col-lg-6 text-white padding_left_4">
            <h2 class="text-capitalize">we help you to find what you want</h2>
            <p>  We provide IT Software Development Solutions and Digital Marketing Services. 
            We deliver different levels of IT Supporting,
             IT Outsourcing Services, Software Development Solutions and all IT Services.</p>
          </div>
        </div>
      </div>
    </section>

    <br>
    <br>
    <br>
    <br>
    <!--========== start Team section =============-->
    <!-- <section class="blue text-center about_team">
      <div class="container">
        <h2 class="text-uppercase">meet our TEAM</h2>
        <p class="sec_desc">Lorem ipsum dolor sit amet consectetur adipisicing elitsed eiusmod
          tempor enim minim veniam quis notru exercit ation Lorem ipsum dolor
          sit amet.Veniam quis notru exercit.</p>
        <div id="team_slider" class="owl-carousel blue margin_top_4">
          <div class="team_item">
            <div class="pic">
              <img class="w-100" src="/front/img/client1.jpg" alt="pic">
                <ul class="social-links d-flex">
                  <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                  <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                  <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                </ul>
            </div>
            <div class="team-content">
              <h3 class="title text-uppercase">Nagy noor</h3>
              <span class="post text-capitalize">web developer</span>
            </div>
          </div>
          <div class="team_item">
            <div class="pic">
              <img class="w-100" src="/front/img/client2.jpg" alt="pic">
              <ul class="social-links d-flex">
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
              </ul>
            </div>
            <div class="team-content">
              <h3 class="title text-uppercase">perrla mohammed</h3>
              <span class="post text-capitalize">web designer</span>
            </div>
          </div>
          <div class="team_item">
            <div class="pic">
              <img class="w-100" src="/front/img/client3.jpg" alt="pic">
              <ul class="social-links d-flex">
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
              </ul>
            </div>
            <div class="team-content">
              <h3 class="title text-uppercase">tamer ahmed</h3>
              <span class="post text-capitalize">social media</span>
            </div>
          </div>
          <div class="team_item">
            <div class="pic">
              <img class="w-100" src="/front/img/client4.jpg" alt="pic">
              <ul class="social-links d-flex">
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
              </ul>
            </div>
            <div class="team-content">
              <h3 class="title text-uppercase">Williamson</h3>
              <span class="post text-capitalize">ui/ux designer</span>
            </div>
          </div>
          <div class="team_item">
            <div class="pic">
              <img class="w-100" src="/front/img/client2.jpg" alt="pic">
              <ul class="social-links d-flex">
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
              </ul>
            </div>
            <div class="team-content">
              <h3 class="title text-uppercase">perrla mohammed</h3>
              <span class="post text-capitalize">web designer</span>
            </div>
          </div>
        </div>
      </div>
    </section> -->
  </main>
@endsection