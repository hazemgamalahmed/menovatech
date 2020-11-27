@extends('front.layouts.app')
@section('title')
Menova Tech | Home Page
@endsection

@section('js')
<script>
    // var el=$( 'a[href="#home"]' );
    // $(el).addClass('active');
</script>
@endsection

@section('content')
<main class="main_site" id="home">
    <!--========== start hero section =============-->
    <section id="hero_section" class="blue bg_blue_grad text-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-12 col-lg-6 padding_right">
                    <div class="hero_content">
                        <h1 class="text-uppercase hero_tit text_animation" data-in-effect="bounceIn">START YOUR BUSINESS WITH ZAGENCY</h1>
                        <p class="hero_desc wow fadeInDown" data-wow-delay="1.5s">Lorem Ipsum
                            is simply dummy text of the printing and typesetting industry.Lorem
                            Ipsum has been the industry's standard dummy text ever since the 1500s
                        </p>
                    </div>
                    <form id="subscribe_form" class="wow fadeInUp margin_top" data-wow-delay="1.5s" action="https://ah-theme.us17.list-manage.com/subscribe/post?u=1deb8f74c591046810c8ac1ec&amp;id=ebe56afd26" method="post">
                        <div class="d-flex justify-content-center align-content-center">
                            <input id="subscribe_email" class="form-input w-100 border_white" type="email" name="subscribe_email" placeholder="Enter Your Email" required>
                            <button id="subscribe_btn" class="sub_btn btn_green btn_style text-uppercase" type="submit" name="button">Subscribe</button>
                        </div>
                        <p class="subscription_success"></p>
                        <p class="subscription_error"></p>
                    </form>
                </div>
                <div class="col-md-12 col-lg-6">
                    <div class="hero_img text-center" >
                        <img class="mw-100 wow fadeInUp" data-wow-delay="2s" src="front/img/top_img.png" alt="pic">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--========== start services section =============-->
    <section id="services" class="text-center blue">
        <div class="container">
            <h1 class="sec_title text-uppercase">OUR SERVICE</h1>
            <p class="sec_desc">Lorem ipsum dolor sit amet consectetur adipisicing elitsed eiusmod tempor enim minim veniam quis notru exercit ation Lorem ipsum dolor sit amet.Veniam quis notru exercit.</p>
            <div class="row">
                @foreach ($services as $service)
                <a href="{{ asset('service/'.$service->id) }}" class="col-md-12 col-lg-4">
                    <div class="serv_item margin_top_4 wow fadeInUp" data-wow-delay="0s">
                        {!! $service->icon !!}
                        <h2 class="margin_top margin_bottom serv_tit">{{ $service->name }}</h2>
                        <p class="serv_desc">{{ $service->description }}</p>
                        <div class="serv_hover text-white bg_blue_grad">
                        </div>
                    </div>
                </a>
                @endforeach
            </div>
        </div>
    </section>
    <!--========== start portfolio section =============-->
    <section id="portfolio" class="text-center blue">
        <div class="container">
            <h1 class="sec_title text-uppercase">OUR PROJECTS</h1>
            <p class="sec_desc">Lorem ipsum dolor sit amet consectetur adipisicing elitsed eiusmod tempor enim minim veniam quis notru exercit ation Lorem ipsum dolor sit amet.Veniam quis notru exercit.</p>
            <div class="toolbar mb2 mt2 margin_top_4">
                <button class="fil_btn fil-cat active" data-rel="all">All</button>
                <button class="fil_btn fil-cat" data-rel="web">Websites</button>
                <button class="fil_btn fil-cat" data-rel="design">Designs</button>
                <button class="fil_btn fil-cat" data-rel="social">Social Media</button>
            </div>
            <div id="portfolio_items" class="margin_top">
                <div class="row">
                    <div class="col-sm-6 col-md-4 portfolio_item scale-anm web all">
                        <a href="#">
                            <div class="portfolio_img">
                                <img src="front/img/portfolio1.jpg" alt="pic">
                            </div>
                            <div class="portfolio_content">
                                <h3 class="text-uppercase">web project</h3>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4 portfolio_item scale-anm design all">
                        <a href="#">
                            <div class="portfolio_img">
                                <img src="front/img/portfolio2.jpg" alt="pic">
                            </div>
                            <div class="portfolio_content">
                                <h3 class="text-uppercase">disigning project</h3>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4 portfolio_item scale-anm social all">
                        <a href="#">
                            <div class="portfolio_img">
                                <img src="front/img/portfolio3.jpg" alt="pic">
                            </div>
                            <div class="portfolio_content">
                                <h3 class="text-uppercase">social project</h3>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4 portfolio_item scale-anm web all">
                        <a href="#">
                            <div class="portfolio_img">
                                <img src="front/img/portfolio4.jpg" alt="pic">
                            </div>
                            <div class="portfolio_content">
                                <h3 class="text-uppercase">web project</h3>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4 portfolio_item scale-anm design all">
                        <a href="#">
                            <div class="portfolio_img">
                                <img src="front/img/portfolio5.jpg" alt="pic">
                            </div>
                            <div class="portfolio_content">
                                <h3 class="text-uppercase">disigning project</h3>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4 portfolio_item scale-anm social all">
                        <a href="#">
                            <div class="portfolio_img">
                                <img src="front/img/portfolio6.jpg" alt="pic">
                            </div>
                            <div class="portfolio_content">
                                <h3 class="text-uppercase">social project</h3>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <a class="btn_style blu_grad_btn margin_top_4 d-inline-block text-uppercase" href="portfolio.html">see more projects</a>
        </div>
    </section>
    <!--========== start Testimonial section =============-->
    <section id="testimonial" class="blue sec_bg_gray">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 col-lg-3">
                    <div class="counter_data text-center">
                        <i class="fas fa-users text_green counter_icon"></i>
                        <h2 class="counter_value">200</h2>
                        <h3 class="text-uppercase counter_tit">Happy Clients</h3>
                    </div>
                    <div class="counter_data text-center">
                        <i class="fas fa-project-diagram text_green counter_icon"></i>
                        <h2 class="counter_value">300</h2>
                        <h3 class="text-uppercase counter_tit">Projects</h3>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="counter_data text-center">
                        <i class="fas fa-calendar-alt text_green counter_icon"></i>
                        <h2 class="counter_value">20</h2>
                        <h3 class="text-uppercase counter_tit">events</h3>
                    </div>
                </div>
                <div class="col-md-12 col-lg-6">
                    <div class="clients_desc">
                        <h2 class="text-uppercase">WHAT CLIENTS SAY</h2>
                        <p class="client_opinion">Lorem ipsum dolor sit amet consectetur adipisicing elitsed eiusmod
                            tempor enim minim veniam quis notru exercit ation Lorem ipsum dolor
                            sit amet.Veniam quis notru exercit.</p>
                        </div>
                        <div id="clients_slider" class="owl-carousel blue">
                            <div class="client_item">
                                <p class="client_opinion">Lorem ipsum dolor sit amet consectetur adipisicing elitsed eiusmod
                                    tempor enim minim veniam quis notru exercit ation Lorem ipsum dolor
                                    sit amet.Veniam quis notru exercit.</p>
                                    <div class="d-flex align-items-center">
                                        <img class="client_image" src="front/img/client1.jpg" alt="pic">
                                        <h3 class="client_name text-capitalize">Nagy el.saied</h3>
                                    </div>
                                </div>
                                <div class="client_item">
                                    <p class="client_opinion">Lorem ipsum dolor sit amet consectetur adipisicing elitsed eiusmod
                                        tempor enim minim veniam quis notru exercit ation Lorem ipsum dolor
                                        sit amet.Veniam quis notru exercit.</p>
                                        <div class="d-flex align-items-center">
                                            <img class="client_image" src="front/img/client2.jpg" alt="pic">
                                            <h3 class="client_name text-capitalize">perla mohammed</h3>
                                        </div>
                                    </div>
                                    <div class="client_item">
                                        <p class="client_opinion">Lorem ipsum dolor sit amet consectetur adipisicing elitsed eiusmod
                                            tempor enim minim veniam quis notru exercit ation Lorem ipsum dolor
                                            sit amet.Veniam quis notru exercit.</p>
                                            <div class="d-flex align-items-center">
                                                <img class="client_image" src="front/img/client3.jpg" alt="pic">
                                                <h3 class="client_name text-capitalize">ali essa</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!--========== start contact us section =============-->
                    <section id="contact_us" class=" blue sec_bg_gray">
                        <div class="contact__us">
                            <div class="container">
                                <h1 class="text-uppercase text-center"><span>Get In Touch</span></h1>
                                <p class="sec_desc margin_bottom text-center">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                <div class="row contact-us margin_top_4 wow fadeInUp">
                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                        <div class="contact_info text-left">
                                            <div class="d-flex contact_item align-items-center margin_bottom align-content-center">
                                                <i class="fas fa-map-marker-alt margin_right info_icon"></i>
                                                <div>
                                                    <p class="text-uppercase text_bold">location</p>
                                                    <p class="text-uppercase"> 10,Park Street,London</p>
                                                </div>
                                            </div>
                                            <div class="d-flex contact_item align-items-center margin_bottom align-content-center">
                                                <i class="fas fa-mobile-alt margin_right info_icon"></i>
                                                <div>
                                                    <p class="text-uppercase text_bold">phone</p>
                                                    <p class="text-uppercase"> <a href="tel:+15173977100">(+1) 517 397 7100</a></p>
                                                </div>
                                            </div>
                                            <div class="d-flex contact_item align-items-center margin_bottom align-content-center">
                                                <i class="far fa-envelope margin_right info_icon"></i>
                                                <div>
                                                    <p class="text-uppercase text_bold">mail</p>
                                                    <p class="text-uppercase"><a href="mailto:abcdefg@gmail.com">abcdefg@gmail.com</a></p>
                                                </div>
                                            </div>
                                            <div class="d-flex contact_item align-items-center margin_bottom align-content-center">
                                                <i class="far fa-clock margin_right info_icon"></i>
                                                <div>
                                                    <p class="text-uppercase text_bold">WORKING HOURS</p>
                                                    <p class="text-uppercase">Mon-Fri 9.00AM to 5.00PM.</p>
                                                </div>
                                            </div>
                                            <a id="send_message" class="d-inline-block btn_style blu_grad_btn text-uppercase text-white" href="#">send message</a>
                                        </div>
                                        <div class="contact_popup animated fadeInUp">
                                            <form id="contact_form" action="http://ah-theme.com/zagency/demo/contact.php" method="post">
                                                <div class="row">
                                                    <div class="col">
                                                        <input type="text" id="your_name" class="form-input w-100" name="full-name" placeholder="Full Name" required>
                                                    </div>
                                                    <div class="col">
                                                        <input type="email" id="email" class="form-input w-100" name="email" placeholder="Email" required>
                                                    </div>
                                                </div>
                                                <input type="text" id="phone" class="form-input w-100" name="phone" placeholder="Phone">
                                                <textarea class="form-input w-100" id="message" placeholder="Message" name="message"></textarea>
                                                <button id="contact_submit" class="blu_grad_btn btn_style br_radius w-100 text-uppercase" type="submit" name="button">submit <i class="float-right hidden fa-spin fas fa-circle-notch"></i></button>
                                                <div id="msgSubmit" class="h3 text-center hidden">Message Submitted! Thanks :)</div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                        <div class="map">
                                            <div style="width: 100%"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d421701.2454303203!2d-90.21538947620296!3d34.33670749678344!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88801b5b94e09a8b%3A0xabd6bc8b4f8f7ebb!2sUnited+States+Postal+Service!5e0!3m2!1sen!2seg!4v1536167131135" allowfullscreen></iframe></div><br />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </main>
                @endsection