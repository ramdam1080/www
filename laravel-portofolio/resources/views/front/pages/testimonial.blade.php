 <!-- ======= Testimonials Section ======= -->
 <section id="testimonials" class="testimonials section-bg">
     <div class="container">

         <div class="section-title">
             <h2>{{ $title[7]->title }}</h2>
             <p>{{ $title[7]->description }}</p>
         </div>

         <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
             <div class="swiper-wrapper">
                 @foreach ($testimonial as $item)
                     <div class="swiper-slide">
                         <div class="testimonial-item" data-aos="fade-up">
                             <p>
                                {!! $item->paragraphe !!}
                             </p>
                             <img src="{{ asset("img/" . $item->img) }}" class="testimonial-img"
                                 alt="">
                             <h3>{{ $item->h3 }}</h3>
                             <h4>{!! $item->h4 !!}</h4>
                         </div>
                     </div><!-- End testimonial item -->
                 @endforeach
                 {{-- <div class="swiper-slide">
            <div class="testimonial-item" data-aos="fade-up" data-aos-delay="100">
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
              <img src="{{ asset('/img/testimonials/testimonials-2.jpg') }}" class="testimonial-img" alt="">
              <h3>Sara Wilsson</h3>
              <h4>Designer</h4>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item" data-aos="fade-up" data-aos-delay="200">
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
              <img src="{{ asset('/img/testimonials/testimonials-3.jpg') }}" class="testimonial-img" alt="">
              <h3>Jena Karlis</h3>
              <h4>Store Owner</h4>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item" data-aos="fade-up" data-aos-delay="300">
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
              <img src="{{ asset('/img/testimonials/testimonials-4.jpg') }}" class="testimonial-img" alt="">
              <h3>Matt Brandon</h3>
              <h4>Freelancer</h4>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item" data-aos="fade-up" data-aos-delay="400">
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
              <img src="{{ asset('/img/testimonials/testimonials-5.jpg') }}" class="testimonial-img" alt="">
              <h3>John Larson</h3>
              <h4>Entrepreneur</h4>
            </div>
          </div><!-- End testimonial item --> --}}

             </div>
             <div class="swiper-pagination"></div>
         </div>

     </div>
 </section><!-- End Testimonials Section -->
