@extends('main')

@section('content')


<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Portolio</h2>
          <ol>
            <li><a href="{{ route('home-page') }}">Home</a></li>
            <li>Portolio</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
                @foreach ($categories_portfolio_section as $cat)
              <a class="btn btn-danger" href="{{ route('portfolio-category-another', $cat->id) }}">{{ $cat->category_name }}</a>
              @endforeach
            </ul>
          </div>
        </div>

        <div class="row portfolio-container">
          @foreach ($portfolios_section as $item)
          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
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
