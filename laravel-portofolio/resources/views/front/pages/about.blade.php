<main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2>{{ $title[1]->title }}</h2>
          <p>{{ $title[1]->description }}.</p>
        </div>

        <div class="row">
          <div class="col-lg-4" data-aos="fade-right">
            <img src="{{ asset($img[0]->img) }}" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
            <h3>{!! $title[2]->title !!}</h3>
            <p class="fst-italic">
              {{$title[2]->description}}
            </p>
            <div class="row">
              @for ($i = 0; $i < count($about); $i++)
              <div class="col-lg-6">
                <ul>
                  <li><i class="{{ $about[$i]->icone }}"></i> <strong>{{ $about[$i]->strong }}</strong> <span>{{ $about[$i]->span }}</span></li>
                  
                  
                </ul>
              </div>
                  @endfor
           
            </div>
            <h3>{{ $title[3]->title }}</h3>
            <p>
              {{$title[3]->description}}
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->
