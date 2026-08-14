@extends('layouts.app')

@section('title', 'Home | Veyrion')

@section('content')

<!-- HERO SECTION -->
<section class="hero">

    <div class="container">

        <div class="hero-content">

            <span class="section-label">
                Digital Solutions for Modern Business
            </span>

            <h1 class="hero-title">
                Build smarter.
                <span class="gradient-text">Grow faster.</span>
            </h1>

            <p class="hero-description">
                Veyrion creates modern digital solutions that help
                businesses simplify their processes, improve their
                online presence, and move confidently into the future.
            </p>

            <div class="hero-actions">

                <a href="{{ route('contact') }}" class="btn btn-primary">
                    Start a Project →
                </a>

                <a href="{{ route('services') }}" class="btn btn-secondary">
                    Explore Services
                </a>

            </div>

        </div>

    </div>

</section>


<!-- INTRODUCTION -->
<section class="section">

    <div class="container">

        <div class="section-heading">

            <span class="section-label">
                What We Do
            </span>

            <h2>
                Technology designed
                <span class="gradient-text">around your goals.</span>
            </h2>

            <p>
                We combine technology, creativity, and thoughtful
                design to create digital experiences that solve
                real business challenges.
            </p>

        </div>


        <div class="features-grid">

            <!-- FEATURE 1 -->
            <div class="feature-card">

                <span class="feature-icon">
                    ✦
                </span>

                <h3>
                    Digital Innovation
                </h3>

                <p>
                    We use modern technologies and creative
                    strategies to turn ideas into practical
                    digital solutions.
                </p>

            </div>


            <!-- FEATURE 2 -->
            <div class="feature-card">

                <span class="feature-icon">
                    ◈
                </span>

                <h3>
                    User-Focused Design
                </h3>

                <p>
                    We create simple, intuitive, and engaging
                    experiences that keep users at the center
                    of every project.
                </p>

            </div>


            <!-- FEATURE 3 -->
            <div class="feature-card">

                <span class="feature-icon">
                    ◎
                </span>

                <h3>
                    Scalable Solutions
                </h3>

                <p>
                    Our solutions are designed to support your
                    business today while giving you room to grow.
                </p>

            </div>

        </div>

    </div>

</section>


<!-- ABOUT PREVIEW -->
<section class="section section-alt">

    <div class="container">

        <div class="about-grid">

            <div class="about-content">

                <span class="section-label">
                    Why Veyrion
                </span>

                <h2>
                    Turning ideas into
                    meaningful digital experiences.
                </h2>

                <p>
                    We believe technology should do more than
                    simply look impressive. It should make
                    processes easier, solve problems, and create
                    better experiences.
                </p>

                <p>
                    Our approach combines reliable development,
                    thoughtful design, and a clear understanding
                    of each client's goals.
                </p>

                <a href="{{ route('about') }}" class="btn btn-secondary">
                    Learn More About Us →
                </a>

            </div>


            <div class="about-card">

                <div class="about-card-icon">
                    V
                </div>

                <h3>
                    Built for what's next.
                </h3>

                <p>
                    From your first idea to your next stage of
                    growth, Veyrion helps you build with
                    confidence.
                </p>

                <div class="about-stat">

                    <strong>
                        01
                    </strong>

                    <span>
                        Purpose-driven technology
                    </span>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- SERVICES PREVIEW -->
<section class="section">

    <div class="container">

        <div class="section-heading">

            <span class="section-label">
                Our Services
            </span>

            <h2>
                Solutions that move
                <span class="gradient-text">business forward.</span>
            </h2>

            <p>
                Explore our range of digital services designed
                to help businesses build, improve, and grow.
            </p>

        </div>


        <div class="services-grid">

            <div class="service-card">

                <span class="service-number">
                    01
                </span>

                <h3>
                    Web Development
                </h3>

                <p>
                    Modern and responsive websites built
                    around your business needs.
                </p>

            </div>


            <div class="service-card">

                <span class="service-number">
                    02
                </span>

                <h3>
                    UI/UX Design
                </h3>

                <p>
                    Clean and user-friendly digital experiences
                    designed for your audience.
                </p>

            </div>


            <div class="service-card">

                <span class="service-number">
                    03
                </span>

                <h3>
                    Cloud Solutions
                </h3>

                <p>
                    Flexible technology solutions that support
                    efficiency, collaboration, and growth.
                </p>

            </div>

        </div>


        <div class="center-action">

            <a href="{{ route('services') }}" class="btn btn-primary">
                View All Services →
            </a>

        </div>

    </div>

</section>


<!-- CTA -->
<section class="cta">

    <div class="container">

        <div class="cta-box">

            <span class="section-label">
                Let's Build Together
            </span>

            <h2>
                Have an idea worth building?
            </h2>

            <p>
                Let's turn your vision into a digital experience
                that creates real value for your business.
            </p>

            <a href="{{ route('contact') }}" class="btn btn-primary">
                Start a Conversation →
            </a>

        </div>

    </div>

</section>

@endsection