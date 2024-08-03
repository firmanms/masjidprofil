<section id="clients" class="clients section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <h2>Iklan</h2>
      <p>Ingin beriklan di website? Silahkan berinfaq seikhlasnya</p>
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">

      <div class="row g-0 clients-wrap">
        @foreach ( $iklan as $item )
        <div class="col-xl-4 col-md-4 client-logo">
            <img src="{{ $item->image === '' ? asset("frontend/assets/img/clients/client-1.png") : url("storage/".$item->image ."")}}" width="100%" class="img-fluid" alt="">
        </div><!-- End Client Item -->
        @endforeach

      </div>

    </div>

  </section>
