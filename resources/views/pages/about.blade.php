@extends('layouts.app')

@section('title', 'About Us | Veyrion')

@section('content')

<!-- ABOUT HERO -->
<section class="page-hero">

    <div class="container">

        <span class="section-label">
            About Veyrion
        </span>

        <h1 class="page-title">
            We build technology
            <span class="gradient-text">with purpose.</span>
        </h1>

        <p class="page-description">
            Veyrion is a digital technology company focused on
            creating practical, modern, and reliable solutions
            that help businesses grow.
        </p>

    </div>

</section>


<!-- ABOUT INTRODUCTION -->
<section class="section">

    <div class="container">

        <div class="about-grid">

            <div class="about-content">

                <span class="section-label">
                    Who We Are
                </span>

                <h2>
                    Turning ideas into
                    meaningful digital experiences.
                </h2>

                <p>
                    Veyrion was created with a simple goal:
                    to help businesses use technology more
                    effectively. We combine creative thinking,
                    modern development practices, and
                    user-focused design to create digital
                    solutions that make a difference.
                </p>

                <p>
                    From websites and applications to cloud
                    solutions and digital experiences, our team
                    works closely with clients to understand
                    their needs and build solutions that fit
                    their goals.
                </p>

            </div>


            <div class="about-card">

                <div class="about-card-icon">
                    V
                </div>

                <h3>
                    Technology with Purpose
                </h3>

                <p>
                    We believe technology should solve real
                    problems, simplify processes, and create
                    better experiences for people and businesses.
                </p>

            </div>

        </div>

    </div>

</section>


<!-- MISSION & VISION -->
<section class="section section-alt">

    <div class="container">

        <div class="section-heading">

            <span class="section-label">
                What Drives Us
            </span>

            <h2>
                Our mission and vision.
            </h2>

            <p>
                We are focused on creating technology that
                supports businesses today while preparing
                them for tomorrow.
            </p>

        </div>


        <div class="values-grid">

            <!-- MISSION -->
            <div class="value-card">

                <span class="value-number">
                    01
                </span>

                <h3>
                    Our Mission
                </h3>

                <p>
                    To create accessible and reliable digital
                    solutions that help businesses improve,
                    innovate, and reach their goals.
                </p>

            </div>


            <!-- VISION -->
            <div class="value-card">

                <span class="value-number">
                    02
                </span>

                <h3>
                    Our Vision
                </h3>

                <p>
                    To become a trusted technology partner
                    for businesses seeking smarter and more
                    meaningful digital experiences.
                </p>

            </div>


            <!-- VALUES -->
            <div class="value-card">

                <span class="value-number">
                    03
                </span>

                <h3>
                    Our Values
                </h3>

                <p>
                    We value innovation, integrity,
                    collaboration, continuous learning,
                    and delivering quality work.
                </p>

            </div>

        </div>

    </div>

</section>


<!-- WHY VEYRION -->
<section class="section">

    <div class="container">

        <div class="section-heading">

            <span class="section-label">
                Why Veyrion
            </span>

            <h2>
                Built around your goals.
            </h2>

            <p>
                We focus on creating solutions that are
                useful, scalable, and designed with people
                in mind.
            </p>

        </div>


        <div class="features-grid">

            <div class="feature-card">

                <span class="feature-icon">
                    ✦
                </span>

                <h3>
                    Innovation
                </h3>

                <p>
                    We explore modern technologies and
                    creative approaches to solve challenges.
                </p>

            </div>


            <div class="feature-card">

                <span class="feature-icon">
                    ◈
                </span>

                <h3>
                    Reliability
                </h3>

                <p>
                    We build dependable digital solutions
                    that businesses can rely on.
                </p>

            </div>


            <div class="feature-card">

                <span class="feature-icon">
                    ◎
                </span>

                <h3>
                    User Focus
                </h3>

                <p>
                    We prioritize simple and meaningful
                    experiences for the people using our
                    solutions.
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
                Let's Work Together
            </span>

            <h2>
                Have an idea worth building?
            </h2>

            <p>
                Let's turn your vision into a digital
                experience that makes an impact.
            </p>

            <a href="{{ route('contact') }}" class="btn btn-primary">
                Start a Conversation →
            </a>

        </div>

    </div>

</section>

@endsection