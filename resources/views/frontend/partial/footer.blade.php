<footer id="footer" class="footer dark-background">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="index.html" class="logo d-flex align-items-center">
            <span class="sitename">Masjid {{ $profil->nama_masjid }}</span>
          </a>
          <div class="footer-contact pt-3">
            <p>{{ $profil->alamat }}</p>
            <p class="mt-3"><strong>Telepon:</strong> <span>{{ $profil->telp }}</span></p>
            <p><strong>Whatsapp:</strong> <span>{{ $profil->whatsapp }}</span></p>
            <p><strong>Email:</strong> <span>{{ $profil->email }}</span></p>
          </div>
           <div class="social-links d-flex mt-4">
            <a href="{{ $profil->yt }}"><i class="bi bi-youtube"></i></a>
            <a href="{{ $profil->fb }}"><i class="bi bi-facebook"></i></a>
            <a href="{{ $profil->ig }}"><i class="bi bi-instagram"></i></a>
          </div>
        </div>

        <div class="col-lg-8 col-md-3 footer-links">
          <h4>Maps</h4>
          <iframe src="{{ $profil->url_map }}" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <!--
        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Our Services</h4>
          <ul>
            <li><a href="#">Web Design</a></li>
            <li><a href="#">Web Development</a></li>
            <li><a href="#">Product Management</a></li>
            <li><a href="#">Marketing</a></li>
            <li><a href="#">Graphic Design</a></li>
          </ul>
        </div>

        <div class="col-lg-4 col-md-12 footer-newsletter">
          <h4>Our Newsletter</h4>
          <p>Subscribe to our newsletter and receive the latest news about our products and services!</p>
          <form action="forms/newsletter.php" method="post" class="php-email-form">
            <div class="newsletter-form"><input type="email" name="email"><input type="submit" value="Subscribe"></div>
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your subscription request has been sent. Thank you!</div>
          </form>
        </div> -->

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">Masjid {{ $profil->nama_masjid }}</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        Designed Website by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>

  </footer>
