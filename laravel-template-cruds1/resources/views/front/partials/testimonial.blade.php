 <!-- Testimonial -->
 <div class="section">
    <div class="container">
       <div id="" class="Testimonial">
          <div class="row">
             <div class="col-md-12">
                <div class="titlepage">
                   <h2>{{ $testi[0]->titre }}</h2>
                </div>
             </div>
          </div>
          <div class="row">
             <div class="col-md-3">
                <div class="Testimonial_box">
                   <i><img src="{{ asset($img[4]->url) }}" alt="#"/></i>
                </div>
             </div>
             <div class="col-md-9">
                <div class="Testimonial_box">
                   <h4>{{ $testi[0]->sousTitre }}</h4>
                   <p>{!! $testi[0]->text !!}
                   </p>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>

 <!-- end Testimonial -->