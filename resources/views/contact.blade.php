@include('layouts.header')

<!--Start Contact Details One-->
    <section class="contact-details-one">
        <div class="container">
            <div class="row">
                <!--Start Single Contact Details One-->
                <div class="col-xl-4 col-lg-4">
                    <div class="contact-details-one__single">
                        <div class="contact-details-one__single-icon">
                            <span class="icon-chat"></span>
                        </div>
                        <div class="contact-details-one__single-text">
                            <h4><a href="tel:123456789">92 666 888 0000</a></h4>
                            <p>Call Anytime</p>
                        </div>
                    </div>
                </div>
                <!--End Single Contact Details One-->

                <!--Start Single Contact Details One-->
                <div class="col-xl-4 col-lg-4">
                    <div class="contact-details-one__single">
                        <div class="contact-details-one__single-icon">
                            <span class="icon-message-1"></span>
                        </div>
                        <div class="contact-details-one__single-text">
                            <h4><a href="mailto:info@templatepath.com">info@company.com</a></h4>
                            <p>Send Email</p>
                        </div>
                    </div>
                </div>
                <!--End Single Contact Details One-->

                <!--Start Single Contact Details One-->
                <div class="col-xl-4 col-lg-4">
                    <div class="contact-details-one__single">
                        <div class="contact-details-one__single-icon">
                            <span class="icon-address"></span>
                        </div>
                        <div class="contact-details-one__single-text">
                            <h4>88 broklyn street, USA</h4>
                            <p>Call Anytime</p>
                        </div>
                    </div>
                </div>
                <!--End Single Contact Details One-->
            </div>
        </div>
    </section>
    <!--End Contact Details One-->

    <!--Contact Page Start-->
    <section class="contact-page">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4">
                    <div class="contact-page__left">
                        <div class="section-title">
                            <span class="section-title__tagline">Send a Message</span>
                            <h2 class="section-title__title">We Always <br>Ready to Hear <br>From You</h2>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-8">
                    <div class="contact-page__right">
                        <form action="assets/inc/sendemail.php" class="comment-one__form contact-form-validated" novalidate="novalidate">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6">
                                    <div class="comment-form__input-box">
                                        <input type="text" placeholder="Your name" name="name">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6">
                                    <div class="comment-form__input-box">
                                        <input type="email" placeholder="Email address" name="email">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-6 col-lg-6">
                                    <div class="comment-form__input-box">
                                        <input type="text" placeholder="Phone number" name="phone">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6">
                                    <div class="comment-form__input-box">
                                        <input type="email" placeholder="Subject" name="Subject">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-12 col-lg-12">
                                    <div class="comment-form__input-box">
                                        <textarea name="message" placeholder="Write message"></textarea>
                                    </div>
                                    <button type="submit" class="thm-btn comment-form__btn">Submit Comment</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Contact Page End-->

    <!--Contact Page Google Map Start-->
    <section class="contact-page-google-map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4562.753041141002!2d-118.80123790098536!3d34.152323469614075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80e82469c2162619%3A0xba03efb7998eef6d!2sCostco+Wholesale!5e0!3m2!1sbn!2sbd!4v1562518641290!5m2!1sbn!2sbd"
            class="contact-page-google-map__one" allowfullscreen></iframe>
    </section>
    <!--Contact Page Google Map End-->

@include('layouts.footer')