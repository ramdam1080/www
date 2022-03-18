  <!-- ======= Header ======= -->
  <header id="header">
    <div class="d-flex flex-column">

      <div class="profile">
        <img src="{{ asset($img[0]->img) }}" alt="" class="img-fluid rounded-circle">
        <h1 class="text-light"><a href="index.html">{{ $title[0]->title }}</a></h1>
        <div class="social-links mt-3 text-center">
          @foreach ($header as $item)    
          <a href="#" class="{{$item->class }}">{!! $item->icone !!}</a>
          @endforeach
     
        </div>
      </div>

      <nav id="navbar" class="nav-menu navbar">
        <ul>
          @foreach ($nav as $item)
          <li><a href="{{ $item->href }}" class="{{ $item->class }}">{!! $item->lien !!} <span>{{ $item->span }}</span></a></li> 
          @endforeach
          
        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->
