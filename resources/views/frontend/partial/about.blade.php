<section id="about" class="about section">

    <div class="container">

      <div class="row position-relative">

        <div class="col-lg-7 about-img" data-aos="zoom-out" data-aos-delay="200"><img src="{{ $profil->image === '' ? asset("frontend/assets/img/about.png") : url("storage/".$profil->image ."")}}" width="100%"></div>

        <div class="col-lg-7" data-aos="fade-up" data-aos-delay="100">
          <h2 class="inner-title">Masjid {{ $profil->nama_masjid }}</h2>
          <div class="our-story">
            <!-- <h4>Est 1988</h4> -->
            <h3>Sejarah Singkat</h3>
            <p align="justify">{{ $profil->sejarah_singkat }}</p>

            <div class="watch-video d-flex align-items-center position-relative">
              <i class="bi bi-play-circle"></i>
              <a href="{{ $profil->video_profil }}" class="glightbox stretched-link">Video Profil</a>
            </div>
          </div>
        </div>

      </div>

    </div>

  </section>
