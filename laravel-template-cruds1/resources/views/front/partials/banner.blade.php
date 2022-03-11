<section class="banner_main">
    <div class="container-fluid">
       <div class="row d_flex">
          <div class="col-md-6">
             <div class="text-bg">
                <h1>{{ $banner[0]->text }}</h1>
                <p>{{ $banner[1]->text }}</p>
                <a href="#">{{ $banner[2]->text }}</a>
             </div>
          </div>
          <div class="col-md-6">
             <div class="text-img">
                <figure><img src="{{ asset($img[1]->url) }}" alt="#"/></figure>
             </div>
          </div>
       </div>
    </div>
 </section>