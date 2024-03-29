@extends('layouts.client.master')

@section('title', 'WhaFood')

@section('content')


    <!-- ===============================================-->
    <!--   Header Main Content-->
    <!-- ===============================================-->

    <main class="main" id="top">

        {{-- NavBar --}}
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" data-navbar-on-scroll="data-navbar-on-scroll">
            <div class="container"><a class="navbar-brand d-inline-flex" href="index.html"><img class="d-inline-block"
                        src="{{ asset('client/img/gallery/logo.svg') }}" alt="logo" /><span
                        class="text-1000 fs-3 fw-bold ms-2 text-gradient">Whafood</span></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation"><span class="navbar-toggler-icon">
                    </span></button>
                <div class="collapse navbar-collapse border-top border-lg-0 my-2 mt-lg-0" id="navbarSupportedContent">
                    <div class="mx-auto pt-5 pt-lg-0 d-block d-lg-none d-xl-block">
                        <p class="mb-0 fw-bold text-lg-center">Deliver to: <i
                                class="fas fa-map-marker-alt text-warning mx-2"></i><span class="fw-normal">Current
                                Location </span><span>Ranchi</span></p>
                    </div>
                    <div class="d-flex mt-4 mt-lg-0 ms-lg-auto ms-xl-0">
                        <div class="input-group-icon pe-2"><i class="fas fa-search input-box-icon text-primary"></i>
                            <input class="form-control border-0 input-box bg-100" type="search" placeholder="Search Food"
                                aria-label="Search" />
                        </div>
                        @guest
                            <a class="btn btn-primary shadow-warning text-white" href="{{ url('/login') }}"> <i
                                    class="fas fa-user me-2"></i>Sign In</a>
                        @else
                            <a class="btn btn-white shadow-warning text-warning"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> <i
                                    class="fas fa-user me-2"></i>Logout</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>

                        @endguest
                    </div>
                </div>
            </div>
        </nav>

        <section class="py-5 overflow-hidden bg-primary" id="home">
            <div class="container">
                <div class="row flex-center">
                    <div class="col-md-5 col-lg-6 order-0 order-md-1 mt-8 mt-md-0"><a class="img-landing-banner"
                            href="#!"><img class="img-fluid" src="{{ asset('client/img/gallery/hero-header.png') }}"
                                alt="hero-header" /></a></div>
                    <div class="col-md-7 col-lg-6 py-8 text-md-start text-center">
                        <h1 class="display-1 fs-md-5 fs-lg-6 fs-xl-8 text-light">Are you starving?</h1>
                        <h1 class="text-800 mb-5 fs-4">Within a few clicks, find meals that<br
                                class="d-none d-xxl-block" />are accessible near you</h1>
                        <div class="card w-xxl-75">
                            <div class="card-body">
                                <nav>
                                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                        <button class="nav-link active mb-3" id="nav-home-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-home" type="button" role="tab"
                                            aria-controls="nav-home" aria-selected="true"><i
                                                class="fas fa-motorcycle me-2"></i>Delivery</button>
                                        <button class="nav-link mb-3" id="nav-profile-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-profile" type="button" role="tab"
                                            aria-controls="nav-profile" aria-selected="false"><i
                                                class="fas fa-shopping-bag me-2"></i>Pickup</button>
                                    </div>
                                </nav>
                                <div class="tab-content mt-3" id="nav-tabContent">
                                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                                        aria-labelledby="nav-home-tab">
                                        <form class="row gx-2 gy-2 align-items-center">
                                            <div class="col">
                                                <div class="input-group-icon"><i
                                                        class="fas fa-map-marker-alt text-danger input-box-icon"></i>
                                                    <label class="visually-hidden" for="inputDelivery">Address</label>
                                                    <input class="form-control input-box form-foodwagon-control"
                                                        id="inputDelivery" type="text"
                                                        placeholder="Enter Your Address" />
                                                </div>
                                            </div>
                                            <div class="d-grid gap-3 col-sm-auto">
                                                <button class="btn btn-danger" type="submit">Find Food</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="tab-pane fade" id="nav-profile" role="tabpanel"
                                        aria-labelledby="nav-profile-tab">
                                        <form class="row gx-4 gy-2 align-items-center">
                                            <div class="col">
                                                <div class="input-group-icon"><i
                                                        class="fas fa-map-marker-alt text-danger input-box-icon"></i>
                                                    <label class="visually-hidden" for="inputPickup">Address</label>
                                                    <input class="form-control input-box form-foodwagon-control"
                                                        id="inputPickup" type="text"
                                                        placeholder="Enter Your Address" />
                                                </div>
                                            </div>
                                            <div class="d-grid gap-3 col-sm-auto">
                                                <button class="btn btn-danger" type="submit">Find Food</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ============================================-->
        <!-- <section> begin How does it work ============================-->
        <section class="py-0 bg-primary-gradient">

            <div class="container">
                <div class="row justify-content-center g-0">
                    <div class="col-xl-9">
                        <div class="col-lg-6 text-center mx-auto mb-3 mb-md-5 mt-4">
                            <h5 class="fw-bold text-danger fs-3 fs-lg-5 lh-sm my-6">How does it work</h5>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 col-md-3 mb-6">
                                <div class="text-center"><img class="shadow-icon"
                                        src="{{ asset('client/img/gallery/location.png') }}" height="112"
                                        alt="..." />
                                    <h5 class="mt-4 fw-bold">Select location</h5>
                                    <p class="mb-md-0">Choose the location where your food will be delivered.</p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3 mb-6">
                                <div class="text-center"><img class="shadow-icon"
                                        src="{{ asset('client/img/gallery/order.png') }}" height="112"
                                        alt="..." />
                                    <h5 class="mt-4 fw-bold">Choose order</h5>
                                    <p class="mb-md-0">Check over hundreds of menus to pick your favorite food</p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3 mb-6">
                                <div class="text-center"><img class="shadow-icon"
                                        src="{{ asset('client/img/gallery/pay.png') }}" height="112" alt="..." />
                                    <h5 class="mt-4 fw-bold">Pay advanced</h5>
                                    <p class="mb-md-0">It's quick, safe, and simple. Select several methods of payment
                                    </p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3 mb-6">
                                <div class="text-center"><img class="shadow-icon"
                                        src="{{ asset('client/img/gallery/meals.png') }}" height="112"
                                        alt="..." />
                                    <h5 class="mt-4 fw-bold">Enjoy meals</h5>
                                    <p class="mb-md-0">Food is made and delivered directly to your home.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- end of .container-->

        </section>
        <!-- <section> close ============================-->
        <!-- ============================================-->




        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section class="py-4 overflow-hidden">

            <div class="container">
                <div class="row h-100">
                    <div class="col-lg-7 mx-auto text-center mt-7 mb-5">
                        <h5 class="fw-bold fs-3 fs-lg-5 lh-sm">Popular items</h5>
                    </div>
                    <div class="col-12">
                        <div class="carousel slide" id="carouselPopularItems" data-bs-touch="false"
                            data-bs-interval="false">
                            <div class="carousel-inner">
                                <div class="carousel-item active" data-bs-interval="10000">
                                    <div class="row gx-3 h-100 align-items-center">
                                        @foreach ($featured_products as $item)
                                            <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                                                <div class="card card-span h-100 rounded-3"><img
                                                        class="img-fluid rounded-3 h-100"
                                                        src="{{ 'uploads/product/' . $item->product->image }}"
                                                        alt="..." />
                                                    <div class="card-body ps-0">
                                                        <h5 class="fw-bold text-1000 text-truncate mb-1">
                                                            {{ $item->product->title }}</h5>
                                                        <div>
                                                            <span class="text-warning me-2"><i  class="fas fa-map-marker-alt"></i></span>
                                                            <span class="text-primary">{{$item->product->category->title}}</span>
                                                        </div>
                                                        <span  class="text-1000 fw-bold">{{ $item->product->price }}</span>
                                                    </div>
                                                </div>
                                                <div class="d-grid gap-2"><a class="btn btn-lg btn-danger" href="{{route('shop.cart.add', $item->product->id)}}" role="button">Order now</a></div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev carousel-icon" type="button"
                        data-bs-target="#carouselPopularItems" data-bs-slide="prev"><span
                            class="carousel-control-prev-icon hover-top-shadow" aria-hidden="true"></span><span
                            class="visually-hidden">Previous</span></button>
                    <button class="carousel-control-next carousel-icon" type="button"
                        data-bs-target="#carouselPopularItems" data-bs-slide="next"><span
                            class="carousel-control-next-icon hover-top-shadow" aria-hidden="true"></span><span
                            class="visually-hidden">Next </span></button>
                </div>
            </div>
            </div>
            </div><!-- end of .container-->

        </section>
        <!-- <section> close ============================-->
        <!-- ============================================-->


        {{-- <section id="testimonial">
            <div class="container">
                <div class="row h-100">
                    <div class="col-lg-7 mx-auto text-center mb-6">
                        <h5 class="fw-bold fs-3 fs-lg-5 lh-sm mb-3">Featured Restaurants</h5>
                    </div>
                </div>
                <div class="row gx-2">
                    <div class="col-sm-6 col-md-4 col-lg-3 h-100 mb-5">
                        <div class="card card-span h-100 text-white rounded-3"><img class="img-fluid rounded-3 h-100"
                                src="{{ asset('client/img/gallery/food-world.png') }}" alt="..." />
                            <div class="card-img-overlay ps-0"><span class="badge bg-danger p-2 ms-3"><i
                                        class="fas fa-tag me-2 fs-0"></i><span class="fs-0">20%
                                        off</span></span><span class="badge bg-primary ms-2 me-1 p-2"><i
                                        class="fas fa-clock me-1 fs-0"></i><span class="fs-0">Fast</span></span>
                            </div>
                            <div class="card-body ps-0">
                                <div class="d-flex align-items-center mb-3"><img class="img-fluid"
                                        src="{{ asset('client/img/gallery/food-world-logo.png') }}" alt="" />
                                    <div class="flex-1 ms-3">
                                        <h5 class="mb-0 fw-bold text-1000">Food world</h5><span
                                            class="text-primary fs--1 me-1"><i class="fas fa-star"></i></span><span
                                            class="mb-0 text-primary">46</span>
                                    </div>
                                </div><span class="badge bg-soft-danger p-2"><span class="fw-bold fs-1 text-danger">Opens
                                        Tomorrow</span></span>
                            </div>
                        </div>
                    </div>



                    <div class="col-12 d-flex justify-content-center mt-5"> <a class="btn btn-lg btn-primary"
                            href="#!">View All <i class="fas fa-chevron-right ms-2"> </i></a></div>
                </div>
            </div>
        </section> --}}


        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section class="py-8 overflow-hidden">

            <div class="container">
                <div class="row flex-center mb-6">
                    <div class="col-lg-7">
                        <h5 class="fw-bold fs-3 fs-lg-5 lh-sm text-center text-lg-start">Category by Food</h5>
                    </div>
                    <div class="col-lg-4 text-lg-end text-center"><a class="btn btn-lg text-800 me-2" href="#"
                            role="button">VIEW ALL <i class="fas fa-chevron-right ms-2"></i></a></div>
                    <div class="col-lg-auto position-relative">
                        <button class="carousel-control-prev s-icon-prev carousel-icon" type="button"
                            data-bs-target="#carouselSearchByFood" data-bs-slide="prev"><span
                                class="carousel-control-prev-icon hover-top-shadow" aria-hidden="true"></span><span
                                class="visually-hidden">Previous</span></button>
                        <button class="carousel-control-next s-icon-next carousel-icon" type="button"
                            data-bs-target="#carouselSearchByFood" data-bs-slide="next"><span
                                class="carousel-control-next-icon hover-top-shadow" aria-hidden="true"></span><span
                                class="visually-hidden">Next</span></button>
                    </div>
                </div>
                <div class="row flex-center">
                    <div class="col-12">
                        <div class="carousel slide" id="carouselSearchByFood" data-bs-touch="false"
                            data-bs-interval="false">
                            <div class="carousel-inner">
                                <div class="carousel-item active" data-bs-interval="10000">
                                    <div class="row h-100 align-items-center">
                                        @foreach ($featured_categories as $item)
                                        <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                                            <div class="card card-span h-100 rounded-circle"><img
                                                    class="img-fluid rounded-circle h-100"
                                                    src="{{ 'uploads/category/' . $item->category->image }}"
                                                    alt="..." />
                                                <div class="card-body ps-0">
                                                    <h5 class="text-center fw-bold text-1000 text-truncate mb-2"> {{ $item->category->title }}
                                                    </h5>
                                                </div>
                                            </div>
                                        </div>
                                      @endforeach
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- end of .container-->

        </section>
        <!-- <section> close ============================-->
        <!-- ============================================-->


        <section>
            <div class="bg-holder"
                style="background-image:url({{ asset('client/img/gallery/cta-one-bg.png') }});background-position:center;background-size:cover;">
            </div>
            <!--/.bg-holder-->

            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xxl-10">
                        <div class="card card-span shadow-warning" style="border-radius: 35px;">
                            <div class="card-body py-5">
                                <div class="row justify-content-evenly">
                                    <div class="col-md-3">
                                        <div
                                            class="d-flex d-md-block d-xl-flex justify-content-evenly justify-content-lg-between">
                                            <img src="{{ asset('client/img/icons/discounts.png') }}" width="100"
                                                alt="..." />
                                            <div class="d-flex d-lg-block d-xl-flex flex-center">
                                                <h2 class="fw-bolder text-1000 mb-0 text-gradient">Daily<br
                                                        class="d-none d-md-block" />Discounts </h2>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 hr-vertical">
                                        <div
                                            class="d-flex d-md-block d-xl-flex justify-content-evenly justify-content-lg-between">
                                            <img src="{{ asset('client/img/icons/live-tracking.png') }}" width="100"
                                                alt="..." />
                                            <div class="d-flex d-lg-block d-xl-flex flex-center">
                                                <h2 class="fw-bolder text-1000 mb-0 text-gradient">Live Tracking</h2>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 hr-vertical">
                                        <div
                                            class="d-flex d-md-block d-xl-flex justify-content-evenly justify-content-lg-between">
                                            <img src="{{ asset('client/img/icons/quick-delivery.png') }}" width="100"
                                                alt="..." />
                                            <div class="d-flex d-lg-block d-xl-flex flex-center">
                                                <h2 class="fw-bolder text-1000 mb-0 text-gradient">Quick Delivery
                                                </h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row flex-center mt-md-8">
                    <div class="col-lg-5 d-none d-lg-block" style="margin-bottom: -122px;"> <img class="w-100"
                            src="{{ asset('client/img/gallery/phone-cta-one.png') }}" alt="..." /></div>
                    <div class="col-lg-5 mt-7 mt-md-0">
                        <h1 class="text-primary">Install the app</h1>
                        <p>It's never been easier to order food. Look for the finest <br
                                class="d-none d-xl-block" />discounts and you'll be lost in a world of delectable
                            food.</p><a class="pe-2" href="https://www.apple.com/app-store/" target="_blank"><img
                                src="{{ asset('client/img/gallery/app-store.svg') }}" width="160"
                                alt="" /></a><a href="https://play.google.com/store/apps" target="_blank"><img
                                src="{{ asset('client/img/gallery/google-play.svg') }}" width="160"
                                alt="" /></a>
                    </div>
                </div>
            </div>
        </section>


        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section class="pb-5 pt-8">

            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="card card-span mb-3 shadow-lg">
                            <div class="card-body py-0">
                                <div class="row justify-content-center">
                                    <div class="col-md-5 col-xl-7 col-xxl-8 g-0 order-0 order-md-1"><img
                                            class="img-fluid w-100 fit-cover h-100 rounded-top rounded-md-end rounded-md-top-0"
                                            src="{{ asset('client/img/gallery/crispy-sandwiches.png') }}"
                                            alt="..." /></div>
                                    <div class="col-md-7 col-xl-5 col-xxl-4 p-4 p-lg-5">
                                        <h1 class="card-title mt-xl-5 mb-4">Best deals <span class="text-primary">
                                                Crispy Sandwiches</span></h1>
                                        <p class="fs-1">Enjoy the large size of sandwiches. Complete your meal with
                                            the perfect slice of sandwiches.</p>
                                        <div class="d-grid bottom-0"><a class="btn btn-lg btn-primary mt-xl-6"
                                                href="#!">PROCEED TO ORDER<i
                                                    class="fas fa-chevron-right ms-2"></i></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- end of .container-->

        </section>
        <!-- <section> close ============================-->
        <!-- ============================================-->




        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section class="py-0">

            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="card card-span mb-3 shadow-lg">
                            <div class="card-body py-0">
                                <div class="row justify-content-center">
                                    <div class="col-md-5 col-xl-7 col-xxl-8 g-0 order-md-0"><img
                                            class="img-fluid w-100 fit-cover h-100 rounded-top rounded-md-start rounded-md-top-0"
                                            src="{{ asset('client/img/gallery/fried-chicken.png') }}" alt="..." />
                                    </div>
                                    <div class="col-md-7 col-xl-5 col-xxl-4 p-4 p-lg-5">
                                        <h1 class="card-title mt-xl-5 mb-4">Celebrate parties with <span
                                                class="text-primary">Fried Chicken</span></h1>
                                        <p class="fs-1">Get the best fried chicken smeared with a lip smacking lemon
                                            chili flavor. Check out best deals for fried chicken.</p>
                                        <div class="d-grid bottom-0"><a class="btn btn-lg btn-primary mt-xl-6"
                                                href="#!">PROCEED TO ORDER<i
                                                    class="fas fa-chevron-right ms-2"></i></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- end of .container-->

        </section>
        <!-- <section> close ============================-->
        <!-- ============================================-->




        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section class="pt-5">

            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="card card-span mb-3 shadow-lg">
                            <div class="card-body py-0">
                                <div class="row justify-content-center">
                                    <div class="col-md-5 col-xl-7 col-xxl-8 g-0 order-0 order-md-1"><img
                                            class="img-fluid w-100 fit-cover h-100 rounded-top rounded-md-end rounded-md-top-0"
                                            src="{{ asset('client/img/gallery/pizza.png') }}" alt="..." />
                                    </div>
                                    <div class="col-md-7 col-xl-5 col-xxl-4 p-4 p-lg-5">
                                        <h1 class="card-title mt-xl-5 mb-4">Wanna eat hot & <span
                                                class="text-primary">spicy Pizza?</span></h1>
                                        <p class="fs-1">Pair up with a friend and enjoy the hot and crispy pizza
                                            pops. Try it with the best deals.</p>
                                        <div class="d-grid bottom-0"><a class="btn btn-lg btn-primary mt-xl-6"
                                                href="#!">PROCEED TO ORDER<i
                                                    class="fas fa-chevron-right ms-2"></i></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- end of .container-->

        </section>
        <!-- <section> close ============================-->
        <!-- ============================================-->


        <section class="py-0">
            <div class="bg-holder"
                style="background-image:url({{ asset('client/img/gallery/cta-two-bg.png') }});background-position:center;background-size:cover;">
            </div>
            <!--/.bg-holder-->

            <div class="container">
                <div class="row flex-center">
                    <div class="col-xxl-9 py-7 text-center">
                        <h1 class="fw-bold mb-4 text-white fs-6">Are you ready to order <br />with the best deals?
                        </h1><a class="btn btn-danger" href="#"> PROCEED TO ORDER<i
                                class="fas fa-chevron-right ms-2"></i></a>
                    </div>
                </div>
            </div>
        </section>





    </main>
    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->




    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@200;300;400;600;700;900&amp;display=swap"
        rel="stylesheet">

@endsection
