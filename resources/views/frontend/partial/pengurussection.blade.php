<!-- Team Section -->
<section id="team" class="team section">

    <div class="container">

      <div class="row gy-4">

        @foreach ( $pengurus as $item )
        <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
          <div class="team-member">
            <div class="member-img">
              <img src="{{ url('storage/'.$item->image) }}" class="img-fluid" alt="">
              <div class="social">
                <a href="https://wa.me/{{ $item->wa }}"><i class="bi bi-whatsapp"></i></a>
                <a href="{{ $item->fb }}"><i class="bi bi-facebook"></i></a>
                <a href="{{ $item->ig }}"><i class="bi bi-instagram"></i></a>
              </div>
            </div>
            <div class="member-info">
              <h4>{{ $item->nama }}</h4>
              <span>{{ $item->jabatan }}</span>
            </div>
          </div>
        </div><!-- End Team Member -->
        @endforeach

      </div>

    </div>

  </section><!-- /Team Section -->
