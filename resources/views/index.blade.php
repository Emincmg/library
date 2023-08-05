@extends('layouts.app')
@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div class="hero-container">
            <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

                <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

                <div class="carousel-inner" role="listbox">

                    <!-- Slide 1 -->
                    <div class="carousel-item active" style="background-image: url(assets/img/slide/slide-1.jpg);">
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <h2 class="animate__animated animate__fadeInDown">Library Application</h2>
                                <p class="animate__animated animate__fadeInUp">Library management application.</p>
                                @auth
                                    <div>
                                        <a href="{{route('listindex')}}" class="btn-get-started animate__animated animate__fadeInUp scrollto">Book List</a>
                                    </div>
                                @endauth
                                @guest
                                <div>
                                    <a href="{{route('login')}}" class="btn-get-started animate__animated animate__fadeInUp scrollto">Get Started</a>
                                </div>
                                @endguest
                            </div>
                        </div>
                    </div>

                    <!-- Slide 2 -->
                    <div class="carousel-item" style="background-image: url(assets/img/slide/slide-2.jpg);">
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <h2 class="animate__animated animate__fadeInDown">Developed by</h2>
                                <p class="animate__animated animate__fadeInUp">Ali Emin Çomoğlu.</p>
                                <div>
                                    <a href="#contact" class="btn-get-started animate__animated animate__fadeInUp scrollto">Contact</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 3 -->
                    <div class="carousel-item" style="background-image: url(assets/img/slide/slide-3.jpg);">
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <h2 class="animate__animated animate__fadeInDown">View on GitHub</h2>
                                <p class="animate__animated animate__fadeInUp">View and examine source code</p>
                                <div>
                                    <a href="https://github.com/Emincmg/library"
                                       class="btn-get-started animate__animated animate__fadeInUp scrollto">GitHub</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
                </a>

                <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
                </a>

            </div>
        </div>
    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container">

                <div class="row no-gutters">
                    <div
                        class="image col-xl-5 d-flex align-items-stretch justify-content-center justify-content-lg-start"></div>
                    <div class="col-xl-7 ps-0 ps-lg-5 pe-lg-1 d-flex align-items-stretch">
                        <div class="content d-flex flex-column justify-content-center">
                            <h3>About this app</h3>
                            <p>
                                This is a library management application. With this, you can ;
                            </p>
                            <div class="row">
                                <div class="col-md-6 icon-box">
                                    <i class='bx bx-book-open'></i>
                                    <h4>Browse through books</h4>
                                    <p>Browse and look up general information about books via Google Books Store API.</p>
                                </div>
                                <div class="col-md-6 icon-box">
                                    <i class='bx bx-list-plus'></i>
                                    <h4>Make your lists</h4>
                                    <p>Create your list based on the books you have read before or will read later.</p>
                                </div>
                                <div class="col-md-6 icon-box">
                                    <i class='bx bx-star'></i>
                                    <h4>Rate your books.</h4>
                                    <p>Take notes, rate your books and more</p>
                                </div>
                                <div class="col-md-6 icon-box">
                                    <i class='bx bxs-edit'></i>
                                    <h4>Visit Store </h4>
                                    <p>Directly navigate to the Google Book Store page of a specific book.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End About Section -->


            <!-- ======= Why Us Section ======= -->
            <section id="why-us" class="why-us">
                <div class="container">

                    <div class="section-title">
                        <h2>Why Me?</h2>
                        <p>
                            I am currently seeking full-time job opportunities. I believe you should consider hiring me due to the following reasons:</p>
                    </div>

                    <div class="row">

                        <div class="col-lg-4">
                            <div class="box">
                                <span>Because i am</span>
                                <h4>Hardworker</h4>
                                <p>With a strong work ethic, sense of responsibility, and disciplined approach, I focus on completing projects on time and with high quality. I always strive to fulfill my responsibilities to the best of my abilities.</p>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-4 mt-lg-0">
                            <div class="box">
                                <span>Because i am</span>
                                <h4>Lifetime Learner</h4>
                                <p>I have a strong desire for continuous self-improvement and learning new skills, which allows me to adapt to the ever-changing business landscape and play a significant role in achieving your company's objectives.</p>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-4 mt-lg-0">
                            <div class="box">
                                <span>Because i am</span>
                                <h4>Team Player</h4>
                                <p>My effective communication skills enable me to interact well with team members, managers, and clients. My collaborative work style helps create a harmonious and productive work environment with those I collaborate with.</p>
                            </div>
                        </div>

                    </div>

                </div>
            </section><!-- End Why Us Section -->
        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container">

                <div class="section-title">
                    <h2>Contact</h2>
                    <p>Contact me to provide feedback, discuss business opportunities or about any other topic via;</p>
                </div>

                <div class="row contact-info">

                    <div class="col-md-4">
                        <div class="contact-address">
                            <i class="bi bi-linkedin"></i>
                            <h3>LinkedIn</h3>
                            <p><a href="https://www.linkedin.com/in/emin-%C3%A7omo%C4%9Flu-657213237/" target="_blank">Ali Emin Çomoğlu</a>
                            </p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="contact-phone">
                            <i class="bi bi-phone"></i>
                            <h3>Phone Number</h3>
                            <p><a href="tel:+905537209699">+90 553 720 9699</a></p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="contact-email">
                            <i class="bi bi-envelope"></i>
                            <h3>Email</h3>
                            <p><a href="mailto:emin-comoglu@hotmail.com">emin-comoglu@hotmail.com</a></p>
                        </div>
                    </div>

                </div>

                <div class="form">
                    <form action="{{ route('contact') }}" method="post" role="form" class="email-form" id="contactUSForm">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"
                                       data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                            </div>
                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email"
                                       data-rule="email" data-msg="Please enter a valid email">
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <input type="text" class="form-control" name="phone" id="phone" placeholder="Your Phone"
                                   required>
                        </div>
                        <div class="form-group mt-3">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"
                                   required>
                        </div>
                        <div class="form-group mt-3">
                        <textarea class="form-control" name="message" rows="5" placeholder="Message"
                                  required></textarea>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Send E-mail</button>

                        </div>
                    </form>
                </div>
            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->
    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients section-bg">
        <div class="container">

            <div class="row">

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="assets/img/clients/php.png" class="img-fluid" alt="">
                </div>

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="assets/img/clients/laravel2.png" class="img-fluid" alt="">
                </div>

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="assets/img/clients/meilisearch.png" class="img-fluid" alt="">
                </div>

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="assets/img/clients/redis.png" class="img-fluid" alt="">
                </div>

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="assets/img/clients/jquery.png" class="img-fluid" alt="">
                </div>

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="assets/img/clients/css.png" class="img-fluid" alt="">
                </div>

            </div>

        </div>
    </section><!-- End Clients Section -->
@endsection

