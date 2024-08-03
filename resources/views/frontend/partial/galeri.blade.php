<section id="portfolio" class="portfolio section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <h2>Galeri</h2>
      <p>Masjid {{ $profil->nama_masjid }}</p>
    </div><!-- End Section Title -->

    <div class="container">

      <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

        <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
          <li data-filter="*" class="filter-active">All</li>
          @foreach ( $kategaleri as $item)
          <li data-filter=".filter-{{ $item->kategori }}">{{ $item->kategori }}</li>
          @endforeach
          {{-- <li data-filter=".filter-app">App</li>
          <li data-filter=".filter-product">Card</li>
          <li data-filter=".filter-branding">Web</li> --}}
        </ul><!-- End Portfolio Filters -->

        <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">
          @foreach ( $galeri as $item )
          <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-{{ $item->kategori }}">
            <img src="{{ url('storage/'.$item->image) }}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>{{ $item->judul }}</h4>
              <p>{{ $item->deskripsi }}</p>
              <a href="{{ url('storage/'.$item->image) }}" title="{{ $item->judul }}" data-gallery="portfolio-gallery-{{ $item->kategori }}" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              <a href="{{ url('show/detailgaleri/'.$item->slug.'') }}" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
            </div>
          </div><!-- End Portfolio Item -->
          @endforeach

        </div><!-- End Portfolio Container -->

      </div>

    </div>

  </section>
