@extends('layouts.front')

@section('css')
<link rel="stylesheet" href="{{ asset('front/css/contact.css') }}">
@endsection

@section('content')
<section class="map-section">
    <div class="map-container">
        <div class="gmap_canvas"><iframe width="100%" height="500" id="gmap_canvas"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2737.635177136467!2d55.196569399999994!3d25.117106399999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f6bbc47b308f5%3A0x3bb9ee96f7b06ad0!2sDeyaar%20Development%20PJSC%20(Head%20office)!5e1!3m2!1sen!2sin!4v1761304569271!5m2!1sen!2sin"
                frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a
                href="https://2piratebay.org/"></a><br>
            <style>
                .mapouter {
                    position: relative;
                    text-align: right;
                    height: 500px;
                    width: 100%;
                }
            </style><a href="https://www.embedgooglemap.net/">how to add a google map to
                wordpress</a>
            <style>
                .gmap_canvas {
                    overflow: hidden;
                    background: none !important;
                    height: 500px;
                    width: 100%;
                }
            </style>
        </div>
    </div>
</section>

<section class="contact-details-form-section">
    <div class="grid-container">
        <div class="column-left">
            <div class="intro-block">
                <h2>We are happy to discuss your inquiry and answer your questions</h2>
            </div>

            <div class="office-block">
                <h3>Dubai Office</h3>
                <p>Office 123, Deyaar Building, Al Barsha 1, <br>Behind Mall of the Emirates, Dubai U.A.E.</p>
            </div>

            <div class="office-block">
                <h3>Sharjah Office</h3>
                <p>F24, Sharjah Publishing City Free Zone, <br>Sharjah, United Arab Emirates</p>
            </div>

            <div class="contact-info-blocks">
                <div class="info-block">
                    <h3>Email</h3>
                    <p><a href="mailto:help@midasgulf.com">help@midasgulf.com</a></p>
                </div>
                <div class="info-block">
                    <h3>Landline</h3>
                    <p>04-566-5861</p>
                    <p class="toll-free">CALL US TOLL FREE WITHIN THE UAE ON <br>800MIDASGULF (<a
                            href="tel:800643274853">800-643274853</a>)</p>
                </div>
                <div class="info-block">
                    <h3>Whatsapp</h3>
                    <p>+971528867088</p>
                </div>
            </div>

        </div>

        <div class="column-right yellow-background">
            <div class="form-header">
                <h2>Let's Start <br>The Conversation.</h2>
                <hr class="separator">
            </div>

            <form class="contact-form">
                <div class="form-row">
                    <input type="text" name="first-name" placeholder="First Name" required>
                    <input type="text" name="last-name" placeholder="Last Name" required>
                </div>

                <input type="email" name="email" placeholder="Email" required>

                <textarea name="message" placeholder="Message" rows="4"></textarea>

                <button type="submit" class="submit-btn">SUBMIT</button>
            </form>
        </div>
    </div>
</section>

@endsection