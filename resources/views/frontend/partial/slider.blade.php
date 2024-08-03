<section id="hero" class="hero section dark-background">

    <div id="hero-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

      <div class="carousel-item active">
        <img src="{{ $first_slide->image === '' ? asset("frontend/assets/img/hero-carousel/1.jpg") : url("storage/".$first_slide->image ."")}}" alt="">
        <div class="container">
          <h2>{{ $first_slide->judul }}</h2>
          <p>{{ $first_slide->subjudul }}</p>

        </div>
      </div><!-- End Carousel Item -->
      @foreach ($not_first as $item)
      <div class="carousel-item">
        <img src="{{ $item->image === '' ? asset("frontend/assets/img/hero-carousel/1.jpg") : url("storage/".$item->image ."")}}" alt="">
        <div class="container">
          <h2>{{ $item->judul }}</h2>
          <p>{{ $item->subjudul }}</p>

        </div>
      </div><!-- End Carousel Item -->
      @endforeach

      <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

      <ol class="carousel-indicators"></ol>

    </div>

  </section>
