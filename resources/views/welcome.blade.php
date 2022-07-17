@extends('layouts.app')

@section('content')


    <!-- Main -->
    <main class="main">
      <!-- Dashboard Section -->
      <section class="home" id="home">
        <div class="home_container contain grid">
          <div class="home_img-bg">
            <img src="{{asset('img/home.png')}}" alt="picture" class="home_img" />
          </div>

          <div class="home_social">
            <a href="https://www.facebook.com/" target="_blank" class="home_social-link">Facebook</a>
            <a href="https://twitter.com/" target="_blank" class="home_social-link">Twitter</a>
            <a href="https://www.instagram.com/" target="_blank" class="home_social-link">Instagram</a>
          </div>

          <div class="home_data">
            <h1 class="home_title">
              Midnight <br />
              Club
            </h1>
            <p class="home_description">
              Suitable for every moment in your life <br />
              make your your lifestyle better.
            </p>
            <div class="home_btns">
              <a href="#" class="button button--gray button--small"> Discover </a>

              <a href="#products"><button class="button home_button">Order Now</button></a>
            </div>
          </div>
        </div>
      </section>

      <!-- Services Section -->
      <section class="service">
        <div class="container d-flex service mt-4">
          <div class="card-horizontal col-lg-3 col-12 justify-content-center">
            <div class="image">
              <img src="{{asset('img/carbon_delivery.png')}}" />
            </div>

            <div class="text">
              <span class="title">Worldwide delivery</span>
              <span class="title-description">All around the world</span>
            </div>
          </div>

          <div class="card-horizontal col-lg-3 col-12 justify-content-center">
            <div class="image">
              <img src="{{asset('img/bxs_phone-call.png')}}" />
            </div>

            <div class="text">
              <span class="title">Open 24/7</span>
              <span class="title-description">Contact us 24 hrs a day</span>
            </div>
          </div>
          <div class="card-horizontal col-lg-3 col-12 justify-content-center">
            <div class="image">
              <img src="{{asset('img/bi_shield-check.png')}}" />
            </div>

            <div class="text">
              <span class="title">original 100%</span>
              <span class="title-description">All products is 100% Original</span>
            </div>
          </div>
        </div>
      </section>

      <!-- Featured Section -->
      <section class="featured section contain justify-content-center" id="featured">
        <h2 class="section_title">Our Top Product</h2>

        <div class="featured_container grid">
            @foreach ($data as $item )
            @if ($item->is_sale == true)
                    <article class="featured_card">
                    <span class="featured_tag"></span>

                    <img src="{{ asset($item->product_image) }}" alt="Product" class="featured_img" />

                    <div class="featured_data">
                    <h3 class="featured_title">{{ $item->title }}</h3>
                    <span class="featured_price">Rp. @php
                        echo  number_format($item->price)
                    @endphp</span>
                    </div>

                    <a href="{{ route('welcome.show', $item->slug) }}" class="btn btn-master btn-primary mt-3 button featured_button">Order Now</a>
                </article>
            @endif

            @endforeach


          {{-- <article class="featured_card">
            <span class="featured_tag">Sale</span>

            <img src="{{asset('img/featured2.png')}}" alt="Product" class="featured_img" />

            <div class="featured_data">
              <h3 class="featured_title">Ingersoll</h3>
              <span class="featured_price">$250</span>
            </div>

            <a href="#" class="btn btn-master btn-primary mt-3 button featured_button">Order Now</a>
          </article>

          <article class="featured_card">
            <span class="featured_tag">Sale</span>

            <img src="{{asset('img/featured3.png')}}" alt="Product" class="featured_img" />

            <div class="featured_data">
              <h3 class="featured_title">Rose gold</h3>
              <span class="featured_price">$890</span>
            </div>

            <a href="#" class="btn btn-master btn-primary mt-3 button featured_button">Order Now</a>
          </article> --}}
        </div>
      </section>

      <!-- Story Section-->
      <section class="story section contain">
        <div class="story_container grid">
          <div class="story_data">
            <h2 class="section_title story_section-title">About Us</h2>

            <h1 class="story_title">
              The best clothing store <br />
              worldwide
            </h1>

            <p class="story_description">The most wanted fashion this decade, discover now.</p>

            <a href="#" class="button button--small">Read More</a>
          </div>

          <div class="story_images">
            <img src="{{asset('img/story.png')}}" alt="Story Image" class="story_img" />
            <div class="story_square"></div>
          </div>
        </div>
      </section>

      <!-- Products Section-->
      <section class="products section contain" id="products">
        <h2 class="section_title">Products</h2>

        <div class="products_container grid">

        @foreach ($data as $item)
            @if ($item->is_sale != true)
            <article class="products_card">
            <img src="{{ asset($item->product_image) }}"" alt="product" class="products_image" />

            <h3 class="products_title">{{ $item->title }}</h3>
            <span class="products_price"> Rp. @php
                        echo  number_format($item->price)
                    @endphp</span>

            <a href="{{ route('welcome.show', $item->slug)  }}" class="btn btn-master btn-primary mt-3">Order Now</a>
          </article>
            @endif
        @endforeach


        </div>
      </section>

      <!-- Testimonial Section -->
      <section class="testimonial section contain">
        <div class="testimonial_container grid">
          <div class="swiper testimonial-swiper p-3">
            <div class="swiper-wrapper">
              <div class="testimonial_card swiper-slide">
                <div class="testimonial_quote">
                  <i class="bx bxs-quote-alt-left"></i>
                </div>

                <p class="testimonial_description">
                  They are the best clothing line with the latest trends.
                </p>
                <h3 class="testimonial_date">March 02. 2022</h3>

                <div class="testimonial_profil">
                  <img src="{{asset('img/testimonial1.jpg')}}" alt="" class="testimonial_profil-img" />

                  <div class="testimonial_profil-data">
                    <span class="testimonial_profil-name">James Dean</span>
                    <span class="testimonial_profil-occupation">Selebgram</span>
                  </div>
                </div>
              </div>

              <div class="testimonial_card swiper-slide">
                <div class="testimonial_quote">
                  <i class="bx bxs-quote-alt-left"></i>
                </div>

                <p class="testimonial_description">
                They are the best clothing line with the latest trends.
                </p>
                <h3 class="testimonial_date">May 12. 2022</h3>

                <div class="testimonial_profil">
                  <img src="{{asset('img/testimonial2.jpg')}}" alt="" class="testimonial_profil-img" />

                  <div class="testimonial_profil-data">
                    <span class="testimonial_profil-name">Aubrey Hepburn</span>
                    <span class="testimonial_profil-occupation">Model</span>
                  </div>
                </div>
              </div>

              <div class="testimonial_card swiper-slide">
                <div class="testimonial_quote">
                  <i class="bx bxs-quote-alt-left"></i>
                </div>

                <p class="testimonial_description">
                They are the best clothing line with the latest trends.
                </p>
                <h3 class="testimonial_date">June 30. 2022</h3>

                <div class="testimonial_profil">
                  <img src="{{asset('img/testimonial3.jpg')}}" alt="" class="testimonial_profil-img" />

                  <div class="testimonial_profil-data">
                    <span class="testimonial_profil-name">Stacy</span>
                    <span class="testimonial_profil-occupation">Designer</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-button-next">
              <i class="bx bx-right-arrow-alt"></i>
            </div>
            <div class="swiper-button-prev">
              <i class="bx bx-left-arrow-alt"></i>
            </div>
          </div>
          <div class="testimonial_images">
            <div class="testimonial_square">
              <img src="{{asset('img/testimonial.png')}}" alt="" class="testimonial_img" />
            </div>
          </div>
        </div>
      </section>

      <!-- Newsletter Section -->
      <section class="newsletter section contain">
        <div class="newsletter_bg grid">
          <div>
            <h2 class="newsletter_title">
              Follow our <br />
              Website
            </h2>
            <p class="newsletter_description">Don't miss out our update. Follow our website to get a best offers, discount, and much more.</p>
          </div>

          <form action="" class="newsletter_subscribe">
            <input type="email" placeholder="Input your email" class="newsletter_input" />
            <button class="button btn-subscribe">Follow</button>
          </form>
        </div>
      </section>
    </main>

@endsection
