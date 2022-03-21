@extends('main')

@section('content')


<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Services</h2>
          <ol>
            <li><a href="{{ route('home-page') }}">Home</a></li>
            <li>Services</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="row">
            @foreach ($services_section as $item)
          <div class="col-md-6">
            <div class="icon-box">
              <img src="/adminResources/{{ $item->icon }}" width="70" alt="">
              <h4>{{ $item->title }}</h4>
              <p>{{ $item->description }}</p>
            </div>
        </div>
        @endforeach
        </div>

      </div>
    </section><!-- End Services Section -->


    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
        <div class="container">

          <div class="section-title">
            <h2>Features</h2>
            <p>Check our Features</p>
          </div>

          <div class="row">
              @foreach ($features_section as $item)
            <div class="col-lg-3">
              <ul class="nav nav-tabs flex-column">
                <li class="nav-item">
                  <a class="nav-link {{ $loop->iteration ?? 'active show'}}" data-bs-toggle="tab" href="#tab-1{{ $loop->iteration ??'active show'}}">{{ $item->feature_name }}</a>
                </li>
              </ul>
            </div>
            <div class="col-lg-9 mt-4 mt-lg-0">
              <div class="tab-content">
                <div class="tab-pane {{ $loop->iteration ?? 'active show'}}" id="tab-1{{ $loop->iteration ??'active show'}}">
                  <div class="row">
                    <div class="col-lg-8 details order-2 order-lg-1">
                      <h3>{{ $item->title }}</h3>
                      <p class="fst-italic">{{ $item->sub_title }}</p>
                      <p>{{ $item->description }}</p>
                    </div>
                    <div class="col-lg-4 text-center order-1 order-lg-2">
                      <img src="/adminResources/{{ $item->image }}" alt="" class="img-fluid">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
          </div>

        </div>
      </section><!-- End Features Section -->

  </main><!-- End #main -->


@endsection
