 <!-- Projects -->
 <div class="projects">
    <div class="container">
       <div class="row">
          <div class="col-md-12">
             <div class="titlepage">
                <span>{{ $section[1]->sousTitre }}</span>
                <h2>{{ $section[1]->titre }}</h2>
                <p>{{ $section[1]->text }}</p>
             </div>
          </div>
       </div>
       <div class="row">
          <div class="col-md-10 offset-md-1">
             <div class="row">
                <div class="col-md-6 offset-md-3">
                   <div class="projects_box ">
                      <figure><img src="{{ asset($img[3]->url) }}" alt="#"/></figure>
                   </div>
                </div>
                <div class="col-md-12">
                   <div class="projects_box ">
                      <p>{{ $section[1]->text2 }}</p>
                      <a class="read_more" href="#">{{ $section[1]->lien }}</a>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>
 <!-- end projects -->