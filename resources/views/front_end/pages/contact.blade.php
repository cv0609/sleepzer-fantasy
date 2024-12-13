@extends('front_end.layout.main')
@section('title', 'Contact Us')
@section('content')


<!--Contact Us Banner Section Start -->
<section class="sub-banner contact-us  bg-cover bg-no-repeat">
    <div class="container">
        <div class="sub-banner-content">
            <h1>
                Contact Us
            </h1>
        </div>
    </div>
</section>
<!--Contact Us Banner Section End -->


<!-- After Banner Text Start -->
<div class="after-banner-text pt-5">
    <div class="container">
        <div class="after-banner-text-wrap">
            <h4 class="text-center">
                Contact Us
            </h4>
            <p>
                We’d love to hear from you! Whether you have questions, need support, or just want to
                share your thoughts, our team at <strong>Sleepzer Fantasy</strong> is here to help. Get in touch
                with us
                through any of the methods below, and we'll get back to you as quickly as possible.
            </p>
        </div>
    </div>
</div>
<!-- After Banner Text End-->

<!-- Contact Us Content Section Start -->
<section class="header-pages-content-section bg-center bg-cover bg-fixed bg-no-repeat pt-5">
    <div class="container">
        <div class="header-pages-content pb-5">

            <div class="header-pages-cards">
                <h3>
                    How to Reach Us
                </h3>
                <p>
                    <strong>
                        Customer Support
                    </strong>
                </p>
                <p>
                    For any issues related to your account, gameplay, or technical support, our dedicated team
                    is here to assist you. Please send us a detailed message, and we’ll resolve your query
                    promptly.
                </p>
                <p>
                    <strong>
                        Email:
                    </strong>
                    <a href="mailto:info@sleepzerfantasy.com">info@sleepzerfantasy.com</a>
                </p>
                <p>
                    <strong>
                        Response Time:
                    </strong>
                    Typically within 24-48 hours.
                </p>
                <p>
                    <strong>
                        General Inquiries
                    </strong>
                </p>
                <p>
                    For general questions or feedback about Sleepzer Fantasy, feel free to reach out. We’re
                    always happy to hear from our community!
                </p>
                <p>
                    <strong>
                        Email:
                    </strong>
                    <a href="mailto:info@sleepzerfantasy.com">info@sleepzerfantasy.com</a>
                </p>
                <p>
                    <strong>
                        Social Media
                    </strong>
                </p>
                <p>
                    Stay connected and follow us on our social media platforms for updates, announcements,
                    and exclusive content.
                </p>
                <ul>
                    <li>
                        <p>
                            <a href="https://www.facebook.com/">Facebook</a>
                        </p>
                    </li>
                    <li>
                        <p>
                            <a href="https://x.com/i/flow/login">Twitter</a>
                        </p>
                    </li>
                    <li>
                        <p>
                            <a href="https://www.instagram.com/">Instagram</a>
                        </p>
                    </li>
                </ul>
            </div>

            <div class="contact-form-section header-pages-cards ">
                <h3>
                    Contact Form
                </h3>
                <p>
                    Please fill out the form below to get in touch with us. A member of our team will respond to
                    your message shortly.
                </p>
                <div class="contact-page-form-section">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="header-pages-cards-image contact-card1-image bg-center bg-cover bg-no-repeat ">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="header-pages-cards-content">
                                <div class="form-wrapper">
                                @if(Session::has('success'))
                                    <span class="alert alert-success text-center" style="width:100%;">{{ Session::get('success') }}</span>
                                @endif
                                    <form class="content-form-class" action="{{ route('contact.save') }}" method="post" id="contact">
                                        @csrf
                                        <fieldset>
                                            <input class="contact-form" placeholder="Your Name" type="text" tabindex="1"
                                            name="full_name" id="full_name" minlength="2" maxlength="100" value="{{ old('full_name') }}">
                                            <p class="text-danger d-none contact-error" id="nameError"></p>

                                        </fieldset>
                                        <fieldset>
                                            <input class="contact-email" placeholder="Your E-Mail" name="email" id="email" value="{{ old('email') }}">
                                          <p class="text-danger d-none contact-error" id="emailError"></p>

                                        </fieldset>
                                        <fieldset>
                                            <select class="contact-topic" name="subject" id="subject">
                                                <option value="">Subject</option>
                                                <option value="general">General question</option>
                                                <option value="order">Playing Help</option>
                                                <option value="product-info">Product information</option>
                                                <option value="other">Other</option>
                                            </select>
                                          <p class="text-danger d-none contact-error" id="subjectError"></p>

                                        </fieldset>
                                        <fieldset>
                                            <textarea name="message" class="message" placeholder="Your Message..."
                                                 minlength="10" maxlength="1000" id="message-text-area">{{ old('message') }}</textarea>
                                           <p class="text-danger d-none contact-error" id="messageError"></p>

                                        </fieldset>
                                        <fieldset>
                                            <button name="submit" type="button" class="contact-submit butn contact-btn"
                                                data-submit="...Sending">
                                                Submit </button>

                                            <button class="d-none" type="submit" id="form-submit-btn"></button>
                                        </fieldset>
                                    </form>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
                <p>
                    Thank you for reaching out to Sleepzer Fantasy. We look forward to helping you and
                    ensuring you have an amazing experience with us!
                </p>
            </div>



        </div>
    </div>
</section>
<!-- Contact Us Content Section End -->



@endsection

@section('custom-script')

<script>


        $('.contact-btn').on('click', function () {
            var valid = true;
            $(".contact-error").addClass('d-none');
            $('.text-danger').css('display', 'none').css('font-size', '15px');

            if ($('#full_name').val().trim() === '') {
                $('#nameError').removeClass('d-none').css('display', 'block').text('Full name field is required.');
                valid = false;
            }

            var email = $('#email').val().trim();

            if ($('#email').val().trim() === '') {
                $('#emailError').removeClass('d-none').css('display', 'block').text('Email field is required.');
                valid = false;
            }

            var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if ($('#email').val().trim() != '' && !emailPattern.test(email)) {
                $('#emailError').removeClass('d-none').css('display', 'block').text('Please enter a valid email address.');
                valid = false;
            }

            if ($('#subject').val().trim() === '') {
                $('#subjectError').removeClass('d-none').css('display', 'block').text('Subject field is required.');
                valid = false;
            }


            if ($('#message-text-area').val().trim() === '') {
                $('#messageError').removeClass('d-none').css('display', 'block').text('Message field is required.');
                valid = false;
            }


            // if (grecaptcha.getResponse() == '') {
            //     $('#captchaError').css('display', 'block').text('You must complete the CAPTCHA.');
            //     valid = false;
            // }

            // if (!$('#agree').is(':checked')) {
            //     $('#agreeError').removeClass('d-none').text('You must agree to the terms.');
            //     valid = false;
            // }

            if (valid === true) {
                console.log(valid);
                $("#form-submit-btn").click();
            }
        });







</script>


@endsection
