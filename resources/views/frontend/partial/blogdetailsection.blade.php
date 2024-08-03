<div class="container">
    <div class="row">

      <div class="col-lg-8">

        <!-- Blog Details Section -->
        <section id="blog-details" class="blog-details section">
          <div class="container">

            <article class="article">

              <div class="post-img">
                <img src="{{ url('storage/'.$blog->image) }}" alt="" class="img-fluid">
              </div>

              <h2 class="title">{{ $blog->judul }}</h2>

              <div class="meta-top">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="{{ url('show/detail/'.$blog->slug.'') }}">{{ $blog->user->name }}</a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-folder"></i> <a href="{{ url('show/detail/'.$blog->slug.'') }}">{{ $blog->kategori }}</a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="{{ url('show/detail/'.$blog->slug.'') }}"><time datetime="2020-01-01">{{ $blog->publikasi }}</time></a></li>
                </ul>
              </div><!-- End meta top -->

              <div class="content">
                {!! $blog->deskripsi !!}

              </div><!-- End post content -->

              <div class="meta-bottom">
                {{-- <i class="bi bi-folder"></i>
                <ul class="cats">
                  <li>{{ $blog->kategori }}</li>
                </ul> --}}

                {{-- <i class="bi bi-tags"></i>
                <ul class="tags">
                  <li><a href="#">Creative</a></li>
                  <li><a href="#">Tips</a></li>
                  <li><a href="#">Marketing</a></li>
                </ul> --}}
              </div><!-- End meta bottom -->

            </article>

          </div>
        </section><!-- /Blog Details Section -->
    </div>
    <div class="col-lg-4 sidebar">

        <div class="widgets-container">

          <!-- Recent Posts Widget -->
          <div class="recent-posts-widget widget-item">

            <h3 class="widget-title">Terbaru</h3>
            @foreach ( $recent as $item)
            <div class="post-item">
                <h4><a href="">{{ $item->judul }}</a></h4>
                <time datetime="{{ $item->publikasi }}">{{ $item->publikasi }}</time>
              </div><!-- End recent post item-->
            @endforeach

          </div><!--/Recent Posts Widget -->

          {{-- <!-- Tags Widget -->
          <div class="tags-widget widget-item">

            <h3 class="widget-title">Tags</h3>
            <ul>
              <li><a href="#">App</a></li>
              <li><a href="#">IT</a></li>
              <li><a href="#">Business</a></li>
              <li><a href="#">Mac</a></li>
              <li><a href="#">Design</a></li>
              <li><a href="#">Office</a></li>
              <li><a href="#">Creative</a></li>
              <li><a href="#">Studio</a></li>
              <li><a href="#">Smart</a></li>
              <li><a href="#">Tips</a></li>
              <li><a href="#">Marketing</a></li>
            </ul>

          </div><!--/Tags Widget --> --}}

        </div>

      </div>

    </div>
  </div>
