<section id="services" class="services section light-background">

    <div class="container">
      <div class="container section-title" data-aos="fade-up">
        <h2>Layanan</h2>
        <p>Masjid {{ $profil->nama_masjid }}</p>
      </div><!-- End Section Title -->

      <div class="row gy-4">
        @foreach (  $layanan as $item)
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item item-cyan position-relative">
                <img src="{{ url('storage/'.$item->image) }}" width="100%">
                @if (false===strpos($item['url'],'http'))
                    <a href="page/{{ $item->url }}" class="stretched-link">
                @else
                <a href="{{ $item->url }}" class="stretched-link">
                @endif
                <h3>{{ $item->judul }}</h3>
              </a>
              <p>{{ $item->deskripsi }}</p>
            </div>
          </div><!-- End Service Item -->
        @endforeach

      </div>

    </div>

  </section>
