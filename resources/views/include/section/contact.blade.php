<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
    <div class="container">

        <div class="section-header">
            <h2>Contact Us</h2>
            <p></p>
        </div>

    </div>

    <div class="map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3103.2492435000977!2d-104.6011571!3d38.941134!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x871336fb501b932b%3A0x97d8b98e57162a50!2s7661%20McLaughlin%20Rd%20%23272%2C%20Peyton%2C%20CO%2080831%2C%20USA!5e0!3m2!1sen!2sng!4v1693403713476!5m2!1sen!2sng"
            frameborder="0" allowfullscreen></iframe>
    </div><!-- End Google Maps -->

    <div class="container">

        <div class="row gy-5 gx-lg-5">

            <div class="col-lg-4">

                <div class="info">
                    <h3>Get in touch</h3>
                    <p>Have questions or need assistance? Don't hesitate to reach out.</p>

                    <div class="info-item d-flex">
                        <i class="bi bi-geo-alt flex-shrink-0"></i>
                        <div>
                            <h4>Location:</h4>
                            <p>{{ env('APP_ADDRESS') }}</p>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="info-item d-flex">
                        <i class="bi bi-envelope flex-shrink-0"></i>
                        <div>
                            <h4>Email:</h4>
                            <p>{{ env('APP_EMAIL') }}</p>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="info-item d-flex">
                        <i class="bi bi-phone flex-shrink-0"></i>
                        <div>
                            <h4>Call:</h4>
                            <p>{{ env('APP_PHONE_NUMBER') }}</p>
                        </div>
                    </div><!-- End Info Item -->

                </div>

            </div>

            <div class="col-lg-8">
                {{-- <iframe src="https://api.leadconnectorhq.com/widget/form/KpeJPI2WCfitjZkaYuGt"
                    style="width:100%;height:100%;border:none;border-radius:10px" id="inline-KpeJPI2WCfitjZkaYuGt"
                    data-layout="{'id':'INLINE'}" data-trigger-type="alwaysShow" data-trigger-value=""
                    data-activation-type="alwaysActivated" data-activation-value=""
                    data-deactivation-type="neverDeactivate" data-deactivation-value="" data-form-name="Contact Us"
                    data-height="510" data-layout-iframe-id="inline-KpeJPI2WCfitjZkaYuGt"
                    data-form-id="KpeJPI2WCfitjZkaYuGt" title="Contact Us">
                </iframe> --}}
                {{-- <script src="https://link.msgsndr.com/js/form_embed.js"></script> --}}
                <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <input type="text" name="name" class="form-control" id="name"
                                placeholder="Your Name" required>
                        </div>
                        <div class="col-md-6 form-group mt-3 mt-md-0">
                            <input type="email" class="form-control" name="email" id="email"
                                placeholder="Your Email" required>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"
                            required>
                    </div>
                    <div class="form-group mt-3">
                        <textarea class="form-control" name="message" placeholder="Message" required></textarea>
                    </div>
                    <div class="my-3">
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Your message has been sent. Thank you!</div>
                    </div>
                    <div class="text-center"><button type="submit" style="border-radius: 50px;">Send Message</button>
                    </div>
                </form>
            </div><!-- End Contact Form -->

        </div>

    </div>
</section><!-- End Contact Section -->
