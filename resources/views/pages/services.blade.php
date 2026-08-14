@extends('layouts.app')

@section('title', 'Services | Veyrion')

@section('content')

<!-- SERVICES HERO -->
<section class="page-hero">

    <div class="container">

        <span class="section-label">
            What We Offer
        </span>

        <h1 class="page-title">
            Digital solutions
            <span class="gradient-text">built to move you forward.</span>
        </h1>

        <p class="page-description">
            From websites and user experiences to cloud solutions,
            Veyrion provides practical technology services designed
            to help businesses grow and adapt.
        </p>

    </div>

</section>


<!-- SERVICES -->
<section class="section">

    <div class="container">

        <div class="section-heading">

            <span class="section-label">
                Our Services
            </span>

            <h2>
                Technology that works
                <span class="gradient-text">for your business.</span>
            </h2>

            <p>
                We combine technical expertise and creative
                thinking to deliver solutions that are useful,
                reliable, and built around your goals.
            </p>

        </div>


        <div class="services-grid">

            <!-- SERVICE 1 -->
            <div class="service-card">

                <span class="service-number">
                    01
                </span>

                <h3>
                    Web Development
                </h3>

                <p>
                    We create responsive and modern websites
                    that represent your brand and provide
                    a smooth experience across devices.
                </p>

                <a href="{{ route('contact') }}">
                    Learn More →
                </a>

            </div>


            <!-- SERVICE 2 -->
            <div class="service-card">

                <span class="service-number">
                    02
                </span>

                <h3>
                    UI/UX Design
                </h3>

                <p>
                    We design clean and intuitive interfaces
                    that make digital products easier and
                    more enjoyable to use.
                </p>

                <a href="{{ route('contact') }}">
                    Learn More →
                </a>

            </div>


            <!-- SERVICE 3 -->
            <div class="service-card">

                <span class="service-number">
                    03
                </span>

                <h3>
                    Cloud Solutions
                </h3>

                <p>
                    We provide flexible cloud-based solutions
                    that support collaboration, efficiency,
                    and business growth.
                </p>

                <a href="{{ route('contact') }}">
                    Learn More →
                </a>

            </div>


            <!-- SERVICE 4 -->
            <div class="service-card">

                <span class="service-number">
                    04
                </span>

                <h3>
                    Business Applications
                </h3>

                <p>
                    We develop practical applications that
                    help businesses manage processes and
                    improve everyday operations.
                </p>

                <a href="{{ route('contact') }}">
                    Learn More →
                </a>

            </div>


            <!-- SERVICE 5 -->
            <div class="service-card">

                <span class="service-number">
                    05
                </span>

                <h3>
                    Digital Strategy
                </h3>

                <p>
                    We help businesses plan their digital
                    direction and identify opportunities
                    where technology can create value.
                </p>

                <a href="{{ route('contact') }}">
                    Learn More →
                </a>

            </div>


            <!-- SERVICE 6 -->
            <div class="service-card">

                <span class="service-number">
                    06
                </span>

                <h3>
                    Technology Consulting
                </h3>

                <p>
                    We provide technology guidance to help
                    businesses choose practical tools,
                    systems, and solutions for their needs.
                </p>

                <a href="{{ route('contact') }}">
                    Learn More →
                </a>

            </div>

        </div>

    </div>

</section>


<!-- PROCESS -->
<section class="section section-alt">

    <div class="container">

        <div class="section-heading">

            <span class="section-label">
                Our Process
            </span>

            <h2>
                From idea to
                <span class="gradient-text">execution.</span>
            </h2>

            <p>
                We follow a simple process to make every
                project clear, organized, and focused.
            </p>

        </div>


        <div class="values-grid">

            <!-- STEP 1 -->
            <div class="value-card">

                <span class="value-number">
                    01
                </span>

                <h3>
                    Discover
                </h3>

                <p>
                    We learn about your goals, challenges,
                    audience, and requirements.
                </p>

            </div>


            <!-- STEP 2 -->
            <div class="value-card">

                <span class="value-number">
                    02
                </span>

                <h3>
                    Plan
                </h3>

                <p>
                    We create a clear approach and identify
                    the right technology and design direction.
                </p>

            </div>


            <!-- STEP 3 -->
            <div class="value-card">

                <span class="value-number">
                    03
                </span>

                <h3>
                    Build
                </h3>

                <p>
                    We develop and refine the solution while
                    keeping quality and usability in focus.
                </p>

            </div>

        </div>

    </div>

</section>


<!-- CTA -->
<section class="cta">

    <div class="container">

        <div class="cta-box">

            <span class="section-label">
                Start Your Project
            </span>

            <h2>
                Let's build what's next.
            </h2>

            <p>
                Tell us what you're working on and
                let's explore how Veyrion can help.
            </p>

            <a href="{{ route('contact') }}" class="btn btn-primary">
                Get In Touch →
            </a>

        </div>

    </div>

</section>

@endsection