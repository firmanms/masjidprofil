<!-- Pricing Section -->
<section id="pricing" class="pricing section">

    <div class="container">

      <div class="row gy-4">

        <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="100">
          <div class="pricing-item">
            <h3>Uang Masuk</h3>
            <h4><sup>Rp. <?php echo number_format($uangmasuk,0,',','.');?></sup><span></span></h4>
          </div>
        </div><!-- End Pricing Item -->

        <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="200">
          <div class="pricing-item">
            <h3>Uang Keluar</h3>
            <h4><sup>Rp. <?php echo number_format($uangkeluar,0,',','.');?></sup><span></span></h4>
          </div>
        </div><!-- End Pricing Item -->

        <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="300">
          <div class="pricing-item featured">
            <p class="popular">Saldo</p>
            <h3>Saldo</h3>
            <h4><sup>Rp. <?php echo number_format($saldo,0,',','.');?></sup><span></span></h4>
          </div>
        </div><!-- End Pricing Item -->

      </div>
      <br>
      <center><h1><b>LAPORAN KAS</b></h1></center>

      <table align="center" class="table table-striped">
        <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Tanggal</th>
          <th scope="col">Kegiatan</th>
          <th scope="col">Uang Masuk</th>
          <th scope="col">Uang Keluar</th>
          <th scope="col">Detail</th>
          <th scope="col">Catatan</th>
        </tr>
        </thead>
        <tbody>
            @foreach ( $kas as $item )
            <tr>
                <th scope="row">{{ $loop->iteration + ($kas->currentPage() - 1) * $kas->perPage() }}</th>
                <td>{{ \Carbon\Carbon::parse($item->tanggal)->format('d-m-Y') }}</td>
                <td>{{ $item->kegiatan }}</td>
                <td>{{ $item->uang_masuk }}</td>
                <td>{{ $item->uang_keluar }}</td>
                <td>{{ $item->detail }}</td>
                <td>{{ $item->catatan }}</td>
              </tr>
            @endforeach
        </tbody>
      </table>

    </div>

  </section><!-- /Pricing Section -->
