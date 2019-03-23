<!DOCTYPE html>
<html class="no-js" lang="en">
<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <title> Portfolio </title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS
  ================================================== -->
    <link rel="stylesheet" href="{{ asset('css/base.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/vendor.css') }}">

    <!-- script
    ================================================== -->
    <script src="{{ asset('js/modernizr.js') }}"></script>
    <script src="{{ asset('js/pace.min.js') }}"></script>

    <!-- favicons
     ================================================== -->
    <link rel="icon" type="image/png" href="favicon.png">

</head>

<body id="top">

<!-- header
================================================== -->
<header>
    <div class="row">

        <div class="top-bar">
            <a class="menu-toggle" href="#"><span>Menu</span></a>

            <div class="logo">
                <a href="index.html">PORTFOLIO</a>
            </div>

            <nav id="main-nav-wrap">
                <ul class="main-navigation">
                    <li class="current"><a class="smoothscroll"  href="#intro" title="">Home</a></li>
                    <li><a class="smoothscroll"  href="#about" title="">About</a></li>
                    <li><a class="smoothscroll"  href="#resume" title="">Resume</a></li>
                    <li><a class="smoothscroll"  href="#portfolio" title="">Portfolio</a></li>
                    <li><a class="smoothscroll"  href="#services" title="">Services</a></li>
                    <li><a class="smoothscroll"  href="#contact" title="">Contact</a></li>
                </ul>
            </nav>
        </div> <!-- /top-bar -->

    </div> <!-- /row -->
</header> <!-- /header -->

<!-- intro section
================================================== -->
<section id="intro">

    <div class="intro-overlay"></div>

    <div class="intro-content">
        <div class="row">

            <div class="col-twelve">

                <h5>Hi ! Nice to meet you !</h5>
                <h1>I'm Hugo Lavergne.</h1>

                <p class="intro-position">
                    <span>BACK-END DEVELOPER</span>
                </p>

                <a class="button stroke smoothscroll" href="#about" title="">More About Me</a>

            </div>

        </div>
    </div> <!-- /intro-content -->

    <ul class="intro-social">
        <li><a href="https://www.facebook.com/hugo.lavergne.39"><i class="fa fa-facebook"></i></a></li>
        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
    </ul> <!-- /intro-social -->

</section> <!-- /intro -->


<!-- about section
================================================== -->
<section id="about">

    <div class="row section-intro">
        <div class="col-twelve">

            <h5>About</h5>
            <h1>Let me introduce myself.</h1>

            <div class="intro-info">

                <img src="{{ asset('images/profile-pic.jpg') }}" alt="Profile Picture">

                <p class="lead">Hello, my name is Hugo Lavergne. I’m a web developement student and freelancer in web development. I deal mostly with the backend of websites.</p>
            </div>

        </div>
    </div> <!-- /section-intro -->

    <div class="row about-content">

        <div class="col-six tab-full">

            <h3>Profile</h3>
            <p>Curious, passionate, and determined, i want to keep learning and improving my skills</p>

            <ul class="info-list">
                <li>
                    <strong>Fullname:</strong>
                    <span>Hugo Lavergne</span>
                </li>
                <li>
                    <strong>Birth Date:</strong>
                    <span>December 17, 1999</span>
                </li>
                <li>
                    <strong>Job:</strong>
                    <span>Student and Freelancer, Backend Developer</span>
                </li>
                <li>
                    <strong>Email:</strong>
                    <span>hugo.lavergne@devinci.fr</span>
                </li>

            </ul> <!-- /info-list -->

        </div>

        <div class="col-six tab-full">

            <h3>Skills</h3>
            <p>Mainly concerned with the back-end of websites, I have many notions in this area but also in front.</p>

            <ul class="skill-bars">
                <li>
                    <div class="progress percent80"><span>80%</span></div>
                    <strong>HTML5</strong>
                </li>
                <li>
                    <div class="progress percent90"><span>90%</span></div>
                    <strong>CSS3</strong>
                </li>
                <li>
                    <div class="progress percent95"><span>95%</span></div>
                    <strong>Laravel 5</strong>
                </li>
                <li>
                    <div class="progress percent80"><span>80%</span></div>
                    <strong>Symfony 4</strong>
                </li>
                <li>

                    <div class="progress percent65"><span>65%</span></div>
                    <strong>Wordpress</strong>
                </li>

            </ul> <!-- /skill-bars -->

        </div>

    </div>

    <div class="row button-section">
        <div class="col-twelve">
            <a href="#contact" title="Hire Me" class="button stroke smoothscroll">Hire Me</a>
            <a href="#" title="Download CV" class="button button-primary">Download CV</a>
        </div>
    </div>

</section> <!-- /process-->


<!-- resume Section
================================================== -->
<section id="resume" class="grey-section">

    <div class="row section-intro">
        <div class="col-twelve">

            <h5>Resume</h5>
            <h1>More of my credentials.</h1>

            <p class="lead">Here is a summary of my professional experience and the studies I have done</p>

        </div>
    </div> <!-- /section-intro-->

    <div class="row resume-timeline">

        <div class="col-twelve resume-header">

            <h2>Works experience</h2>

        </div> <!-- /resume-header -->

        <div class="col-twelve">

            <div class="timeline-wrap">

                <div class="timeline-block">

                    <div class="timeline-ico">
                        <i class="fa fa-briefcase"></i>
                    </div>

                    <div class="timeline-header">
                        <h3>Valkyria</h3>
                        <p>February 2019 - Present</p>
                    </div>

                    <div class="timeline-content">
                        <h4>IIM Paris</h4>
                        <p>Development of a website consisting of mini-games, a matchmaking system and a quiz for users.</p>
                    </div>

                </div> <!-- /timeline-block -->

                <div class="timeline-block">

                    <div class="timeline-ico">
                        <i class="fa fa-briefcase"></i>
                    </div>

                    <div class="timeline-header">
                        <h3>Socail Media Certif</h3>
                        <p>September 2018 - February 2019</p>
                    </div>

                    <div class="timeline-content">
                        <h4>MySocialBranding</h4>
                        <p>Creation of an e-learning platform allowing users to access a social media management certification</p>
                    </div>

                </div> <!-- /timeline-block -->

                <div class="timeline-block">

                    <div class="timeline-ico">
                        <i class="fa fa-briefcase"></i>
                    </div>

                    <div class="timeline-header">
                        <h3>Allianz France</h3>
                        <p>May 2013 - June 2014</p>
                    </div>

                    <div class="timeline-content">
                        <h4>JAVA Project</h4>
                        <p>Development of a program in JAVA allowing to automatically fill an excel file following the data saved by customers in order to calculate new rates.</p>
                    </div>

                </div> <!-- /timeline-block -->

            </div> <!-- /timeline-wrap -->

        </div> <!-- /col-twelve -->

    </div> <!-- /resume-timeline -->

    <div class="row resume-timeline">

        <div class="col-twelve resume-header">

            <h2>Education</h2>

        </div> <!-- /resume-header -->

        <div class="col-twelve">

            <div class="timeline-wrap">

                <div class="timeline-block">

                    <div class="timeline-ico">
                        <i class="fa fa-briefcase"></i>
                    </div>

                    <div class="timeline-header">
                        <h3>Bachelor's degree</h3>
                        <p>September 2016 - July 2017</p>
                    </div>

                    <div class="timeline-content">
                        <h4>High School Les Pierres Vives</h4>
                        <p>Bachelor's degree - Scientist Specialty Engineering + Computer Science and Digital Sciences.</p>
                    </div>

                </div> <!-- /timeline-block -->

                <div class="timeline-block">

                    <div class="timeline-ico">
                        <i class="fa fa-briefcase"></i>
                    </div>

                    <div class="timeline-header">
                        <h3>Master 2 Degree</h3>
                        <p>September 2017 - Present/p>
                    </div>

                    <div class="timeline-content">
                        <h4>Leonardo da Vinci University Centre, Internet and Multimedia Institute</h4>
                        <p>Web development and project management studies</p>
                    </div>

                </div> <!-- /timeline-block -->


            </div> <!-- /timeline-wrap -->

        </div> <!-- /col-twelve -->

    </div> <!-- /resume-timeline -->

</section> <!-- /features -->


<!-- Portfolio Section
================================================== -->
<section id="portfolio">

    <div class="row section-intro">
        <div class="col-twelve">

            <h5>Portfolio</h5>
            <h1>Check Out Some of My Works.</h1>

            <p class="lead">Here are some projects I have been able to work on</p>

        </div>
    </div> <!-- /section-intro-->

    <div class="row portfolio-content">

        <div class="col-twelve">

            <!-- portfolio-wrapper -->
            <div id="folio-wrapper" class="block-1-2 block-mob-full stack">

                <div class="bgrid folio-item">
                    <div class="item-wrap">
                        <img src="{{ asset('images/portfolio/WakeTheDesign.jpg') }}" alt="Liberty">
                        <a href="#modal-01" class="overlay">
                            <div class="folio-item-table">
                                <div class="folio-item-cell">
                                    <h3 class="folio-title">Wake the Desing</h3>
                                    <span class="folio-types">
		     					       	  Graphic Design
		     					       </span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div> <!-- /folio-item -->

                <div class="bgrid folio-item">
                    <div class="item-wrap">
                        <img src="{{ asset('images/portfolio/notify.jpg') }}" alt="Shutterbug">
                        <a href="#modal-02" class="overlay">
                            <div class="folio-item-table">
                                <div class="folio-item-cell">
                                    <h3 class="folio-title">Notify</h3>
                                    <span class="folio-types">
		     					       	  Web Design + Emailing
		     					      </span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div> <!-- /folio-item -->

                <div class="bgrid folio-item">
                    <div class="item-wrap">
                        <img src="{{ asset('images/portfolio/Grizzly.jpg') }}"alt="Clouds">
                        <a href="#modal-03" class="overlay">
                            <div class="folio-item-table">
                                <div class="folio-item-cell">
                                    <h3 class="folio-title">Grizzly website</h3>
                                    <span class="folio-types">
		     					       	  Web Design + e-shoping
		     					      </span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div> <!-- /folio-item -->

                <div class="bgrid folio-item">
                    <div class="item-wrap">
                        <img src="{{ asset('images/portfolio/socialmediacertif.jpg') }}" alt="Beetle">
                        <a href="#modal-04" class="overlay">
                            <div class="folio-item-table">
                                <div class="folio-item-cell">
                                    <h3 class="folio-title">Social Media Certif</h3>
                                    <span class="folio-types">
		     					       	  E-learning plateform
		     					      </span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div> <!-- /folio-item -->

                <div class="bgrid folio-item">
                    <div class="item-wrap">
                        <img src="{{ asset('images/portfolio/firebaseapp.jpg') }}" alt="Lighthouse">
                        <a href="#modal-05" class="overlay">
                            <div class="folio-item-table">
                                <div class="folio-item-cell">
                                    <h3 class="folio-title">Fire Base App</h3>
                                    <span class="folio-types">
		     					       	  Web Development with Angular 7
		     					      </span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div> <!-- /folio-item -->


                <!-- modal popups - begin
                ============================================================= -->
                <div id="modal-01" class="popup-modal slider mfp-hide">

                    <div class="media">
                        <img src="{{ asset('images/portfolio/modals/WakeTheDesign2.jpg') }}" alt="" />
                    </div>

                    <div class="description-box">
                        <h4>Wake the Design</h4>
                        <p>A simple website design</p>

                        <div class="categories">Web Development</div>
                    </div>

                    <div class="link-box">
                        <a href="#" class="popup-modal-dismiss">Close</a>
                    </div>

                </div> <!-- /modal-01 -->

                <div id="modal-02" class="popup-modal slider mfp-hide">

                    <div class="media">
                        <img src="{{ asset('images/portfolio/modals/notify2.jpg') }}" alt="" />
                    </div>

                    <div class="description-box">
                        <h4>Notify</h4>
                        <p>Development of an website with his email notifications</p>

                        <div class="categories">Web Design and emailing</div>
                    </div>

                    <div class="link-box">
                        <a href="#" class="popup-modal-dismiss">Close</a>
                    </div>

                </div> <!-- /modal-02 -->

                <div id="modal-03" class="popup-modal slider mfp-hide">

                    <div class="media">
                        <img src="{{ asset('images/portfolio/modals/Grizzly2.jpg') }}" alt="" />
                    </div>

                    <div class="description-box">
                        <h4>Grizzly</h4>
                        <p>E-shopping website of iphone case for special event</p>

                        <div class="categories">E-shopping website development</div>
                    </div>

                    <div class="link-box">
                        <a href="#" class="popup-modal-dismiss">Close</a>
                    </div>

                </div> <!-- /modal-03 -->

                <div id="modal-04" class="popup-modal slider mfp-hide">

                    <div class="media">
                        <img src="{{ asset('images/portfolio/modals/socialmediacertif2.jpg') }}" alt="" />
                    </div>

                    <div class="description-box">
                        <h4>Social media certif</h4>
                        <p>Development of a E-learning platform to get a social media management certificate</p>

                        <div class="categories">Branding</div>
                    </div>

                    <div class="link-box">
                        <a href="#" class="popup-modal-dismiss">Close</a>
                    </div>

                </div> <!-- /modal-04 -->

                <div id="modal-05" class="popup-modal slider mfp-hide">

                    <div class="media">
                        <img src="{{ asset('images/portfolio/modals/firebaseapp2.jpg') }}" alt="" />
                    </div>

                    <div class="description-box">
                        <h4>Lighthouse</h4>
                        <p>Creation of a blog with angular 7 and Firebase</p>

                        <div class="categories">Web Development</div>
                    </div>

                    <div class="link-box">
                        <a href="#" class="popup-modal-dismiss">Close</a>
                    </div>

                </div> <!-- /modal-05 -->


                <!-- modal popups - end
             ============================================================= -->

            </div> <!-- /portfolio-wrapper -->

        </div>  <!-- /twelve -->

    </div> <!-- /portfolio-content -->

</section> <!-- /portfolio -->


<!-- services Section
================================================== -->
<section id="services">

    <div class="overlay"></div>

    <div class="row section-intro">
        <div class="col-twelve">

            <h5>Services</h5>
            <h1>What Can I Do For You?</h1>

            <p class="lead">Here the kind of project I can work on</p>

        </div>
    </div> <!-- /section-intro -->

    <div class="row services-content">

        <div id="owl-slider" class="owl-carousel services-list align-content-center">

            <div class="service">

                <span class="icon"><i class="icon-earth"></i></span>

                <div class="service-content">

                    <h3>Webdesign</h3>

                    <p class="desc">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.
                    </p>

                </div>

            </div> <!-- /service -->

            <div class="service">

                <span class="icon"><i class="icon-window"></i></span>

                <div class="service-content">

                    <h3>Laravel 5</h3>

                    <p class="desc">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.
                    </p>

                </div>

            </div> <!-- /service -->

            <div class="service">

                <span class="icon"><i class="icon-window"></i></span>

                <div class="service-content">

                    <h3>Symfony 4</h3>

                    <p class="desc">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.
                    </p>

                </div>

            </div> <!-- /service -->



        </div> <!-- /services-list -->

    </div> <!-- /services-content -->

</section> <!-- /services -->




<!-- contact
================================================== -->
<section id="contact">

    <div class="row section-intro">
        <div class="col-twelve">

            <h5>Contact</h5>
            <h1>I'd Love To Hear From You.</h1>

            <p class="lead">Here is a contact form, if you have any questions or need my skills, do not hesitate to contact me!</p>

        </div>
    </div> <!-- /section-intro -->

    <div class="row contact-form">

        <div class="col-twelve">

            <!-- form -->
            <form name="contactForm" id="contactForm" method="post" action="{{ action('ContactFormController@store') }}">
                {{ csrf_field() }}
                <fieldset>

                    <div class="form-field">
                        <input name="name" type="text" id="name" placeholder="Name" value="" minlength="2" required="">
                    </div>
                    <div class="form-field">
                        <input name="email" type="email" id="email" placeholder="Email" value="" required="">
                    </div>
                    <div class="form-field">
                        <input name="subject" type="text" id="subject" placeholder="Subject" value="">
                    </div>
                    <div class="form-field">
                        <textarea name="message" id="message" placeholder="message" rows="10" cols="50" required=""></textarea>
                    </div>
                    <div class="form-field">
                        <button class="submitform" type="submit">Submit</button>
                    </div>

                </fieldset>
            </form> <!-- Form End -->

            <!-- contact-warning -->
            <div id="message-warning">
            </div>
            <!-- contact-success -->
            <div id="message-success">
                <i class="fa fa-check"></i>Your message was sent, thank you!<br>
            </div>

        </div> <!-- /col-twelve -->

    </div> <!-- /contact-form -->

    <div class="row contact-info">

        <div class="col-four tab-full">

            <div class="icon">
                <i class="icon-pin"></i>
            </div>

            <h5>Where to find me</h5>

            <p>
                33 street Roger Martin<br>
                Bezons<br>
                95870, FR
            </p>

        </div>

        <div class="col-four tab-full collapse">

            <div class="icon">
                <i class="icon-mail"></i>
            </div>

            <h5>Email Me At</h5>

            <p>hugolavergne@devinci.fr</p>

        </div>

        <div class="col-four tab-full">

            <div class="icon">
                <i class="icon-phone"></i>
            </div>

            <h5>Call Me At</h5>

            <p>
                Mobile: 06 45 09 16 88<br>
            </p>

        </div>

    </div> <!-- /contact-info -->

</section> <!-- /contact -->


<!-- footer
================================================== -->

<footer>
    <div class="row">

        <div class="col-six tab-full pull-right social">

            <ul class="footer-social">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-behance"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
            </ul>

        </div>

        <div class="col-eight tab-full">
            <div class="copyright">
                <span>© Copyright 2018 </span>
                <span>Design by <a href="http://www.styleshout.com/">styleshout</a></span>
                <span>Distributed by <a href="https://themewagon.com/">themewagon</a></span>
            </div>
        </div>

        <div id="go-top">
            <a class="smoothscroll" title="Back to Top" href="#top"><i class="fa fa-long-arrow-up"></i></a>
        </div>

    </div> <!-- /row -->
</footer>

<div id="preloader">
    <div id="loader"></div>
</div>

<!-- Java Script
================================================== -->
<script src="{{ asset('js/jquery-2.1.3.min.js') }}"></script>
<script src="{{ asset('js/plugins.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>

</body>

</html>
