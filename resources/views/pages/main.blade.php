@extends('template')

@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1"
                    data-aos="fade-up" data-aos-delay="200">
                    <h1>Empowering your Business Solution</h1>
                    <h2>Let us enhance your organization!</h2>
                    <div class="d-lg-flex">
                        <a href="#about" class="btn-get-started scrollto">Get Started</a>
                        <a href="#" class="venobox btn-watch-video" data-vbtype="video" data-autoplay="true"> Watch
                            Video <i class="icofont-play-alt-2"></i></a>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                    <img src="{{ asset('assets/img/front-page.png') }}" class="img-fluid animated" alt="">
                </div>
            </div>
        </div>

    </section><!-- End Cliens Section -->

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>About tvelover</h2>
            </div>

            <div class="row content">
                <div class="col-lg-6">
                    <p>
                        We're <b>team developer</b> startup that established in 2020 and corcern at IT development and
                        software solution
                    </p>
                    <ul>
                        <li><i class="ri-check-double-line"></i> <b>Fast</b> is our crucial moto, get what you want in
                            short time</li>
                        <li><i class="ri-check-double-line"></i> <b>Easy</b>, we make sure that all our services is
                            handy to use</li>
                        <li><i class="ri-check-double-line"></i> <b>Security</b> is our focus to maintain your data</li>
                    </ul>
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0">
                    <p>
                        Our philosophy is track, we realize that a person which has been entering the track has no
                        choice except to move.
                        For our team, track make us more ambition and productive to help and facilitates your needs
                    </p>
                    <a href="#why-us" class="btn-learn-more scrollto">Why Us?</a>
                </div>
            </div>

        </div>
    </section><!-- End About Us Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us section-bg">
        <div class="container-fluid" data-aos="fade-up">

            <div class="row">

                <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

                    <div class="content">
                        <h3>We're powerful, solid yet friendly!<strong></strong></h3>
                    </div>

                    <div class="accordion-list">
                        <ul>
                            <li>
                                <a data-toggle="collapse" class="collapse" href="#accordion-list-1"><span>01</span>
                                    Simplify<i class="bx bx-chevron-down icon-show"></i><i
                                        class="bx bx-chevron-up icon-close"></i></a>
                                <div id="accordion-list-1" class="collapse show" data-parent=".accordion-list">
                                    <p>
                                        Your complex process will be in <b>one touch action!</b>
                                    </p>
                                </div>
                            </li>

                            <li>
                                <a data-toggle="collapse" href="#accordion-list-2" class="collapsed"><span>02</span>
                                    Make catchy<i class="bx bx-chevron-down icon-show"></i><i
                                        class="bx bx-chevron-up icon-close"></i></a>
                                <div id="accordion-list-2" class="collapse" data-parent=".accordion-list">
                                    <p>
                                        Let us make world seeing your organization <b>more cool!</b>
                                    </p>
                                </div>
                            </li>

                            <li>
                                <a data-toggle="collapse" href="#accordion-list-3" class="collapsed"><span>03</span>
                                    Reliable and Accurate<i class="bx bx-chevron-down icon-show"></i><i
                                        class="bx bx-chevron-up icon-close"></i></a>
                                <div id="accordion-list-3" class="collapse" data-parent=".accordion-list">
                                    <p>
                                        Real time data, proper information will you get <b>as you need!</b>
                                    </p>
                                </div>
                            </li>

                        </ul>
                    </div>

                </div>

                <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img"
                    style='background-image: url("{{ asset('assets/img/Walpaper.jpg') }}");' data-aos="zoom-in"
                    data-aos-delay="150">
                    &nbsp;</div>
            </div>

        </div>
    </section><!-- End Why Us Section -->


    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Services</h2>
                <p>We provide powerful service that contains every aspect about your interest, problems, needs, and
                    desires.
                    We'll turn your request into several kinds of products such as web, desktop or mobile apps, brochure
                    and
                    even video editing.
                </p>
            </div>

            <div class="row">
                <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bx-globe"></i></div>
                        <h4><a href="">Web System or Integration</a></h4>
                        <p>Make your site and go online in every request you asks for, e-commerce, promotion, landing
                            page, or even customize web system</p>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in"
                    data-aos-delay="200">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bxl-android"></i></div>
                        <h4><a href="">Mobile Apps</a></h4>
                        <p>Make mobile application with beautiful and intuitive design, integrated with other system,
                            fast, simple and solving your problem in handy way!</p>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in"
                    data-aos-delay="300">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bx-desktop"></i></div>
                        <h4><a href="">Desktop Apps</a></h4>
                        <p>For business necessary, make POS system or any dekstop application for real use in your
                            organization and improve the effectivity or your process</p>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in"
                    data-aos-delay="400">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bx-layer"></i></div>
                        <h4><a href="">Design, Brochure, Video Editing</a></h4>
                        <p>Make fresh design such as icon, image asset, brochure and any demand with modern &
                            contemporary design technique</p>
                    </div>
                </div>

            </div>
    </section><!-- End Services Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta"
        style="background: linear-gradient(rgba(238, 82, 83, 0.9), rgba(238, 82, 83, 0.9)), url('{{ asset('assets/img/cta-bg.jpg') }}') fixed center center">
        <div class="container" data-aos="zoom-in">

            <div class="row">
                <div class="col-lg-9 text-center text-lg-left">
                    <h3>Be with us!</h3>
                    <p> Connected, consultation or tell your problem with us, and let's create magic to your problems.
                    </p>
                </div>
                <div class="col-lg-3 cta-btn-container text-center">
                    <a class="cta-btn align-middle"
                        href="https://api.whatsapp.com/send?phone=62895606173288&text=Hello,%20tveloper!&source=&data=&app_absent="
                        target="_blank">Call To Action</a>
                </div>
            </div>

        </div>
    </section><!-- End Cta Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Portfolio</h2>
                <p>We have reached many experiences to be here, this is some of our masterpiece projects in software
                    development & integration system, design, modeling and others with happy clients inside it.
                </p>
            </div>

            <ul id="portfolio-flters" class="d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
                <li data-filter="*" class="filter-active">All</li>
                <li data-filter=".filter-app">App</li>
                <li data-filter=".filter-card">Card</li>
                <li data-filter=".filter-web">Web</li>
            </ul>

            <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-img">
                        <img src="{{ asset('assets/img/portf/mobile/lpiqnas_2.jpg') }}" class="img-fluid" alt="">
                    </div>
                    <div class="portfolio-info">
                        <h4>Elearning Application</h4>
                        <p>Android/IOS Mobile</p>
                        <a href="{{ asset('assets/img/portf/mobile/lpiqnas_app_full.jpg') }}" data-gall="portfolioGallery"
                            class="venobox preview-link" title="Elearning Application"><i class="bx bx-plus"></i></a>
                        <!-- <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a> -->
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <div class="portfolio-img">
                        <img src="{{ asset('assets/img/portf/web/izzah-web.png') }}" class="img-fluid" alt="">
                    </div>
                    <div class="portfolio-info">
                        <h4>Promotional Web Landing Page System</h4>
                        <p>Website</p>
                        <a href="{{ asset('assets/img/portf/web/izzah-web.png') }}" data-gall="portfolioGallery"
                            class="venobox preview-link" title="Promotional Web Landing Page System"><i
                                class="bx bx-plus"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-img">
                        <img src="{{ asset('assets/img/portf/mobile/ind_one1.jpg') }}" class="img-fluid" alt="">
                    </div>
                    <div class="portfolio-info">
                        <h4>Smart Chatbot About Citizenship</h4>
                        <p>Android Mobile</p>
                        <a href="{{ asset('assets/img/portf/mobile/indone_app_full.jpg') }}" data-gall="portfolioGallery"
                            class="venobox preview-link" title="Smart Chatbot App about Indonesian and Citizenship"><i
                                class="bx bx-plus"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-img">
                        <img src="{{ asset('assets/img/portf/mobile/presence_1.jpg') }}" class="img-fluid" alt="">
                    </div>
                    <div class="portfolio-info">
                        <h4>EPresence College By GPS</h4>
                        <p>Android Mobile</p>
                        <a href="{{ asset('assets/img/portf/mobile/presence_app_full.jpg') }}"
                            data-gall="portfolioGallery" class="venobox preview-link" title="EPresence College By GPS"><i
                                class="bx bx-plus"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <div class="portfolio-img">
                        <img src="{{ asset('assets/img/portfolio/portfolio-4.jpg') }}" class="img-fluid" alt="">
                    </div>
                    <div class="portfolio-info">
                        <h4>Card 2</h4>
                        <p>Card</p>
                        <a href="{{ asset('assets/img/portfolio/portfolio-4.jpg') }}" data-gall="portfolioGallery"
                            class="venobox preview-link" title="Card 2"><i class="bx bx-plus"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <div class="portfolio-img">
                        <img src="{{ asset('assets/img/portf/web/masterwebis-web.png') }}" class="img-fluid"
                            alt="">
                    </div>
                    <div class="portfolio-info">
                        <h4>Web Builder Drag n Drop</h4>
                        <p>Website</p>
                        <a href="{{ asset('assets/img/portf/web/masterwebis-web.png') }}" data-gall="portfolioGallery"
                            class="venobox preview-link" title="Drag n Drop Web Builder"><i
                                class="bx bx-plus"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <div class="portfolio-img">
                        <img src="{{ asset('assets/img/portf/web/sipinter-web.png') }}" class="img-fluid" alt="">
                    </div>
                    <div class="portfolio-info">
                        <h4>Integrated Education System</h4>
                        <p>Website</p>
                        <a href="{{ asset('assets/img/portf/web/sipinter-web.png') }}" data-gall="portfolioGallery"
                            class="venobox preview-link" title="School Management Websystem"><i
                                class="bx bx-plus"></i></a>>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <div class="portfolio-img">
                        <img src="{{ asset('assets/img/portfolio/portfolio-7.jpg') }}" class="img-fluid" alt="">
                    </div>
                    <div class="portfolio-info">
                        <h4>Card 1</h4>
                        <p>Card</p>
                        <a href="{{ asset('assets/img/portfolio/portfolio-7.jpg') }}" data-gall="portfolioGallery"
                            class="venobox preview-link" title="Card 1"><i class="bx bx-plus"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <div class="portfolio-img">
                        <img src="{{ asset('assets/img/portfolio/portfolio-8.jpg') }}" class="img-fluid" alt="">
                    </div>
                    <div class="portfolio-info">
                        <h4>Card 3</h4>
                        <p>Card</p>
                        <a href="{{ asset('assets/img/portfolio/portfolio-8.jpg') }}" data-gall="portfolioGallery"
                            class="venobox preview-link" title="Card 3"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                class="bx bx-link"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <div class="portfolio-img">
                        <img src="{{ asset('assets/img/portf/web/silloam-web.png') }}" class="img-fluid" alt="">
                    </div>
                    <div class="portfolio-info">
                        <h4>Silloam Questionnaire System</h4>
                        <p>Websitem</p>
                        <a href="{{ asset('assets/img/portf/web/silloam-web.png') }}" data-gall="portfolioGallery"
                            class="venobox preview-link" title="Webbase Questionnaire Recapitulation"><i
                                class="bx bx-plus"></i></a>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Team</h2>
                <p>Meet us, the next partner of yours. With dedication and focus on what your need, we union and
                    transform to do the best for your desire, demand or request and help you to reach organization
                    goals.</p>
            </div>

            <div class="row">

                <div class="col-lg-6 mt-4 mt-lg-0">
                    <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="100">
                        <div class="pic">
                            <img src="{{ asset('assets/img/team/abdulsalam.jpg') }}" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <h4>Abdul Salam</h4>
                            <span>Project Manager & FullStack Developer</span>
                            <p>Make a web/mobile or desktop application based on your needs and manage other developer
                                directly.</p>
                            {{-- <div class="social">
                              <a href=""><i class="ri-twitter-fill"></i></a>
                              <a href=""><i class="ri-facebook-fill"></i></a>
                              <a href=""><i class="ri-instagram-fill"></i></a>
                              <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                            </div> --}}
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 mt-4 mt-lg-0">
                    <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="200">
                        <div class="pic">
                            <img src="{{ asset('assets/img/team/supian.jpg') }}" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <h4>Muhammad Supian</h4>
                            <span>Designer, UI/UX, Frontend Developer</span>
                            <p>Help you create new fresh and modern design or video, turn your needs into amazing
                                creation</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 mt-4">
                    <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="300">
                        <div class="pic">
                            <img src="{{ asset('assets/img/team/team-3.jpg') }}" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <h4>Vincent Anthonius</h4>
                            <span>Account Executive</span>
                            <p>Your friend that will be solve your problem, and understand all your needs</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 mt-4">
                    <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="400">
                        <div class="pic">
                            <img src="{{ asset('assets/img/team/team-4.jpg') }}" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <h4>Maichel Yunarto</h4>
                            <span>Backend Developer, Mobile Developer</span>
                            <p>Make strong and robust service in your request application</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 mt-4">
                    <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="400">
                        <div class="pic">
                            <img src="{{ asset('assets/img/team/team-1.jpg') }}" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <h4>Aditya Lishadi Pratama</h4>
                            <span>Frontend Developer, Mobile Developer</span>
                            <p>Make strong and robust service in your request application</p>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- End Team Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Contact</h2>
                <p>We’re here to help and answer any question you might have. We look forward to hearing from you, our
                    next partner!</p>
            </div>

            <div class="row">

                <div class="col-lg-5 d-flex align-items-stretch">
                    <div class="info">
                        <div class="address">
                            <i class="icofont-google-map"></i>
                            <h4>Location:</h4>
                            <p>Jln. Kopo 330 Bandung, Indonesia</p>
                        </div>

                        <div class="email">
                            <i class="icofont-envelope"></i>
                            <h4>Email:</h4>
                            <p>info@tveloper.id</p>
                        </div>

                        <div class="phone">
                            <i class="icofont-phone"></i>
                            <h4>Call:</h4>
                            <p>+62 895 606 173 288</p>
                        </div>

                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.5657587727715!2d107.58937771431793!3d-6.942385494984211!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e8bb8f5e6e73%3A0x4e6bbb51508e52ad!2sJl.%20Raya%20Kopo%20No.330%2C%20Kopo%2C%20Kec.%20Bojongloa%20Kaler%2C%20Kota%20Bandung%2C%20Jawa%20Barat%2040233!5e0!3m2!1sen!2sid!4v1594147911163!5m2!1sen!2sid"
                            frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
                    </div>

                </div>

                <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="name">Your Name</label>
                                <input type="text" name="name" class="form-control" id="name" data-rule="minlen:4"
                                    data-msg="Please enter at least 4 chars" />
                                <div class="validate"></div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Your Email</label>
                                <input type="email" class="form-control" name="email" id="email" data-rule="email"
                                    data-msg="Please enter a valid email" />
                                <div class="validate"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name">Subject</label>
                            <input type="text" class="form-control" name="subject" id="subject" data-rule="minlen:4"
                                data-msg="Please enter at least 8 chars of subject" />
                            <div class="validate"></div>
                        </div>
                        <div class="form-group">
                            <label for="name">Message</label>
                            <textarea class="form-control" name="message" rows="10" data-rule="required"
                                data-msg="Please write something for us"></textarea>
                            <div class="validate"></div>
                        </div>
                        <div class="mb-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div>
                        <div class="text-center"><button type="submit">Send Message</button></div>
                    </form>
                </div>

            </div>

        </div>
    </section>
    <!-- End Contact Section -->
@endsection
