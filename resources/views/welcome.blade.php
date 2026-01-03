<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Muhammad Nabil</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <link href="{{ asset('assets/img/fotogue.jpg') }}" rel="icon">
    <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">


</head>

<body class="index-page">

    <header id="header" class="header dark-background d-flex flex-column">
        <i class="header-toggle d-xl-none bi bi-list"></i>

        <div class="profile-img">
            <img src="{{ asset('assets/img/fotogue.jpg') }}" alt="" class="img-fluid rounded-circle">
        </div>

        <a href="index.html" class="logo d-flex align-items-center justify-content-center">
            <h1 class="sitename">Muhammad Nabil</h1>
        </a>

        <div class="social-links text-center">
            <a href="https://wa.me/6285643785183" class="whatsapp" target="_blank">
                <i class="bi bi-whatsapp"></i>
            </a>
            <a href="https://instagram.com/naabildst" class="instagram" target="_blank"><i class="bi bi-instagram"></i></a>
            <a href="https://linkedin.com/in/muhammad-nabil-9a20802b9" target="_blank" class="linkedin"><i class="bi bi-linkedin"></i></a>
            <a href="https://github.com/Naabil114" class="github" target="_blank"><i class="bi bi-github"></i></a>
        </div>

        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="#hero" class="active"><i class="bi bi-house navicon"></i>Home</a></li>
                <li><a href="#about"><i class="bi bi-person navicon"></i> About</a></li>
                <li><a href="#resume"><i class="bi bi-file-earmark-text navicon"></i> Resume</a></li>
                <li><a href="#portfolio"><i class="bi bi-images navicon"></i> Certificates</a></li>

                <li><a href="#contact"><i class="bi bi-envelope navicon"></i> Contact</a></li>
            </ul>
        </nav>

    </header>

    <main class="main">

        <section id="hero" class="hero section dark-background">

            <img src="{{ asset('assets/img/k.jpg') }}" alt="" data-aos="fade-in" class="">

            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <h2>Muhammad Nabil</h2>
                <p>Backend <span class="typed" data-typed-items=" Developer">Developer</span><span
                        class="typed-cursor typed-cursor--blink" aria-hidden="true"></span><span
                        class="typed-cursor typed-cursor--blink" aria-hidden="true"></span></p>
            </div>

        </section>

        <section id="about" class="about section">

            <div class="container section-title" data-aos="fade-up">
                <h2>About</h2>
                <p>Nama saya Muhammad Nabil. Saya sedang menempuh pendidikan jenjang SI jurusan Sistem Informasi di
                    Institut Widya Pratama Pekalongan.

                    Sebagai Backend Developer, saya ingin mengembangkan kemampuan, khususnya dalam pengelolaan database,
                    pembuatan REST API, dan keamanan sistem. Saya terbuka untuk belajar teknologi baru dan berkontribusi
                    dalam tim pengembangan untuk meningkatkan kualitas aplikasi.
                    .</p>
            </div>

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-4 justify-content-center">
                    <div class="col-lg-4">
                        <img src="assets/img/my-profile-img.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-8 content">
                        <h2>Backend Developer.</h2>
                        <p class="fst-italic py-3">
                            Saya adalah seorang Backend Developer yang berfokus pada pengembangan sistem server-side
                            yang efisien dan skalabel, serta memiliki antusiasme tinggi dalam mempelajari teknologi
                            terbaru untuk menciptakan solusi digital yang inovatif.
                        </p>
                        <div class="row">
                            <div class="col-lg-6">
                                <ul>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span>6 May
                                            2003</span></li>

                                    <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong>
                                        <span>085643785183</span></li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>Pekalongan -
                                            Indonesia</span></li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <ul>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>23 Yo</span>
                                    </li>

                                    <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong>
                                        <span>nabiltrobel.23@gmail.com</span>
                                    </li>

                                </ul>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

        </section>


        <section id="skills" class="skills section light-background">

            <div class="container section-title" data-aos="fade-up">
                <h2>Skills</h2>
            </div>

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row skills-content skills-animation">

                    <div class="col-lg-6">

                        <div class="progress">
                            <span class="skill"><span>HTML</span> <i class="val">100%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>


                        <div class="progress">
                            <span class="skill"><span>JavaScript</span> <i class="val">75%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-6">

                        <div class="progress">
                            <span class="skill"><span>PHP</span> <i class="val">100%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>

                        

                        <div class="progress">
                            <span class="skill"><span>Git</span> <i class="val">80%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>

        </section>

        <section id="resume" class="resume section">

            <div class="container section-title" data-aos="fade-up">
                <h2>Resume</h2>
                
            </div>

            <div class="container">

                <div class="row">

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <h3 class="resume-title">Sumary</h3>



                        <h3 class="resume-title">Pendidikan</h3>
                        <div class="resume-item">
                            <h4>Institut Widya Pratama Pekalongan</h4>
                            <h5>2022 - Sekarang</h5>
                            <p><em>Sistem Informasi</em></p>
                            
                        </div>



                    </div>

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                        <h3 class="resume-title">Pengalaman</h3>
                        <div class="resume-item">
                            <h4>Magang | PT. Publika Investa Karya</h4>
                            <h5>Maret 2025 - Juni 2025</h5>
                            <p><em>Fullstack Web Developer </em></p>
                            <ul>
                                <li>Kontribusi membuat API CRUD pada project Luoise Martine Jeans.</li>
                                <li>Kontribusi redesain Arta Web.</li>

                            </ul>
                        </div>

                    </div>

                </div>

            </div>

        </section>

        <section id="portfolio" class="portfolio section light-background">

            <div class="container section-title" data-aos="fade-up">
                <h2>Certificates</h2>
                
            </div>

            <div class="container">

                <div class="isotope-layout" data-default-filter="*" data-layout="masonry"
                    data-sort="original-order">

                   
                    <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                            <div class="portfolio-content h-100">
                                <img src="{{ asset('assets/img/certificate1.jpg') }}" class="img-fluid"
                                    alt="">
                                <div class="portfolio-info">
                                    <h4>Alibaba Certification</h4>
                                    <p>Certified Developer</p>
                                    <a href="{{ asset('assets/img/certificate1.jpg') }}"
                                        title="Alibaba Certification" data-gallery="portfolio-gallery-app"
                                        class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                    
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
                            <div class="portfolio-content h-100">
                                <img src="{{ asset('assets/img/c2.png') }}" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Dicoding Certification</h4>
                                    <p>Certified AWS.</p>
                                    <a href="{{ asset('assets/img/c2.png') }}" title="Dicoding Certification"
                                        data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i
                                            class="bi bi-zoom-in"></i></a>
                                    
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
                            <div class="portfolio-content h-100">
                                <img src="{{ asset('assets/img/c3.png') }}" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Codepolitan Certification</h4>
                                    <p>Certified Laravel</p>
                                    <a href="{{ asset('assets/img/c3.png') }}" title="Codepolitan Certification"
                                        data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i
                                            class="bi bi-zoom-in"></i></a>
                                    
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>

        </section>

       
        <section id="contact" class="contact section">

            <div class="container section-title" data-aos="fade-up">
                <h2>Contact</h2>
            </div>

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-4">

                    <div class="col-lg-5">

                        <div class="info-wrap">
                            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
                                <i class="bi bi-geo-alt flex-shrink-0"></i>
                                <div>
                                    <h3>Address</h3>
                                    <p>Kec. Bojong Kab. Pekalongan Indonesia</p>
                                </div>
                            </div>

                            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                                <i class="bi bi-telephone flex-shrink-0"></i>
                                <div>
                                    <h3>Call Us</h3>
                                    <p>085643785183</p>
                                </div>
                            </div>

                            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                                <i class="bi bi-envelope flex-shrink-0"></i>
                                <div>
                                    <h3>Email Us</h3>
                                    <p>nabiltrobel.23@gmail.com</p>
                                </div>
                            </div>

                            <iframe 
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15843.34446486022!2d109.601555!3d-6.974064!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f2055e9197f69%3A0x5027a76e3564c4b0!2sKetitang%20Kidul%2C%20Kec.%20Bojong%2C%20Kabupaten%20Pekalongan%2C%20Jawa%20Tengah!5e0!3m2!1sid!2sid!4v1715000000000"
                                frameborder="0" style="border:0; width: 100%; height: 270px;" allowfullscreen=""
                                loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>

                    

                </div>

            </div>

        </section>

    </main>

    <footer id="footer" class="footer position-relative light-background">

        <div class="container">
            <div class="copyright text-center ">
                <p>© <span>Copyright</span> <strong class="px-1 sitename">BILL</strong> <span>All Rights
                        Reserved</span></p>
            </div>
            <div class="credits">
                
            </div>
        </div>

    </footer>

    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <div id="preloader"></div>

    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/vendor/typed.js/typed.umd.js') }}"></script>
    <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>

    <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>
