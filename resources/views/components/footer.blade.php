<footer class="footer">

    <div class="container">

        <div class="footer-grid">

            <!-- COMPANY -->
            <div class="footer-brand">

                <a href="{{ route('home') }}" class="logo">
                    <span class="logo-mark">V</span>
                    <span>Veyrion</span>
                </a>

                <p>
                    Building smarter digital experiences
                    for businesses ready to move forward.
                </p>

            </div>


            <!-- COMPANY LINKS -->
            <div class="footer-column">

                <h4>Company</h4>

                <a href="{{ route('about') }}">About Us</a>
                <a href="{{ route('services') }}">Services</a>
                <a href="{{ route('contact') }}">Contact</a>

            </div>


            <!-- SERVICES -->
            <div class="footer-column">

                <h4>Services</h4>

                <a href="{{ route('services') }}">Web Development</a>
                <a href="{{ route('services') }}">UI/UX Design</a>
                <a href="{{ route('services') }}">Cloud Solutions</a>

            </div>


            <!-- CONTACT -->
            <div class="footer-column">

                <h4>Get In Touch</h4>

                <p>
                    hello@veyrion.com
                </p>

                <p>
                    +63 917 482 6310
                </p>

                <p>
                    Makati City, Philippines
                </p>

            </div>

        </div>


        <!-- FOOTER BOTTOM -->
        <div class="footer-bottom">

            <p>
                © {{ date('Y') }} Veyrion. All rights reserved.
            </p>

            <div class="footer-social">

                <a href="#">LinkedIn</a>
                <a href="#">Instagram</a>
                <a href="#">Facebook</a>

            </div>

        </div>

    </div>

</footer>