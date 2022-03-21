@extends('main')

@section('content')

<main id="main">

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row gy-4">
            @foreach ($portfolios_section as $item)
          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">
                <div class="swiper-slide">
                  <img src="/adminResources/{{ $item->image }}" alt="">
                </div>
              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>Project information</h3>
              <ul>
                <li><strong>Category</strong>: {{ $item->category_of_portfolio->category_name }}</li>
                <li><strong>Client</strong>: {{ $item->client }}</li>
                <li><strong>Project date</strong>: {{ $item->created_at->format('d, m, y') }}</li>
                <li><strong>Project URL</strong>: <a href="{{ $item->invisible_url }}">{{ $item->visible_url }}</a></li>
              </ul>
            </div>
            <div class="portfolio-description">
              <h2>{{ $item->title }}</h2>
              <p>
             {{ $item->description }}
            </p>
            </div>
          </div>
          @endforeach
        </div>

      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>


@endsection
