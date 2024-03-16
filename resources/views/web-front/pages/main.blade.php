@extends('web-front.template')

@section('content')
    @include('web-front/pages.member')
    @include('sweetalert::alert')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">

        <div class="container">
            @include('web-front/components.sub-sections.hero-section')
        </div>

    </section>
    <!-- End Cliens Section -->

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">
            @include('web-front/components.sub-sections.about-section')
        </div>
    </section>
    <!-- End About Us Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us section-bg">
        <div class="container-fluid" data-aos="fade-up">
            @include('web-front/components.sub-sections.why-section')
        </div>
    </section>
    <!-- End Why Us Section -->


    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
        <div class="container" data-aos="fade-up">
            @include('web-front/components.sub-sections.service-section')
        </div>
    </section>
    <!-- End Services Section -->

    <!-- ======= Cta Section ======= -->
    @php($path = asset('assets/img/cta-bg.jpg'))
    <section id="cta" class="cta"
        style="background: linear-gradient(rgba(238, 82, 83, 0.9), rgba(238, 82, 83, 0.9)), url('{{ $path }}') fixed center center">
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
    </section>
    <!-- End Cta Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
        <div class="container" data-aos="fade-up">
            @include('web-front/components.sub-sections.portfolio-section')
        </div>
    </section>
    <!-- End Portfolio Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
        <div class="container" data-aos="fade-up">
            @include('web-front/components.sub-sections.team-section')
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

                <div class="col-lg d-flex align-items-stretch">
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
                    </div>
                    <div class="col-lg d-flex">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.5657587727715!2d107.58937771431793!3d-6.942385494984211!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e8bb8f5e6e73%3A0x4e6bbb51508e52ad!2sJl.%20Raya%20Kopo%20No.330%2C%20Kopo%2C%20Kec.%20Bojongloa%20Kaler%2C%20Kota%20Bandung%2C%20Jawa%20Barat%2040233!5e0!3m2!1sen!2sid!4v1594147911163!5m2!1sen!2sid"
                            frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen>
                        </iframe>
                    </div>
                </div>
                
            </div>

        </div>
    </section>
    <!-- End Contact Section -->
    
    <!-- ======= Client Section ======= -->
    <section id="client" class="contact">
        <div class="container">
            @include('web-front/components.sub-sections.client-section')      
        </div>
    </section>
    <!-- End Client Section -->
@endsection
