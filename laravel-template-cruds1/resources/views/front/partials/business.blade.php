<div class="business">
    <div class="container">
       <div class="row">
          <div class="col-md-12">
             <div class="titlepage">
                <span>{{ $section[0]->sousTitre }}</span>
                <h2>{{ $section[0]->titre }}</h2>
                <p>{{ $section[0]->text }} </p>
             </div>
          </div>
       </div>
       <div class="row">
          <div class="col-md-10 offset-md-1">
             <div class="row">
                <div class="col-md-12">
                   <div class="business_box ">
                      <figure><img src="{{ asset($img[2]->url) }}" alt="#"/></figure>
                      <p>{{ $section[0]->text2 }}</p>
                      <a class="read_more" href="#">{{ $section[0]->lien }}</a>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>