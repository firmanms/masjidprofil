<!-- Portfolio Details Section -->
<section id="portfolio-details" class="portfolio-details section">

    <div class="container" data-aos="fade-up">

      <div class="portfolio-details-slider swiper init-swiper">
        <script type="application/json" class="swiper-config">
          {
            "loop": true,
            "speed": 600,
            "autoplay": {
              "delay": 5000
            },
            "slidesPerView": "auto",
            "navigation": {
              "nextEl": ".swiper-button-next",
              "prevEl": ".swiper-button-prev"
            },
            "pagination": {
              "el": ".swiper-pagination",
              "type": "bullets",
              "clickable": true
            }
          }
        </script>
        <div class="swiper-wrapper align-items-center">

          <div class="swiper-slide">
            <img src="{{ url('storage/'.$galeri->image) }}" alt="">
          </div>

            @php
                $imageFilenames = $galeri->galeri_image;
            @endphp
            @if (is_array($imageFilenames))
            @foreach ( $imageFilenames as $galeris)
            <div class="swiper-slide">
                <img src="{{ url('storage/'.$galeris.'') }}" alt="">
            </div>
                @endforeach
            @else
                Failed to decode JSON string
            @endif

        </div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-pagination"></div>
      </div>

      <div class="row justify-content-between gy-4 mt-4">

        <div class="col-lg-8" data-aos="fade-up">
          <div class="portfolio-description">
            <h2>{{ $galeri->judul }}</h2>
            {!! $galeri->deskripsi !!}

          </div>
        </div>

        <div class="col-lg-3" data-aos="fade-up" data-aos-delay="100">
          <div class="portfolio-info">
            <h3>Informasi</h3>
            <ul>
              <li><strong>Kategori</strong> {{ $galeri->kategori }}</li>
              <li><strong>User</strong> {{ $galeri->user->name }}</li>
              <li><strong>Publikasi</strong> {{ $galeri->publikasi }}</li>
            </ul>
          </div>
        </div>

      </div>

    </div>

  </section><!-- /Portfolio Details Section -->
