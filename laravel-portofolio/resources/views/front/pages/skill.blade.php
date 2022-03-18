 <!-- ======= Skills Section ======= -->
 <section id="skills" class="skills section-bg">
    <div class="container">

      <div class="section-title">
        <h2>{{ $title[5]->title }}</h2>
        <p>{{ $title[5]->description }}.</p>
      </div>

      <div class="row skills-content">

        @foreach ($skill as $item)
        <div class="col-lg-6" data-aos="fade-up">
              
          <div class="progress">
            <span class="skill">{{ $item->nom }} <i class="val">{{ $item->pourcent }}%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="{{ $item->value }}" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
          
          
        </div>
        @endforeach

      </div>

    </div>
  </section><!-- End Skills Section -->
