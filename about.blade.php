@extends('main')

@section('content')

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>About</h2>
          <ol>
            <li><a href="{{ route('home-page') }}">Home</a></li>
            <li>About</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row content">
            @foreach ($about_section as $item)
          <div class="col-lg-6">
            <h2>{{ $item->big_title }}</h2>
            <h3>{{ $item->title }}</h3>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
            {{ $item->first_description }}
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i>{{ $item->second_description }}</li>
            </ul>
            <p class="fst-italic">
            {{ $item->third_description }}
            </p>
          </div>
          @endforeach
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Team</h2>
          <p>Our Hardowrking Team</p>
        </div>

        <div class="row">
          @foreach ($team_section as $item)
          <div class="col-lg-6">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="/adminResources/{{ $item->image }}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>{{ $item->full_name }}</h4>
                <span>{{ $item->profession }}</span>
                <p>{{ $item->description }}</p>
              </div>
            </div>
          </div>
          @endforeach
        </div>

      </div>
    </section><!-- End Team Section -->

    <!-- ======= Our Skills Section ======= -->
    <section id="skills" class="skills">
      <div class="container">

        <div class="section-title">
          <h2>Our Skills</h2>
          <p>Check our Our Skills</p>
        </div>

        <div class="row skills-content">
          @foreach ($skill_section as $item)
          <div class="col-lg-6">
            <div class="progress">
              <span class="skill">{{ $item->title }} <i class="val">{{ $item->persent }}%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="{{ $item->persent }}" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
          </div>
          @endforeach
        </div>

      </div>
    </section><!-- End Our Skills Section -->

  </main><!-- End #main -->


@endsection
