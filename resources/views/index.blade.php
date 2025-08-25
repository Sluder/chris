@extends('layouts.main')

@section('title', 'Welcome')

@section('content')
    <div class="index">
        <div class="jumbotron">
            <div class="jumbotron-content">
                <div class="container text-center">
                    <h1>Welcome to Christopher Milo Construction LLC</h1>
                    <p>Northeast Ohio Construction, Landscaping & Remodeling</p>
                    <a href="#get-in-touch" class="btn btn-yellow mt-4">Get in Touch</a>

                    <div class="mt-3">
                        @include('partials.flash-message')
                    </div>
                </div>
            </div>
        </div>

        <div class="services">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4">
                        <div class="service-panel mb-3">
                            <div class="text-left">
                                <h3>
                                    <span class="icon">
                                        <i class="far fa-construction"></i>
                                    </span>
                                    Demolition
                                </h3>
                                <div class="divider"></div>
                            </div>

                            <p class="service-panel-content">
                                One of the first steps in most construction projects, you can expect there will be
                                some demo. We have learned over the years how important this step is to our customers.
                                You can be confident we will treat your project with respect, make safety a priority
                                and do the work quickly so we keep the mess to a minimum.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 service-panel-center">
                        <div class="service-panel mb-3">
                            <div class="text-left">
                                <h3>
                                    <span class="icon">
                                        <i class="far fa-tree"></i>
                                    </span>
                                    Landscaping & Outdoor Construction
                                </h3>
                            </div>

                            <div class="divider"></div>

                            <p class="service-panel-content">
                                From infiltration trenches and retaining walls to you becoming the boss of the backyard
                                and the envy of the neighborhood, we work closely with you to bring your outdoor
                                landscaping dreams to a reality.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="service-panel mb-3">
                            <div class="text-left">
                                <h3>
                                    <span class="icon">
                                        <i class="far fa-faucet-drip"></i>
                                    </span>
                                    Electrical and Plumbing
                                </h3>
                            </div>

                            <div class="divider"></div>

                            <p class="service-panel-content">
                                Our teams are ready for your project! We do much of the rough and finish work.
                                Sometimes there is a need for more help. When those times come, we only use
                                additional contractors that we would use in our own homes.
                            </p>
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

                            <p>
                                Let’s face it, we all visit the bathroom and from the words of my beautiful and very
                                wise wife, “It should always be clean and a place that you can be proud of when
                                guests come over!” Once again, she is right! We will listen to your ideas, offer
                                solutions and make your visions, a reality.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="our-work-panel">
                            <div class="image" style="background-image: url('/img/kitchen-1.jpeg')"></div>

                            <h2>Kitchen</h2>

                            <p>
                                How many times a week do you find your child sitting at the kitchen table doing homework
                                or having a snack at the island? Research shows that we spend many hours every week in
                                the kitchen for many reasons. For a fantastic functional kitchen, you should have a few
                                different zones! If you don’t have a cooking zone, a cleaning zone, a prep zone, a
                                consumable and non-consumable zone that you are in love with… we can fix that!
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="our-work-panel">
                            <div class="image" style="background-image: url('/img/shed-1.jpg')"></div>

                            <h2>Outdoors</h2>

                            <p>
                                Have you ever wanted a Garden? Seriously? You know… a place you can show all your
                                friends that you truly have a green thumb and have beautiful blooms or the perfect
                                produce during every Summer? Or how about a grilling area worthy of your new grill?
                                Or how about the new garage on the East side of the property to house all of your
                                tools and “stuff” because you have simply… run out of room? We have lots to talk about!
                            </p>
                        </div>
                    </div>
                </div>

                <div class="text-center">
                    <a href="{{ route('view.ourWork') }}" class="btn btn-yellow mt-4">See Our Work</a>
                </div>
            </div>
        </div>

        <div class="inspections">
            <div class="container">
                <h2 class="text-center">Home Inspections</h2>

                <div class="divider"></div>

                <div class="content">
                    <p class="text-center">Protect Your Investment Before You Buy</p>
                    <p>
                        Buying a home is one of the biggest financial decisions you’ll ever make. Whether you’re a <b>first-time homebuyer</b>, a <b>real estate investor</b>, or simply purchasing your next home, having the right knowledge up front can save you from costly surprises later.
                    </p>
                    <p>
                        That’s where <b>Christopher Milo Construction</b> comes in.
                    </p>
                    <p>
                        A Two-Part Inspection Service :
                    </p>
                    <p>1. Comprehensive Home Inspection</p>
                    <div class="quote" style="margin-left: 25px">
                        <p class="quote-content">
                            <i>
                                “From the foundation to the roof and everything in between,
                                I thoroughly inspect the home you’re considering. <br>With over 35 years in construction, I know where to look and what to look for.”
                            </i>
                        </p>
                        <p class="quote-author">
                            <i>- Christopher Milo</i>
                        </p>
                    </div>
                    <p>2. Repair Cost Estimate</p>
                    <p style="margin-left: 25px">Once the inspection is complete, you’ll receive a <b>guesstimated cost of repairs</b>. This practical breakdown arms you with real numbers you can use in negotiations—or to decide if the home is worth the investment</p>

                    <p><b>Why Choose Christopher Milo?</b></p>
                    <ul>
                        <li><b>35 years of construction experience</b> as a framer, corporate buyer, home builder, and general contractor.</li>
                        <li><b>Extensive product knowledge</b> and expertise in material costs and construction methods.</li>
                        <li><b>Blueprint proficiency</b> for clear, accurate analysis of the property’s structure.</li>
                        <li><b>Client-first approach</b>—I give you the facts you need to make smart decisions.</li>
                    </ul>
                    <p>
                        The minimal investment it takes to have me inspect your home could <b>save you tens of thousands of dollars</b> in unexpected repairs.
                    </p>
                </div>
            </div>
        </div>

        <div class="who-we-are">
            <div class="container">
                <h2 class="text-center">Who We Are</h2>

                <div class="divider"></div>

                <div class="content text-center">
                    <p>
                        Christopher Milo Construction (CMC) is a remodeling contractor in Greater NE
                        Ohio, serving customers from (but not limited to) Western Pennsylvania to
                        Cleveland’s west side. Our team has individually been offering 5-star
                        quality to customers for many years. In January 2023, we are joining our
                        efforts to bring you the best quality at a fair market price.
                    </p>
                    <p>
                        For over 20 years, Christopher Milo Construction has transformed homes in
                        the NE Ohio area with siding, roofing and gutters, kitchens, decks, garages,
                        pole buildings and whole house remodels. We work with the most qualified
                        subcontractors in NE Ohio, and we work with you to find the right product
                        and look for your project! If you are looking to redesign your home or
                        change the look of your kitchen, then you've come to the right place.
                    </p>
                    <p>
                        Many of our customers come to us for various reasons. Some of our
                        customers have a clear plan in mind and some have ideas, but are not sure
                        how to make their ideas a reality. We will patiently walk you through the
                        entire project.
                    </p>
                    <p class="mb-0">
                        Thank you for choosing Christopher Milo Construction!
                    </p>
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
