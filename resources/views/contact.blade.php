@extends('layouts.main')

@section('content')
    <div class="page-header dtable text-center header-transparent page-header-contact"
        style="background-image: url('{{ asset('assets/images/E/(E1)APR-1.png') }}'); background-repeat: no-repeat; background-size: cover; color: #FFF;">
        <div class="dcell">
            <div class="container">
                <h1 class="page-title">Get in touch</h1>
                <ul id="breadcrumbs" class="breadcrumbs none-style">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">Get in touch</li>
                </ul>
            </div>
        </div>
    </div>
    </div>

    <section class="contact-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center mb-5 mb-lg-0">
                    <div class="contact-left">
                        <h2>Where to find us</h2>
                        <p class="font14">Let us know anytime you need help. Our doors are always open for you – or if you
                            may, drop us a message and we’ll be more than happy to get back to you soon.</p>
                        <form id="ajax-form" name="ajax-form" action="contact.php" method="post" class="wpcf7">
                            <div class="main-form">
                                <p>
                                    <label for="name"> <span class="error" id="err-name">please enter
                                            name</span></label>
                                    <input type="text" name="name" id="name" value="" size="40"
                                        class="" aria-invalid="false" placeholder="Your Name *" required>
                                </p>
                                <p>
                                    <label for="email">
                                        <span class="error" id="err-email">please enter e-mail</span>
                                        <span class="error" id="err-emailvld">e-mail is not a valid format</span>
                                    </label>
                                    <input type="email" name="email" id="email" value="" size="40"
                                        class="" aria-invalid="false" placeholder="Your Email *" required>
                                </p>
                                <p>
                                    <label for="message"></label>
                                    <textarea name="message" id="message" cols="40" rows="10" class="" aria-invalid="false"
                                        placeholder="Message..." required></textarea>
                                </p>
                                <p><button type="button" onclick="sendMail()" id="send" class="octf-btn">Send
                                        Message</button></p>
                                <div class="clear"></div>
                                <div class="error" id="err-form">There was a problem validating the form please check!
                                </div>
                                <div class="error" id="err-timedout">The connection to the server timed out!</div>
                                <div class="error" id="err-state"></div>
                            </div>
                        </form>

                        <div class="clear"></div>
                        <div id="ajaxsuccess">Successfully sent!!</div>
                        <div class="clear"></div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-right">
                        <div class="ot-heading">
                            <span>[ our contact details ]</span>
                            <h2 class="main-heading">Let's create together</h2>
                        </div>
                        <p>Give us a call or drop by anytime, we endeavour to answer all enquiries within 24 hours on
                            business days. We will be happy to answer your questions.</p>
                        <div class="contact-info">
                            <i class="ot-flaticon-place"></i>
                            <div class="info-text">
                                <h6>OUR ADDRESS:</h6>
                                <p>Trillium Office Lt. 1 (MYCO X) Surabaya</p>
                            </div>
                        </div>
                        <div class="contact-info">
                            <i class="ot-flaticon-mail"></i>
                            <div class="info-text">
                                <h6>OUR MAILBOX:</h6>
                                <p><a href="mailto:alplus.id@gmail.com">alplus.id@gmail.com</a></p>
                            </div>
                        </div>
                        <div class="contact-info">
                            <i class="ot-flaticon-phone-call"></i>
                            <div class="info-text">
                                <h6>OUR PHONE:</h6>
                                <p><a href="tel:+6287850882828">+6287850882828</a></p>
                            </div>
                        </div>
                        <div class="list-social">
                            <ul>
                                <li><a href="http://twitter.com" target="_self"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="http://facebook.com" target="_self"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="http://linkedin.com" target="_self"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="http://instagram" target="_self"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="contact-map">
        <div class="map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d416.00989003986547!2d112.74878156018111!3d-7.266385108398442!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7f9629a74af19%3A0x399e84172b0c90c6!2sTrillium%20Office%20%26%20Residence%2C%20Jl.%20Pemuda%2C%20Embong%20Kaliasin%2C%20Kec.%20Genteng%2C%20Surabaya%2C%20Jawa%20Timur%2060271!5e0!3m2!1sid!2sid!4v1707460614724!5m2!1sid!2sid"
                height="522" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
    </div>
@endsection

<script>
    function sendMail() {
        // Get form data
        var name = document.getElementById("name").value;
        var email = document.getElementById("email").value;
        var message = document.getElementById("message").value;

        // Construct the mailto link
        var mailtoLink = "mailto:alplus.id@gmail.com?subject=Form Submission&body=";
        mailtoLink += encodeURIComponent("Name: " + name + "\n");
        mailtoLink += encodeURIComponent("Email: " + email + "\n\n");
        mailtoLink += encodeURIComponent("Message:\n" + message);

        // Open default email client
        window.location.href = mailtoLink;

        name.val('')
        email.val('')
        message.val('')
    }
</script>
