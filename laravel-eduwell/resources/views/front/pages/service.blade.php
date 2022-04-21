<section class="services" id="services">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading">
            <h6>{{ $titre[1]->h2 }}</h6>
            <h4>{!! $titre[1]->h1 !!}</h4>
          </div>
        </div>
        
        <div class="col-lg-12">
            <div class="owl-service-item owl-carousel">
                @foreach ($services as $item)
                <div class="item">
                    <div class="service-item">
                        <div class="icon">
                            <img src="{{ asset( "images/" . $item->img) }}" alt="">
                        </div>
                        <h4>{{ $item->post }}</h4>
                        <p>{{ $item->p }}</p>
                    </div>
                </div>
                @endforeach
          </div>
        </div>
      </div>
    </div>
  </section>