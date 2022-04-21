<section class="testimonials" id="testimonials">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading">
            <h6>{{ $titre[3]->h2 }}</h6>
            <h4>{!! $titre[3]->h1 !!}</h4>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="owl-testimonials owl-carousel" style="position: relative; z-index: 5;">
            @foreach ($testimonial as $item)
            <div class="item">  
              <p>{{ $item->p }}</p>
                <h4>{{$item->h4 }}</h4>
                <span>{!! $item->span !!}</span>
                <img src="{{ asset('images/quote.png') }}" alt="">
            </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>