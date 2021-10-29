<?php include 'mail.php'; ?>

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- ===== CSS ===== -->
        <link rel="stylesheet" href="assets/css/styles.css">

        <!-- ===== BOX ICONS ===== -->
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

        <title>Haropis Ayo Portfolio</title>
        
        <link rel = "icon" href ="/assets/img/logo.png" type = "image/x-icon" sizes="16x16">
    </head>
    <body>
        
        <!--alert messages start-->
        <?php echo $alert; ?>        
        <!--alert messages end-->
        
        <!--===== HEADER =====-->
        <header class="l-header">
            <nav class="nav bd-grid">
                <div>
                    <a href="#" class="nav__logo">HAROPIS AYO</a>
                </div>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item"><a href="#home" class="nav__link active">Home</a></li>
                        <li class="nav__item"><a href="#about" class="nav__link">About</a></li>
                        <li class="nav__item"><a href="#skills" class="nav__link">Skills</a></li>
                        <li class="nav__item"><a href="#portfolio" class="nav__link">Portfolio</a></li>
                        <li class="nav__item"><a href="#contact" class="nav__link">Contact</a></li>
                    </ul>
                </div>

                <div class="nav__toggle" id="nav-toggle">
                    <i class='bx bx-menu'></i>
                </div>
            </nav>
        </header>

        <main class="l-main">
            <!--===== HOME =====-->
            <section class="home" id="home">
                <div class="home__container bd-grid">
                    <h1 class="home__title"><span>HE</span><br>LLO.</h1>

                    <div class="home__scroll" style="float: right;">
                        <a href="#follow" class="home__scroll-link"><i class='bx bx-up-arrow-alt' ></i>Scroll down</a>
                    </div>

                    <img src="assets/img/aa.png" alt="" class="home__img">
                </div>
            </section>
            
            <!--===== ABOUT =====-->
            <section class="about section" id="about">
                <h2 class="section-title">About</h2>

                <div class="about__container bd-grid">
                    <div class="about__img">
                        <img src="assets/img/aa.png" alt="">
                    </div>

                    <div>
                        <h2 class="about__subtitle">I'm Haropis Ayo</h2>
                        <span class="about__profession">Graphic designer | Mobigrapher | Writer | Web Designer</span>
                        <p class="about__text">I'm Haropis, I design logos, flyers, posters, brochures, ID cards and other graphic designs. I also take and edit beautiful and creative pictures on my Mobile Smartphone. I write poems, quotes and advert texts too and can design responsive web pages.</p>

                        <div class="about__social">
                            <a href="#" class="about__social-icon"><i class='bx bxl-linkedin' ></i></a>
                            <a href="https://github.com/Haropis" class="about__social-icon"><i class='bx bxl-github' ></i></a>
                          
                        </div>
                    </div>
                </div>
            </section>

            <!--===== SKILLS =====-->
            <section class="skills section" id="skills">
                <h2 class="section-title">Skills</h2>

                <div class="skills__container bd-grid">
                    <div class="skills__img">
                        <img src="assets/img/skills.png" alt="">
                    </div>
					<div class="skills__box">
                        <h3 class="skills__subtitle">Development</h3>
                        <span class="skills__name">Html</span>
                        <span class="skills__name">Css</span>
                        <span class="skills__name">Javascript</span>
                        <span class="skills__name">Scss</span>
                                       
                        <h3 class="skills__subtitle">Design</h3>
                        <span class="skills__name">CorelDraw</span>
                        <span class="skills__name">Photoshop</span>
                        <span class="skills__name">Canva</span>
                        <span class="skills__name">PixelLab</span>
						
						<h3 class="skills__subtitle">Picture Editing</h3>
                        <span class="skills__name">Photoshop</span>
                        <span class="skills__name">Lightroom</span>
                        <span class="skills__name">Snapseed</span>
                    </div>
                   
                </div>
            </section>

            <!--===== PORTFOLIO =====-->
            <section class="portfolio section" id="portfolio">
                <h2 class="section-title">Portfolio</h2>

                <div class="portfolio__container bd-grid">
                    <div class="portfolio__img">
                        <img src="assets/img/1.jpeg" alt="">
                        <div class="text">Graphic Designs</div>

                        <div class="portfolio__link">
                            <a href="graphicdesigns.html" class="portfolio__link-name">Graphic designs</a>
                        </div>
                    </div>
                    <div class="portfolio__img">
                        <img src="assets/img/2.jpeg" alt="">

                        <div class="portfolio__link">
                            <a href="#" class="portfolio__link-name">View details</a>
                        </div>
                    </div>
                    <div class="portfolio__img">
                        <img src="assets/img/5.jpeg" alt="">

                        <div class="portfolio__link">
                            <a href="#" class="portfolio__link-name">View details</a>
                        </div>
                    </div>
                    <div class="portfolio__img">
                        <img src="assets/img/7.jpeg" alt="">

                        <div class="portfolio__link">
                            <a href="#" class="portfolio__link-name">View details</a>
                        </div>
                    </div>
                    <div class="portfolio__img">
                        <img src="assets/img/8.jpeg" alt="">

                        <div class="portfolio__link">
                            <a href="#" class="portfolio__link-name">View details</a>
                        </div>
                    </div>
                    <div class="portfolio__img">
                        <img src="assets/img/6.jpeg" alt="">

                        <div class="portfolio__link">
                            <a href="#" class="portfolio__link-name">View details</a>
                        </div>
                    </div>
                </div>
            </section>

            <!--===== CONTACT =====-->
            <section class="contact section" id="contact">
                <h2 class="section-title">Contact</h2>

                <div class="contact__container bd-grid">
                    <div class="contact__info">
                        <h3 class="contact__subtitle">EMAIL</h3>
                        <span class="contact__text">adepelumiayo312@gmail.com</span>

                        <h3 class="contact__subtitle">PHONE</h3>
                        <span class="contact__text">+234 8133-3411-516</span>

                        <h3 class="contact__subtitle">ADDRESS</h3>
                        <span class="contact__text">10, Tunde Ebadan Way, Off The Bells Drive, Ota,Ogun State, Nigeria.</span>
                    </div>

                    <form action="mail.php" method="POST">
                        <div class="contact__inputs">
                            <input type="text" name="name" placeholder="Name" class="contact__input" required>
                            <input type="mail" name="email" placeholder="Email" class="contact__input" required>
                        </div>
                        <textarea type="text" name="message" placeholder="Type message here" id="" cols="0" rows="10" class="contact__input"></textarea>
                        <input type="submit" value="Submit" class="contact__button">
                    </form>
                </div>
            </section>
        </main>

        <!--===== FOOTER =====-->
        <footer class="footer section">
            <div class="footer__container bd-grid">
                <div class="footer__data">
                    <h2 class="footer__title">HAROPIS AYO</h2>
                    <p class="footer__text">I'm Haropis Ayo and this is my personal website</p>
                </div>

                <div class="footer__data">
                    <h2 class="footer__title">EXPLORE</h2>
                    <ul>
                        <li><a href="#home" class="footer__link">Home</a></li>
                        <li><a href="graphicdesigns.html" class="footer__link">Graphic Designs</a></li>
                        <li><a href="#mobigraphy.html" class="footer__link">Mobigraphy</a></li>
                        <li><a href="#imgedit.html" class="footer__link">Image Editing</a></li>
                        <li><a href="#webdes.html" class="footer__link">Web Designing</a></li>
                        <li><a href="#others.html" class="footer__link">More</a></li>
                    </ul>
                </div>
                
                <div class="footer__data">
                    <h2 class="footer__title" id="follow">CONNECT WITH ME</h2>
                    <a href="https://www.facebook.com/haropis7" target="blank" class="footer__social"><i class='bx bxl-facebook' ></i></a>
                    <a href="https://www.instagram.com/haropisshotit" target="blank" class="footer__social"><i class='bx bxl-instagram' ></i></a>
                    <a href="www.twitter.com/haropis_shot_it" target="blank" class="footer__social"><i class='bx bxl-twitter' ></i></a>
                    <a href="https://wa.me/+2347055815744" target="blank" class="footer__social"><i class='bx bxl-whatsapp' ></i></a>
					<a href="https://github.com/Haropis" class="about__social-icon"><i class='bx bxl-github' ></i></a>
		            <a href="https://www.linkedin.com/Haropis" class="about__social-icon"><i class='bx bxl-linkedin' ></i></a>
                </div>

            </div>
                <div class="footer__scroll">
                    <a href="#home" class="footer__scroll-link"><i class='bx bx-up-arrow-alt'></i></a>
                    <br/>
                </div>
        </footer>
        

        <!--===== SCROLL REVEAL =====-->
        <script src="https://unpkg.com/scrollreveal"></script>

        <!--===== MAIN JS =====-->
        <script src="assets/js/main.js"></script>
        <script type="text/javascript">
        if(window.history.replaceState){
            window.history.replaceState(null, null, window.location.href);
        }
        </script>

    </body>
</html>