@extends('layouts.app',['title'=>'A-Propos'])

@section('content')
    <section>
        <!-- ======= Hero Section ======= -->
        <section id="hero" class="d-flex align-items-center">

            <div class="container">
            <div class="row">
                <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
                <h1>Nous sommes une coopérative</h1>
                <h2>Accusantium quam, aliquam ultricies eget tempor id, aliquam eget nibh et. Maecen aliquam, risus at semper. Proin iaculis purus consequat sem cure digni ssim. Donec porttitora entum.</h2>
                <div><a href="#about" class="btn-get-started scrollto">Voir les produits</a></div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img">
                <img src="{{asset("assets/img/about/about1.png")}}" class="img-fluid" alt="">
                </div>
            </div>
            </div>

        </section>
        <!-- End Hero -->

        <main id="main">
            <!-- ======= About Section ======= -->
            <section id="about" class="about">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-5 col-lg-6 d-flex justify-content-center video-box align-items-stretch position-relative">
                            <a href="https://youtu.be/HvJ0fNwqqQY" class="glightbox play-btn mb-4"></a>
                        </div>
                        <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
                            <h3>Enim quis est voluptatibus aliquid consequatur fugiat</h3>
                            <p>Esse voluptas cumque vel exercitationem. Reiciendis est hic accusamus. Non ipsam et sed minima temporibus laudantium. Soluta voluptate sed facere corporis dolores excepturi. Libero laboriosam sint et id nulla tenetur. Suscipit aut voluptate.</p>

                            <div class="icon-box">
                                <div class="icon"><i class="bx bx-fingerprint"></i></div>
                                <h4 class="title"><a href="">Lorem Ipsum</a></h4>
                                <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
                            </div>

                            <div class="icon-box">
                                <div class="icon"><i class="bx bx-gift"></i></div>
                                <h4 class="title"><a href="">Nemo Enim</a></h4>
                                <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
                            </div>

                            <div class="icon-box">
                                <div class="icon"><i class="bx bx-atom"></i></div>
                                <h4 class="title"><a href="">Dine Pad</a></h4>
                                <p class="description">Explicabo est voluptatum asperiores consequatur magnam. Et veritatis odit. Sunt aut deserunt minus aut eligendi omnis</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End About Section -->
    </section>
@endsection
