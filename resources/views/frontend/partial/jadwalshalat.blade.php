<section id="pricing" class="pricing section">

    <?php
      $sekarangya= date('Y-m-d');
      $url="https://api.myquran.com/v2/sholat/jadwal/1201/".$sekarangya."";
      $curl = curl_init();

      curl_setopt_array($curl, array(
      CURLOPT_URL => $url,
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'GET',
      ));

      $responsed = curl_exec($curl);

      curl_close($curl);
      $dataa = json_decode($responsed, TRUE);
      //var_dump($responsed);
      //print_r( $responsed);
    ?>

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Jadwal Shalat</h2>
    <p><?php echo "Jadwal Sholat untuk " . $dataa['data']['lokasi'] . " pada " . $dataa['data']['jadwal']['tanggal'] . "\n"; ?></p>
  </div><!-- End Section Title -->


  <div class="container">

    <div class="row gy-4">
        @if (isset($dataa['data']) && !empty($dataa['data']))
        <div class="col-lg-3" data-aos="zoom-in" data-aos-delay="100">
            <div class="pricing-item">
              <center>
                <h2>Imsak</h2>
                <h3><?= $dataa['data']['jadwal']['subuh'] ?></h3>
              </center>
            </div>
          </div><!-- End Pricing Item -->

          <div class="col-lg-3" data-aos="zoom-in" data-aos-delay="200">
          <div class="pricing-item">
              <center>
                <h2>Subuh</h2>
                <h3><?= $dataa['data']['jadwal']['imsak'] ?></h3>
              </center>
            </div>
          </div><!-- End Pricing Item -->

          <div class="col-lg-3" data-aos="zoom-in" data-aos-delay="300">
          <div class="pricing-item">
              <center>
                <h2>Terbit</h2>
                <h3><?= $dataa['data']['jadwal']['terbit'] ?></h3>
              </center>
            </div>
          </div><!-- End Pricing Item -->

          <div class="col-lg-3" data-aos="zoom-in" data-aos-delay="400">
          <div class="pricing-item">
              <center>
                <h2>Dhuha</h2>
                <h3><?= $dataa['data']['jadwal']['dhuha'] ?></h3>
              </center>
            </div>
          </div><!-- End Pricing Item -->

          <div class="col-lg-3" data-aos="zoom-in" data-aos-delay="500">
          <div class="pricing-item">
              <center>
                <h2>Dzuhur</h2>
                <h3><?= $dataa['data']['jadwal']['dzuhur'] ?></h3>
              </center>
            </div>
          </div><!-- End Pricing Item -->

          <div class="col-lg-3" data-aos="zoom-in" data-aos-delay="600">
          <div class="pricing-item">
              <center>
                <h2>Ashar</h2>
                <h3><?= $dataa['data']['jadwal']['ashar'] ?></h3>
              </center>
            </div>
          </div><!-- End Pricing Item -->

          <div class="col-lg-3" data-aos="zoom-in" data-aos-delay="700">
          <div class="pricing-item">
              <center>
                <h2>Maghrib</h2>
                <h3><?= $dataa['data']['jadwal']['maghrib'] ?></h3>
              </center>
            </div>
          </div><!-- End Pricing Item -->

          <div class="col-lg-3" data-aos="zoom-in" data-aos-delay="800">
          <div class="pricing-item">
              <center>
                <h2>Isya</h2>
                <h3><?= $dataa['data']['jadwal']['isya'] ?></h3>
              </center>
            </div>
          </div><!-- End Pricing Item -->
        @else
        <div class="col-lg-12" data-aos="zoom-in" data-aos-delay="100">
            <div class="pricing-item">
              <center>
                <h2>Sedang Perbaikan</h2>
              </center>
            </div>
          </div><!-- End Pricing Item -->
        @endif



    </div>

  </div>

</section>
