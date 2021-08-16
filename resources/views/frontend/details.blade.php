@extends('frontend.master.master')
@section('content')
<main id="main">

<!-- ======= Breadcrumbs Section ======= -->
<section class="breadcrumbs">
  <div class="container">

    <div class="d-flex justify-content-between align-items-center">
      <h2>Design Details</h2>
      <ol>
        <li><a href="index.html">Home</a></li>
        <li><a href="portfolio.html">Design</a></li>
        <li>Details</li>
      </ol>
    </div>

  </div>
</section><!-- Breadcrumbs Section -->

<!-- ======= Portfolio Details Section ======= -->
<section id="portfolio-details" class="portfolio-details">
  <div class="container">

    <div class="row gy-4">

      <div class="col-lg-8">
        <div class="portfolio-details-slider swiper-container">
          <div class="swiper-wrapper align-items-center">
              <img src="{{asset('images/items/'.$design->image)}}" alt="design image">
          </div>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="portfolio-info">
          <h3>Design information</h3>
          <ul>
            <li><strong>Type</strong>: {{$design->type}}</li>
            <li><strong>Butta</strong>: {{$design->butta}}</li>
            <li><strong>Brand</strong>: {{$design->company}}</li>
            <li><strong>Machinery</strong>: {{$design->machinery}}</li>
          </ul>
        </div>
        <div class="portfolio-description">
          <h2>Items Used In Design</h2>
          <p>
              {!!$design->details!!}
          </p>
        </div>
      </div>

    </div>

  </div>
</section><!-- End Portfolio Details Section -->

</main><!-- End #main -->
@endsection