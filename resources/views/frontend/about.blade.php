@extends('frontend.layouts.app')
@section('title', 'About Us')
@section('content')

<div class=""  data-aos="fade">
        <div class="container-fluid">

          <div class="row justify-content-center">
            <div class="col-md-7">
              <div class="row mb-5 site-section">
                <div class="col-12 ">
                  <h2 class="site-section-heading text-center">About Us</h2>
                </div>
              </div>

               <div class="row mb-4">
                <div class="col-md-6">
                  <img src="images/img_2.jpg" alt="Images" class="img-fluid">
                </div>
                <div class="col-md-6 ml-auto">
                  <h3>Our Mission</h3>
                  <p>mission is to give each of our clients the best professional web presence and a good graphic design
                      (logo) for their business possible at an affordable price. We believe that a website and a business logo
                      should help your small business become more productive, more successful,
                      and  allow you to compete head-on with larger businesses without breaking the bank.
                      We believe in giving individual attention to each of our clients, and building a solid & lasting
                      relationship based on trust and satisfaction. We do not believe in using templates or creating
                      cookie-cutter sites. You deserve a good website and a good business logo as unique as your small business.
                      We do not launch your site or any graphic design and then disappear. We believe in supporting and
                      maintaining our work. After all, your website is a reflection of us, and your satisfaction is very
                      important. Whether you need a new website or logo or need to revamp, we can help!.</p>
                </div>
              </div>


              <div class="row site-section">
                @if (count($teams) > 0)
                    @foreach ($teams as $team)
                    <div class="col-md-6 col-lg-6 col-xl-4 text-center mb-5">
                    <img src="{{ legendaryart_thumbnail($team->thumbnail) }}" alt="Image" class="img-fluid w-50 rounded-circle mb-4">
                    <h2 class="text-black font-weight-light mb-4">{{ $team->name }}</h2>
                        <p class="mb-4">
                          {{ $team->description }}
                        </p>
                        <p>
                          <a href="#" class="pl-0 pr-3"><span class="icon-twitter"></span></a>
                          <a href="https://www.instagram.com/legendaryart_123/?hl=en" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                          <a href="#" class="pl-3 pr-3"><span class="icon-facebook"></span></a>
                        </p>
                      </div>

                    @endforeach
                @endif

              </div>
            </div>

          </div>
        </div>
      </div>
@endsection
