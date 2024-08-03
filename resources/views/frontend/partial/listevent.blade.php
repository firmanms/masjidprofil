<section id="blog-posts" class="blog-posts section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <h2>Jadwal Kegiatan</h2>
      <p>Masjid {{ $profil->nama_masjid }}</p>
    </div><!-- End Section Title -->

    <div class="container">
      <div class="row gy-4">
        @foreach ( $jadwalkegiatan as $item)
        <div class="col-lg-4">
            <article class="position-relative h-100">

              <div class="post-img position-relative overflow-hidden">
                <img src="{{ url('storage/'.$item->image) }}" class="img-fluid" alt="">
                <span class="post-date">{{ $item->publikasi }}</span>
              </div>

              <div class="post-content d-flex flex-column">

                <h3 class="post-title">{{ $item->judul }}</h3>

                <div class="meta d-flex align-items-center">
                  <div class="d-flex align-items-center">
                    <i class="bi bi-person"></i> <span class="ps-2">{{ $item->user->name }}</span>
                  </div>
                  <span class="px-3 text-black-50">/</span>
                  <div class="d-flex align-items-center">
                    <i class="bi bi-folder2"></i> <span class="ps-2">{{ $item->kategori }}</span>
                  </div>
                </div>

                <hr>

                <a href="{{ url('show/detail/'.$item->slug.'') }}" class="readmore stretched-link"><span>Selengkapnya</span><i class="bi bi-arrow-right"></i></a>

              </div>

            </article>
          </div><!-- End post list item -->
        @endforeach

        <center><a href="{{ url('page/event') }}" class="btn btn-default" style="background-color:#1bbd36;border-radius: 4px;">Lainnya</a></center>
      </div>
    </div>

  </section>
