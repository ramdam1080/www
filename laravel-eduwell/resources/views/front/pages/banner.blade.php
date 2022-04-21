<!-- ***** Main Banner Area Start ***** -->
<section class="main-banner" id="top">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 align-self-center">
          <div class="header-text">
            <h6>{{ $titre[0]->h2 }}</h6>
            <h2>{!! $titre[0]->h1 !!}</h2>
            <div class="main-button-gradient">
              <div class="scroll-to-section"><a href="#contact-section">{{ $banner[0]->button }}</a></div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="right-image">
            <img src="{{"images/" . $banner[0]->img }}" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ***** Main Banner Area End ***** -->