<x-layout>
    {{-- Title --}}
    <x-slot:title>Contact</x-slot:title>

    {{-- Content --}}
    <!-- start page-title -->
    <section class="page-title">
        <div class="container">
            <div class="row">
                <div class="col col-xs-12">
                    <h2>Contact</h2>
                </div>
            </div> <!-- end row -->
        </div> <!-- end container -->
    </section>
    <!-- end page-title -->

    <!-- start service-section -->
    <section class="service-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col col-xs-12">
                    <div class="service-grid2 clearfix">
                        <div class="grid">
                            <img src="assets/images/team/img-1.png" alt></a>
                            <h3>Taryono, S.T.</a></h3>
                        </div>
                        <div class="grid">
                            <img src="assets/images/team/img-4.png" alt></a>
                            <h3>Setyo Darmawan</a></h3>
                        </div>
                    </div>
                </div>
                <div class="section-title-s6">
                    <h1>Our Contact</h1>
                </div>
                <div class="col col-xs-12">
                    <div class="service-grids clearfix">
                        <div class="grid">
                            <i class="fi ti-mobile"></i>
                            <h4>Phone - Fax</a></h4>
                            <p> +623151908240 </p>
                            <h4>Mobile Phone</a></h4>
                            <p> +628155142624 +628113550723 </p>
                        </div>
                        <div class="grid">
                            <i class="fi ti-location-pin"></i>
                            <h4>Office</a></h4>
                            <p> Permata Siwalan Indah Housing Complex Alley 5 Number 11 Siwalanpanji Village, Buduran
                                District, Sidoarjo Regency, East Java, Indonesia </p>
                        </div>
                        <div class="grid">
                            <i class="fi flaticon-gear"></i>
                            <h4>Workshop</a></h4>
                            <p> Tlasih Village, Tulangan District, Sidoarjo Regency, East Java, Indonesia </p>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end container -->
    </section>
    <!-- end service-section -->

    <!-- start cta-section -->
    <section class="cta-section">
        <div class="container">
            <div class="row">
                <div class="col col-lg-6 col-md-6">
                    <div class="cta-text">
                        <h3>Order Now or Fill The Form</h3>
                        <p>Boiler rental, sales and repair (troubleshooting, repair & cleaning) with the best service by
                            PT Taruna Eka Setia.</p>
                    </div>
                </div>
                <div class="col">
                    <div class="contact-info">
                        <div>
                            <i class="fi flaticon-call"></i>
                            <h4>WhatsApp</h4>
                            <a
                                href="https://api.whatsapp.com/send?phone=628113550723&text=I%20want%20to%20ask%20about%20boilers,%20I%20got%20this%20contact%20from%20Google%20Ads">+628113550723</a>
                        </div>
                        <div>
                            <i class="fi flaticon-contact"></i>
                            <h4>WhatsApp</h4>
                            <a
                                href="https://api.whatsapp.com/send?phone=628155142624&text=I%20want%20to%20ask%20about%20boilers,%20I%20got%20this%20contact%20from%20Google%20Ads">+628155142624</a>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end container -->
    </section>
    <!-- end cta-section -->

    <!-- start contact-pg-section -->
    <section class="contact-pg-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col">
                    <form method="post" class="contact-validation-active" id="contact-form-main">
                        <div>
                            <span>Name</span>
                            <input type="text" class="form-control" name="name" id="name"
                                placeholder="Enter your name">
                        </div>
                        <div>
                            <span>Email</span>
                            <input type="email" class="form-control" name="email" id="email"
                                placeholder="Enter your email">
                        </div>
                        <div>
                            <span>Phone Number</span>
                            <input type="text" class="form-control" name="phone" id="phone"
                                placeholder="Enter your phone number">
                        </div>
                        <div>
                            <span>Request Subject</span>
                            <select name="subject" class="form-control">
                                <option>Buy boiler</option>
                                <option>Rental boiler</option>
                                <option>Service boiler</option>
                            </select>
                        </div>
                        <div class="fullwidth">
                            <span>Case Description</span>
                            <textarea class="form-control" name="note" id="note" placeholder="Please describe your request here ..."></textarea>
                        </div>
                        <div class="submit-area">
                            <button type="submit" class="theme-btn">Send Message</button>
                            <div id="loader">
                                <i class="ti-reload"></i>
                            </div>
                        </div>
                        <div class="clearfix error-handling-messages">
                            <div id="success">Thank you</div>
                            <div id="error"> Error occurred while sending email. Please try again later. </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!--  start contact-map -->
    <section class="contact-map-section">
        <h2 class="hidden">Contact map</h2>
        <div class="contact-map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11188.600591844295!2d112.63148941277902!3d-7.4908844223956015!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7e1c9a9511d93%3A0x2748ebe75fed6781!2sPT.%20TARUNA%20EKA%20SETIA!5e0!3m2!1sen!2sid!4v1719221831886!5m2!1sen!2sid"
                allowfullscreen></iframe>
        </div>
    </section>
    <!-- end contact-map -->
</x-layout>
