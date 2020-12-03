@extends('front.layouts.app')
@section('title')
Venice Decor | {{ $service->name }} Page
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
        <h1 class="text-uppercase text-center page_title text_bold margin_top_4">{{ $service->name }}</h1>
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
                <img class="w-100 br_radius margin_bottom" src='{{ $service->image }}' alt="article image">
              </div>
              <!-- <h3 class="article-tit text-capitalize">{{ $service->name }}</h3> -->
              <div class="article_content margin_top">
                {!! $service->content !!}
                
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
                    @foreach ($services as $srv)
                    <li class="cat_item"><a href="{{ asset('service/'.$srv->id) }}">{{ $srv->name }} <i class="fas fa-chevron-right float-right col_purple"></i></a></li>
                    @endforeach
                </ul>
              </div>
            </aside>
          </div>
        </div>
      </div>
    </section>
  </main>
@endsection