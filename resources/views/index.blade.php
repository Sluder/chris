@extends('layouts.main')

@section('title', 'Welcome')

@section('content')
    <div class="index">
        <div class="jumbotron">
            <div class="jumbotron-content">
                <div class="container text-center">
                    <h1>Welcome to CMC</h1>
                    <p>Northern Ohio Construction & Renovation</p>
                    <a href="#get-in-touch" class="btn btn-yellow mt-4">Get in Touch</a>
                </div>
            </div>
        </div>

        <div class="services">
            <div class="container-fluid">
                @include('partials.flash-message')

                <div class="row">
                    <div class="col-md-4">
                        <div class="service-panel mb-3">
                            <div class="text-left">
                                <h3>
                                    <span class="icon">
                                        <i class="far fa-plug"></i>
                                    </span>
                                    Electrical
                                </h3>
                                <div class="divider"></div>
                            </div>

                            <p class="service-panel-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A eius facere in magni maxime nam pariatur quam, reiciendis vero voluptates! A, explicab</p>
                        </div>
                    </div>
                    <div class="col-md-4 service-panel-center">
                        <div class="service-panel mb-3">
                            <div class="text-left">
                                <h3>
                                    <span class="icon">
                                        <i class="far fa-construction"></i>
                                    </span>
                                    Demolition & Renovation
                                </h3>
                            </div>

                            <div class="divider"></div>

                            <p class="service-panel-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A eius facere in magni maxime nam pariatur quam, reiciendis vero voluptates! A, explicab</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="service-panel mb-3">
                            <div class="text-left">
                                <h3>
                                    <span class="icon">
                                        <i class="far fa-faucet-drip"></i>
                                    </span>
                                    Plumbing
                                </h3>
                            </div>

                            <div class="divider"></div>

                            <p class="service-panel-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A eius facere in magni maxime nam pariatur quam, reiciendis vero voluptates! A, explicab</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="our-work">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-6 offset-md-3">
                        <div class="text-center">
                            <div class="quote">
                                <p class="quote-content">
                                    <i>
                                        “We will never give you creative reasons why something didn’t work,
                                        we simply do what we say we are going to do”
                                    </i>
                                </p>
                                <p class="quote-author">
                                    <i>- Christopher Milo</i>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4">
                        <div class="our-work-panel">
                            <div class="image" style="background-image: url('/img/bathroom-1.jpg')"></div>

                            <h2>Bathroom</h2>

                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A eius facere in magni maxime nam pariatur quam, reiciendis vero voluptates! A, explicabo iste nemo obcaecati perspiciatis saepe suscipit vitae voluptas.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="our-work-panel">
                            <div class="image" style="background-image: url('/img/kitchen-1.jpeg')"></div>

                            <h2>Kitchen</h2>

                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A eius facere in magni maxime nam pariatur quam, reiciendis vero voluptates! A, explicabo iste nemo obcaecati perspiciatis saepe suscipit vitae voluptas.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="our-work-panel">
                            <div class="image" style="background-image: url('/img/shed-1.jpg')"></div>

                            <h2>Outdoors</h2>

                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A eius facere in magni maxime nam pariatur quam, reiciendis vero voluptates! A, explicabo iste nemo obcaecati perspiciatis saepe suscipit vitae voluptas.</p>
                        </div>
                    </div>
                </div>

                <div class="text-center">
                    <a href="" class="btn btn-yellow mt-4">See Our Work</a>
                </div>
            </div>
        </div>

        <div class="contact-form" id="get-in-touch">
            <div class="container">
                <h2 class="text-center">Get in Touch</h2>

                <div class="divider"></div>

                @include('partials.contact-form')
            </div>

            <p class="copyright text-center mt-3">All rights reserved. &nbsp;<i class="far fa-copyright"></i>&nbsp;2022 - @php echo date('Y') @endphp</p>
        </div>
    </div>
@endsection
