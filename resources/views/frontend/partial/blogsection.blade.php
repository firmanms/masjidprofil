<!-- Blog Posts Section -->
<section id="blog-posts" class="blog-posts section">

    <div class="container">
      <div class="row gy-4">
        @foreach ( $blog as $item )

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

                {{-- <p>
                  Similique neque nam consequuntur ad non maxime aliquam quas. Quibusdam animi praesentium. Aliquam et laboriosam eius aut nostrum quidem aliquid dicta.
                </p> --}}

                <hr>

                <a href="{{ url('show/detail/'.$item->slug.'') }}" class="readmore stretched-link"><span>Selengkapnya</span><i class="bi bi-arrow-right"></i></a>

              </div>

            </article>
          </div><!-- End post list item -->

        @endforeach


      </div>
    </div>

  </section><!-- /Blog Posts Section -->

  <!-- Blog Pagination Section -->
  <section id="blog-pagination" class="blog-pagination section">

    <div class="container">
        <div class="d-flex justify-content-center">
            {{ $blog->links('pagination::bootstrap-4') }}
        </div>
    </div>

  </section><!-- /Blog Pagination Section -->

