@extends('layouts.main')

@section('title', 'Welcome')

@section('content')
    <div class="index">
        <div class="jumbotron">
            <div class="jumbotron-content">
                <div class="container text-center">
                    <h1>Rock Hard Excavating & Paving</h1>
                    <p>This is some helper text</p>
                    <a href="#get-a-quote" class="btn btn-red mt-4">Get a Quote</a>
                </div>
            </div>
        </div>

        <div class="services pt-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="service-panel text-center mb-3">
                            <div class="icon">
                                <i class="far fa-construction pt-3"></i>
                            </div>
                            <h3 class="mt-1">Excavating</h3>

                            <div class="divider"></div>

                            <p class="service-panel-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore</p>

                            <a href="" class="btn mt-3">Learn More</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="service-panel text-center mb-3">
                            <div class="icon">
                                <i class="fas fa-traffic-cone pt-3"></i>
                            </div>
                            <h3 class="mt-1">Asphalt</h3>

                            <div class="divider"></div>

                            <p class="service-panel-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore</p>

                            <a href="" class="btn mt-3">Learn More</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="service-panel text-center mb-3">
                            <div class="icon">
                                <i class="fas fa-traffic-cone pt-3"></i>
                            </div>
                            <h3 class="mt-1">Asphalt</h3>

                            <div class="divider"></div>

                            <p class="service-panel-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore</p>

                            <a href="" class="btn mt-3">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="excavating mb-4 mt-2">
            <div class="container-fluid">
                <div class="row">
                    <div class="service-text text-center">
                        <h3 class="text-center">Excavating</h3>

                        <div class="divider mb-3"></div>

                        <p>Experience, precision and dedication – that's what sets Diggit Excavation apart from all the rest. No project is too large or too small.</p>
                        <p>Our excavating company has been recognized throughout the industry as a leader in construction site preparation and underground utility installation. We have both the experience and dedication to help you save time and money on your next construction project.</p>
                    </div>
                    <div class="service-image">
                        <img src="{{ asset('/img/excavating.jpg') }}" class="float-start" alt="Excavating">
                    </div>
                </div>
            </div>
        </div>

        <div class="asphalt mb-4">
            <div class="container-fluid">
                <div class="row">
                    <div class="service-image">
                        <img src="{{ asset('/img/paving.jpg') }}" class="float-end" alt="Asphalt">
                    </div>
                    <div class="service-text text-center">
                        <h3 class="text-center">Asphalt</h3>

                        <div class="divider mb-3"></div>

                        <p>The professionals at Diggit provide complete excavation services for both residential construction (subdivisions), as well and commercial sites.</p>
                        <p>Our excavating team offers a wide variety of earth moving services, land grading, underground utilities, demolition, and erosion control. Incorporated into each excavation plan, is the input from our on-staff civil engineer – who helps ensure each project is completed efficiently and affordably.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="contact-form" id="get-a-quote">
            <div class="container">
                <h2 class="text-center">Request a Quote</h2>

                <div class="divider"></div>

                @include('partials.contact-form')
            </div>
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