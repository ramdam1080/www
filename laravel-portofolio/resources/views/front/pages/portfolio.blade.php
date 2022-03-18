<!-- ======= Portfolio Section ======= -->
<section id="portfolio" class="portfolio section-bg">
    <div class="container">

      <div class="section-title">
        <h2>{{ $title[6]->title }}</h2>
        <p>{{ $title[6]->description }}</p>
      </div>

      <div class="row" data-aos="fade-up">
        <div class="col-lg-12 d-flex justify-content-center">
          <ul id="portfolio-flters">

            @foreach ($filter as $item)
            
            <li data-filter="{{ $item->data }}" class="{{ $item->class }}">{{ $item->filter }}</li>
            @endforeach
          </ul>
        </div>
      </div>

      <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">

@foreach ($portfolio as $item)
<div class="col-lg-4 col-md-6 portfolio-item {{ $item->filter }}">
  <div class="portfolio-wrap">
    <img src="{{ asset( $item->img ) }}" class="img-fluid" alt="">
    <div class="portfolio-links">
      <a href="img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1">{!! $item->icone1 !!}</a>
      <a href="portfolio-details.html" title="More Details">{!! $item->icone2 !!}</a>
    </div>
  </div>
</div>
@endforeach

      </div>

    </div>
  </section><!-- End Portfolio Section -->