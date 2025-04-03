<?php
$title = "contact";
include('components/head.php');
include('components/header.php');
?>

<main>
    <!--Example Code-->
    <button type="button" class="btn btn-primary position-relative"> Inbox
        <span class="position-absolute top-0 start-100 transition-middle badge rounded-pill bg-danger">99+
            <span class="visually-hidden">unread messages</span>
        </span>
    </button>
    <!--Example Code-->
    <img src="images/tomatoes.jpg" alt="tomatoes" class="img-about w-100">
    <div class="container my-5">
        <h1 class="text-center mb-4">Get in Touch</h1>
        <div class="row">
            <div class="col-lg-6">
                <form>
                    <div class="mb-3">
                        <label for="name" class="form-label">Name:</label>
                        <input type="text" class="form-control" id="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email:</label>
                        <input type="email" class="form-control" id="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Message:</label>
                        <textarea class="form-control" id="message" rows="3" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Send Message</button>
                </form>
            </div>
            <div class="col-lg-6">
                <h2>Market Information</h2>
                <p><strong>Address:</strong> 123 Main St, Anytown, USA</p>
                <p><strong>Phone:</strong> 555-555-5555</p>
                <p><strong>Email:</strong> [info@anytownmarket.com](mailto:info@anytownmarket.com)</p>
                <p><strong>Hours:</strong> Saturdays, 8am-1pm</p>
            </div>
        </div>
    </div>
    <h1 class="text-center mb-4">Market Address</h1>
    <div class="row">
        <div class="col-lg-6">
            <h2>Physical Address:</h2>
            <p>123 Main St</p>
            <p>Anytown, USA 12345</p>
        </div>
        <div class="col-lg-6">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.838239774945!2d-122.08405168461544!3d37.385348479726744!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fba02425dad5%3A0xb6a4620d62514c5!2s123+Main+St%2C+Anytown%2C+CA+12345!5e0!3m2!1sen!2sus!4v1643722928739!5m2!1sen!2sus"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>
    <div class="text-center mt-4">
        <a href="#" class="btn btn-primary">Get Directions</a>
    </div>
    </div>
    <div class="container my-5">
        <h1 class="text-center mb-4">Get in Touch</h1>
        <div class="row">
            <div class="col-lg-6">
                <h2>Phone Number:</h2>
                <p>(555) 555-5555</p>
                <p>Monday - Friday: 9am - 5pm</p>
                <p>Saturday: 8am - 1pm</p>
                <p>Sunday: Closed</p>
            </div>
            <div class="col-lg-6">
                <h2>Additional Contact Information:</h2>
                <p>Email: [info@anytownmarket.com](mailto:info@anytownmarket.com)</p>
                <p>Address: 123 Main St, Anytown, USA 12345</p>
            </div>
        </div>
        <div class="text-center mt-4">
            <a href="#" class="btn btn-primary">Call Us Now</a>
        </div>
    </div>
    <div class="container my-5">
        <h1 class="text-center mb-4">Get in Touch</h1>
        <div class="row">
            <div class="col-lg-6">
                <h2>Email Address:</h2>
                <p><a href="mailto:info@anytownmarket.com">info@anytownmarket.com</a></p>
                <p>We'll respond to your email within 24-48 hours.</p>
            </div>
            <div class="col-lg-6">
                <h2>Additional Contact Information:</h2>
                <p>Phone: (555) 555-5555</p>
                <p>Address: 123 Main St, Anytown, USA 12345</p>
            </div>
        </div>
        <div class="text-center mt-4">
            <a href="mailto:info@anytownmarket.com" class="btn btn-primary">Send Us an Email</a>
        </div>
    </div>
    <div class="container my-5">
        <h1 class="text-center mb-4">Stay Connected</h1>
        <div class="row">
            <div class="col-lg-6">
                <h2>Follow Us on Social Media:</h2>
                <ul class="list-unstyled">
                    <li>
                        <a href="#" target="_blank">
                            <i class="fab fa-facebook-square"></i> Facebook
                        </a>
                    </li>
                    <li>
                        <a href="#" target="_blank">
                            <i class="fab fa-instagram"></i> Instagram
                        </a>
                    </li>
                    <li>
                        <a href="#" target="_blank">
                            <i class="fab fa-twitter"></i> Twitter
                        </a>
                    </li>
                    <li>
                        <a href="#" target="_blank">
                            <i class="fab fa-pinterest"></i> Pinterest
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-6">
                <h2>Why Follow Us?</h2>
                <p>Stay up-to-date on market news, vendor spotlights, and recipes featuring fresh market produce.</p>
                <p>Get behind-the-scenes glimpses of market life and connect with our community of farmers, vendors, and
                    customers.</p>
            </div>
        </div>
    </div>
    <div class="container my-5">
        <h1 class="text-center mb-4">Follow Us on Social Media</h1>
        <div class="row justify-content-center">
            <div class="col-lg-2 col-md-4 col-sm-6">
                <a href="#" target="_blank">
                    <i class="fab fa-facebook-square fa-3x"></i>
                    <p>Facebook</p>
                </a>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6">
                <a href="#" target="_blank">
                    <i class="fab fa-instagram fa-3x"></i>
                    <p>Instagram</p>
                </a>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6">
                <a href="#" target="_blank">
                    <i class="fab fa-twitter fa-3x"></i>
                    <p>Twitter</p>
                </a>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6">
                <a href="#" target="_blank">
                    <i class="fab fa-pinterest fa-3x"></i>
                    <p>Pinterest</p>
                </a>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6">
                <a href="#" target="_blank">
                    <i class="fab fa-youtube fa-3x"></i>
                    <p>YouTube</p>
                </a>
            </div>
        </div>
    </div>
    <span class="d-inline-block" tabindex="0" data-bs-toggle="tooltip" title="Disabled tooltip">
        <button class="btn btn-primary" type="button" disabled>Disabled button</button>
    </span>
</main>

<?php
include('components/footer.php');
?>