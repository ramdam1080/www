<!-- ======= Facts Section ======= -->
<section id="facts" class="facts">
    <div class="container">

      <div class="section-title">
        <h2>{{ $title[4]->title }}</h2>
        <p>{{ $title[4]->description }}.</p>
      </div>

      <div class="row no-gutters">
        
@foreach ($facts as $item)
    
<div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up">
  <div class="count-box">
    {!! $item->icone !!}
    <span data-purecounter-start="0" data-purecounter-end="{{ $item->nombre }}" data-purecounter-duration="1" class="purecounter"></span>
    <p><strong>{{ $item->strong }}</strong> {{ $item->text }}</p>
  </div>
</div>
@endforeach

    

      </div>

    </div>
  </section><!-- End Facts Section -->