@extends('layouts.app')

@section('title', 'Contact Us | Veyrion')

@section('content')

<!-- CONTACT HERO -->
<section class="page-hero">

    <div class="container">

        <span class="section-label">
            Get In Touch
        </span>

        <h1 class="page-title">
            Let's build something
            <span class="gradient-text">meaningful.</span>
        </h1>

        <p class="page-description">
            Have a project, question, or idea?
            We'd love to hear from you. Reach out to
            the Veyrion team and let's explore what's possible.
        </p>

    </div>

</section>


<!-- CONTACT SECTION -->
<section class="section">

    <div class="container">

        <div class="contact-grid">

            <!-- CONTACT FORM -->
            <div class="contact-form-card">

                <div class="contact-card-heading">

                    <span class="section-label">
                        Send a Message
                    </span>

                    <h2>
                        Tell us about your project.
                    </h2>

                    <p>
                        Fill out the form below and our team
                        will get back to you as soon as possible.
                    </p>

                </div>


                <!-- UI ONLY -->
                <form>

                    <div class="form-row">

                        <div class="form-group">

                            <label for="name">
                                Full Name
                            </label>

                            <input
                                type="text"
                                id="name"
                                placeholder="Your name"
                            >

                        </div>


                        <div class="form-group">

                            <label for="email">
                                Email Address
                            </label>

                            <input
                                type="email"
                                id="email"
                                placeholder="you@example.com"
                            >

                        </div>

                    </div>


                    <div class="form-group">

                        <label for="subject">
                            Subject
                        </label>

                        <input
                            type="text"
                            id="subject"
                            placeholder="How can we help?"
                        >

                    </div>


                    <div class="form-group">

                        <label for="message">
                            Message
                        </label>

                        <textarea
                            id="message"
                            rows="6"
                            placeholder="Tell us about your project..."
                        ></textarea>

                    </div>


                    <button
                        type="button"
                        class="btn btn-primary contact-submit"
                    >
                        Send Message →
                    </button>

                </form>

            </div>


            <!-- CONTACT INFORMATION -->
            <div class="contact-info">

                <div class="contact-info-heading">

                    <span class="section-label">
                        Contact Information
                    </span>

                    <h2>
                        We'd love to hear from you.
                    </h2>

                    <p>
                        Whether you're starting a new project
                        or looking for technology guidance,
                        our team is ready to help.
                    </p>

                </div>


                <!-- OFFICE -->
                <div class="contact-info-item">

                    <div class="contact-info-icon">
                        ⌖
                    </div>

                    <div>

                        <span>Office</span>

                        <p>
                            18 Innovation Drive<br>
                            Makati City, Philippines
                        </p>

                    </div>

                </div>


                <!-- EMAIL -->
                <div class="contact-info-item">

                    <div class="contact-info-icon">
                        @
                    </div>

                    <div>

                        <span>Email</span>

                        <p>
                            hello@veyrion.com
                        </p>

                    </div>

                </div>


                <!-- PHONE -->
                <div class="contact-info-item">

                    <div class="contact-info-icon">
                        ☎
                    </div>

                    <div>

                        <span>Phone</span>

                        <p>
                            +63 917 482 6310
                        </p>

                    </div>

                </div>


                <!-- SOCIAL MEDIA -->
                <div class="contact-social">

                    <span>Follow Us</span>

                    <div class="social-links">

                        <a href="#">
                            LinkedIn
                        </a>

                        <a href="#">
                            Instagram
                        </a>

                        <a href="#">
                            Facebook
                        </a>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- LOCATION / GOOGLE MAP -->
<section class="section section-alt">

    <div class="container">

        <div class="section-heading">

            <span class="section-label">
                Find Us
            </span>

            <h2>
                Visit our office.
            </h2>

            <p>
                Our team is based in Makati City,
                Philippines.
            </p>

        </div>


        <div class="map-container">

            <iframe
                src="https://www.google.com/maps?q=Makati%20City%2C%20Philippines&output=embed"
                width="100%"
                height="400"
                style="border:0;"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>

        </div>

    </div>

</section>


<!-- FINAL CTA -->
<section class="cta">

    <div class="container">

        <div class="cta-box">

            <span class="section-label">
                Veyrion
            </span>

            <h2>
                Ready to bring your idea to life?
            </h2>

            <p>
                Let's create a digital solution
                designed around your goals.
            </p>

            <a href="mailto:hello@veyrion.com" class="btn btn-primary">
                Email Our Team →
            </a>

        </div>

    </div>

</section>

@endsection