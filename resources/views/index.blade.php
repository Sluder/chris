@extends('layouts.main')

@section('title', 'Welcome')

@section('content')
    <div class="index">
        <div class="jumbotron">
            <div class="jumbotron-content">
                <div class="container text-center">
                    <h1>Rock Hard Excavating</h1>
                    <p>Southern Ohio Asphalt & Excavating</p>
                    <a href="#get-a-quote" class="btn btn-red mt-4">Get a Quote</a>
                </div>
            </div>
        </div>

        <div class="services pt-5 pb-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="service-panel text-center mb-3">
                            <div class="icon">
                                <i class="far fa-construction"></i>
                            </div>
                            <h3 class="mt-1">Excavating</h3>

                            <div class="divider"></div>

                            <p class="service-panel-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="service-panel text-center mb-3">
                            <div class="icon">
                                <i class="fas fa-traffic-cone"></i>
                            </div>
                            <h3 class="mt-1">Asphalt</h3>

                            <div class="divider"></div>

                            <p class="service-panel-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="service-panel text-center mb-3">
                            <div class="icon">
                                <i class="fal fa-road"></i>
                            </div>
                            <h3 class="mt-1">Striping</h3>

                            <div class="divider"></div>

                            <p class="service-panel-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="who-we-are pt-5 pb-5 text-center">
            <h2>Who We Are</h2>
            <div class="divider"></div>

            <div class="container">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tdo eiusmod tempor incididunt ut laboreLorem ipsudo eiusmod tempor incididunt ut laboreLorem ipsudo eiusmod tempor incididunt ut laboreLorem ipsudo eiusmod tempor incididunt ut laboreLorem ipsuempor incididunt ut laboreLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore</p>
            </div>

            <div id="image-carousel" class="carousel slide mt-5 mb-4" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#image-carousel" data-bs-slide-to="0" class="active" aria-current="true"></button>
                    <button type="button" data-bs-target="#image-carousel" data-bs-slide-to="1"></button>
                    <button type="button" data-bs-target="#image-carousel" data-bs-slide-to="2"></button>
                </div>

                <div class="carousel-inner text-center">
                    <div class="carousel-item active">
                        <div class="d-flex justify-content-center">
                            <img class="d-block" src="{{ asset('/img/asphalt.jpg') }}">
                            <img class="d-block ms-4 me-4" src="{{ asset('/img/excavating.jpg') }}">
                            <img class="d-block" src="{{ asset('/img/paving.jpg') }}">
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="d-flex justify-content-center">
                            <img class="d-block" src="{{ asset('/img/excavating.jpg') }}">
                            <img class="d-block ms-4 me-4" src="{{ asset('/img/paving.jpg') }}">
                            <img class="d-block" src="{{ asset('/img/asphalt.jpg') }}">
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="d-flex justify-content-center">
                            <img class="d-block" src="{{ asset('/img/asphalt.jpg') }}">
                            <img class="d-block ms-4 me-4" src="{{ asset('/img/paving.jpg') }}">
                            <img class="d-block" src="{{ asset('/img/excavating.jpg') }}">
                        </div>
                    </div>
                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#image-carousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#image-carousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>

        <div class="contact-form" id="get-a-quote">
            <div class="container">
                <h2 class="text-center">Request a Quote</h2>

                <div class="divider"></div>

                @include('partials.contact-form')
            </div>

            <p class="copyright text-center mt-3">All rights reserved. <i class="far fa-copyright"></i> 2020 - @php echo date('Y') @endphp</p>
        </div>
    </div>
@endsection

@push('scripts')
    <script type="text/javascript">
        $(function () {
            $(document).scroll(function () {
                let $navbar = $(".navbar");

                $navbar.toggleClass('scrolled', $(this).scrollTop() > $navbar.height());
            });
        });
    </script>
@endpush