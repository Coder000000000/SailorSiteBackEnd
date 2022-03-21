@extends('main')

@section('content')


  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>


      <div class="carousel-inner" role="listbox">
           @foreach ($header_sliders as $item)
        <!-- Slide 1 -->
        <div class="carousel-item {{ $loop->iteration == 1 ? 'active' : '' }}" style="background-image: url(/adminResources/{{ $item->image }})">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">{{ $item->title }}</h2>
              <p class="animate__animated animate__fadeInUp">{{ $item->description }}</p>
              <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
            </div>
          </div>
        </div>
        @endforeach
      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row content">
            @foreach ($about_section as $about)
          <div class="col-lg-6">
            <h2>{{ $about->big_title }}</h2>
            <h3>{{ $about->title }}</h3>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
             {{ $about->first_description }}
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i>{{ $about->second_description }}</li>
            </ul>
            <p class="fst-italic">
             {{ $about->third_description }}
            </p>
          </div>
          @endforeach
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients section-bg">
      <div class="container">

        <div class="row">
           @foreach ($clients_section as $client)
          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="/adminResources/{{ $client->image }}" class="img-fluid" alt="">
          </div>
          @endforeach
        </div>

      </div>
    </section><!-- End Clients Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="row">
            @foreach ($services_section as $service)
          <div class="col-md-6">
            <div class="icon-box">
              <img src="/adminResources/{{ $service->icon }}" width="70" alt="">
              <h4><a href="#">{{ $service->title }}</a></h4>
              <p>{{ $service->description }}</p>
            </div>
          </div>
          @endforeach
        </div>

      </div>
    </section><!-- End Services Section -->


    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
                @foreach ($categories_portfolio_section as $cat)
              <a class="btn btn-danger" href="{{ route('category-portfolio', $cat->id) }}">{{ $cat->category_name }}</a>
              @endforeach
            </ul>
          </div>
        </div>

        <div class="row portfolio-container">
           @foreach ($portfolios_section as $item)
          <div class="col-lg-4 col-md-6 portfolio-item filter">
            <div class="portfolio-wrap">
              <img src="/adminResources/{{ $item->image }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>{{ $item->title }}</h4>
                <p>{{ $item->category_of_portfolio->category_name }}</p>
                <div class="portfolio-links">
                  <a href="/adminResources/{{ $item->image }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="{{ $item->title }}"><i class="bx bx-plus"></i></a>
                  <a href="{{ route('portfolio-detail', $item->id) }}" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>
          @endforeach
        </div>

      </div>
    </section><!-- End Portfolio Section -->

  </main><!-- End #main -->

@endsection
