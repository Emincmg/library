@extends('frontend.layouts.app')
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
                                <div>
                                    <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read
                                        More</a>
                                </div>
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
                                    <p>Browse and look up general information about books</p>
                                </div>
                                <div class="col-md-6 icon-box">
                                    <i class='bx bx-user-pin'></i>
                                    <h4>Browse through authors</h4>
                                    <p>Browse and look up general information about authors</p>
                                </div>
                                <div class="col-md-6 icon-box">
                                    <i class='bx bx-list-plus'></i>
                                    <h4>Add new books to the list</h4>
                                    <p>Add your desired books to the list and browse through.</p>
                                </div>
                                <div class="col-md-6 icon-box">
                                    <i class='bx bxs-edit'></i>
                                    <h4>Edit your library.</h4>
                                    <p>Edit your stocks, see stats etc.</p>
                                </div>
                            </div>
                        </div><!-- End .content-->
                    </div>
                </div>

            </div>
        </section><!-- End About Section -->

        <!-- ======= Counts Section ======= -->
        <section id="counts" class="counts">
            <div class="container">

                <div class="row no-gutters">

                    <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                        <div class="count-box">
                            <i class='bx bx-book-open'></i>
                            <span data-purecounter-start="0" data-purecounter-end="{{$bookCount}}"
                                  data-purecounter-duration="1" class="purecounter"></span>
                            <p><strong>Books</strong> registered.</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                        <div class="count-box">
                            <i class='bx bx-user-pin'></i>
                            <span data-purecounter-start="0" data-purecounter-end="{{$authorCount}}"
                                  data-purecounter-duration="1" class="purecounter"></span>
                            <p><strong>Authors</strong> registered.</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                        <div class="count-box">
                            <i class='bx bx-list-plus'></i>
                            <span data-purecounter-start="0" data-purecounter-end="{{$bookEntries}}" data-purecounter-duration="1"
                                  class="purecounter"></span>
                            <p><strong>Book</strong> entries</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                        <div class="count-box">
                            <i class='bx bx-objects-horizontal-left'></i>
                            <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1"
                                  class="purecounter"></span>
                            <p><strong>Book stocks</strong> summary</p>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Counts Section -->

        {{--    <!-- ======= Clients Section ======= -->--}}
        {{--    <section id="clients" class="clients section-bg">--}}
        {{--        <div class="container">--}}

        {{--            <div class="row">--}}

        {{--                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">--}}
        {{--                    <img src="assets/img/clients/client-1.png" class="img-fluid" alt="">--}}
        {{--                </div>--}}

        {{--                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">--}}
        {{--                    <img src="assets/img/clients/client-2.png" class="img-fluid" alt="">--}}
        {{--                </div>--}}

        {{--                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">--}}
        {{--                    <img src="assets/img/clients/client-3.png" class="img-fluid" alt="">--}}
        {{--                </div>--}}

        {{--                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">--}}
        {{--                    <img src="assets/img/clients/client-4.png" class="img-fluid" alt="">--}}
        {{--                </div>--}}

        {{--                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">--}}
        {{--                    <img src="assets/img/clients/client-5.png" class="img-fluid" alt="">--}}
        {{--                </div>--}}

        {{--                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">--}}
        {{--                    <img src="assets/img/clients/client-6.png" class="img-fluid" alt="">--}}
        {{--                </div>--}}

        {{--            </div>--}}

        {{--        </div>--}}
        {{--    </section><!-- End Clients Section -->--}}



        {{--    <!-- ======= Why Us Section ======= -->--}}
        {{--    <section id="why-us" class="why-us">--}}
        {{--        <div class="container">--}}

        {{--            <div class="section-title">--}}
        {{--                <h2>Why Us</h2>--}}
        {{--                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>--}}
        {{--            </div>--}}

        {{--            <div class="row">--}}

        {{--                <div class="col-lg-4">--}}
        {{--                    <div class="box">--}}
        {{--                        <span>01</span>--}}
        {{--                        <h4>Lorem Ipsum</h4>--}}
        {{--                        <p>Ulamco laboris nisi ut aliquip ex ea commodo consequat. Et consectetur ducimus vero placeat</p>--}}
        {{--                    </div>--}}
        {{--                </div>--}}

        {{--                <div class="col-lg-4 mt-4 mt-lg-0">--}}
        {{--                    <div class="box">--}}
        {{--                        <span>02</span>--}}
        {{--                        <h4>Repellat Nihil</h4>--}}
        {{--                        <p>Dolorem est fugiat occaecati voluptate velit esse. Dicta veritatis dolor quod et vel dire leno para dest</p>--}}
        {{--                    </div>--}}
        {{--                </div>--}}

        {{--                <div class="col-lg-4 mt-4 mt-lg-0">--}}
        {{--                    <div class="box">--}}
        {{--                        <span>03</span>--}}
        {{--                        <h4> Ad ad velit qui</h4>--}}
        {{--                        <p>Molestiae officiis omnis illo asperiores. Aut doloribus vitae sunt debitis quo vel nam quis</p>--}}
        {{--                    </div>--}}
        {{--                </div>--}}

        {{--            </div>--}}

        {{--        </div>--}}
        {{--    </section><!-- End Why Us Section -->--}}

        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio">
            @livewire('search-books')
        </section><!-- End Portfolio Section -->

        <!-- ======= Team Section ======= -->
        <section id="team" class="team">
            <div class="container">

                <div class="section-title">
                    <h2>Authors</h2>
                    <p>Browse through authors</p>
                </div>

                @livewire('authors')

            </div>
        </section><!-- End Team Section -->

        <!-- ======= Pricing Section ======= -->
        {{--    <section id="pricing" class="pricing">--}}
        {{--        <div class="container">--}}

        {{--            <div class="section-title">--}}
        {{--                <h2>Pricing</h2>--}}
        {{--                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>--}}
        {{--            </div>--}}

        {{--            <div class="row">--}}

        {{--                <div class="col-lg-4 col-md-6">--}}
        {{--                    <div class="box">--}}
        {{--                        <h3>Free</h3>--}}
        {{--                        <h4><sup>$</sup>0<span> / month</span></h4>--}}
        {{--                        <ul>--}}
        {{--                            <li>Aida dere</li>--}}
        {{--                            <li>Nec feugiat nisl</li>--}}
        {{--                            <li>Nulla at volutpat dola</li>--}}
        {{--                            <li class="na">Pharetra massa</li>--}}
        {{--                            <li class="na">Massa ultricies mi</li>--}}
        {{--                        </ul>--}}
        {{--                        <div class="btn-wrap">--}}
        {{--                            <a href="#" class="btn-buy">Buy Now</a>--}}
        {{--                        </div>--}}
        {{--                    </div>--}}
        {{--                </div>--}}

        {{--                <div class="col-lg-4 col-md-6 mt-4 mt-md-0">--}}
        {{--                    <div class="box recommended">--}}
        {{--                        <h3>Business</h3>--}}
        {{--                        <h4><sup>$</sup>19<span> / month</span></h4>--}}
        {{--                        <ul>--}}
        {{--                            <li>Aida dere</li>--}}
        {{--                            <li>Nec feugiat nisl</li>--}}
        {{--                            <li>Nulla at volutpat dola</li>--}}
        {{--                            <li>Pharetra massa</li>--}}
        {{--                            <li class="na">Massa ultricies mi</li>--}}
        {{--                        </ul>--}}
        {{--                        <div class="btn-wrap">--}}
        {{--                            <a href="#" class="btn-buy">Buy Now</a>--}}
        {{--                        </div>--}}
        {{--                    </div>--}}
        {{--                </div>--}}

        {{--                <div class="col-lg-4 col-md-6 mt-4 mt-lg-0">--}}
        {{--                    <div class="box">--}}
        {{--                        <h3>Developer</h3>--}}
        {{--                        <h4><sup>$</sup>29<span> / month</span></h4>--}}
        {{--                        <ul>--}}
        {{--                            <li>Aida dere</li>--}}
        {{--                            <li>Nec feugiat nisl</li>--}}
        {{--                            <li>Nulla at volutpat dola</li>--}}
        {{--                            <li>Pharetra massa</li>--}}
        {{--                            <li>Massa ultricies mi</li>--}}
        {{--                        </ul>--}}
        {{--                        <div class="btn-wrap">--}}
        {{--                            <a href="#" class="btn-buy">Buy Now</a>--}}
        {{--                        </div>--}}
        {{--                    </div>--}}
        {{--                </div>--}}

        {{--            </div>--}}

        {{--        </div>--}}
        {{--    </section><!-- End Pricing Section -->--}}

        <!-- ======= Frequently Asked Questions Section ======= -->
        {{--    <section id="faq" class="faq section-bg">--}}
        {{--        <div class="container">--}}

        {{--            <div class="section-title">--}}
        {{--                <h2>Frequently Asked Questions</h2>--}}
        {{--                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>--}}
        {{--            </div>--}}

        {{--            <div class="faq-list">--}}
        {{--                <ul>--}}
        {{--                    <li data-aos="fade-up">--}}
        {{--                        <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1">Non consectetur a erat nam at lectus urna duis? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>--}}
        {{--                        <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">--}}
        {{--                            <p>--}}
        {{--                                Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.--}}
        {{--                            </p>--}}
        {{--                        </div>--}}
        {{--                    </li>--}}

        {{--                    <li data-aos="fade-up" data-aos-delay="100">--}}
        {{--                        <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">Feugiat scelerisque varius morbi enim nunc? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>--}}
        {{--                        <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">--}}
        {{--                            <p>--}}
        {{--                                Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.--}}
        {{--                            </p>--}}
        {{--                        </div>--}}
        {{--                    </li>--}}

        {{--                    <li data-aos="fade-up" data-aos-delay="200">--}}
        {{--                        <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed">Dolor sit amet consectetur adipiscing elit? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>--}}
        {{--                        <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">--}}
        {{--                            <p>--}}
        {{--                                Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis--}}
        {{--                            </p>--}}
        {{--                        </div>--}}
        {{--                    </li>--}}

        {{--                    <li data-aos="fade-up" data-aos-delay="300">--}}
        {{--                        <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-4" class="collapsed">Tempus quam pellentesque nec nam aliquam sem et tortor consequat? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>--}}
        {{--                        <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">--}}
        {{--                            <p>--}}
        {{--                                Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in.--}}
        {{--                            </p>--}}
        {{--                        </div>--}}
        {{--                    </li>--}}

        {{--                    <li data-aos="fade-up" data-aos-delay="400">--}}
        {{--                        <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-5" class="collapsed">Tortor vitae purus faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>--}}
        {{--                        <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">--}}
        {{--                            <p>--}}
        {{--                                Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque.--}}
        {{--                            </p>--}}
        {{--                        </div>--}}
        {{--                    </li>--}}

        {{--                </ul>--}}
        {{--            </div>--}}

        {{--        </div>--}}
        {{--    </section><!-- End Frequently Asked Questions Section -->--}}

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
                            <p><a href="https://www.linkedin.com/in/emin-%C3%A7omo%C4%9Flu-657213237/">Ali Emin Çomoğlu</a>
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
                    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
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
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"
                                   required>
                        </div>
                        <div class="form-group mt-3">
                        <textarea class="form-control" name="message" rows="5" placeholder="Message"
                                  required></textarea>
                        </div>
                        <div class="my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div>
                        <div class="text-center">
                            <button type="submit">Send Message</button>
                        </div>
                    </form>
                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->
@endsection

