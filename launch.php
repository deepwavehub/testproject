<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-164357590-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-164357590-1');
    </script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700,800&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="script.js" defer></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- Global site tag (gtag.js) - Google Ads: 650264275 -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-650264275"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'AW-650264275');
    </script>
    <!-- Event snippet for Website traffic conversion page -->
    <script>
        gtag('event', 'conversion', {
            'send_to': 'AW-650264275/XEfTCP_4iM0BENP9iLYC'
        });
    </script>



    <title>Aria Offices - Launch</title>
    <!-- Facebook Pixel Code -->
    <script>
        ! function (f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function () {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '2974399082633972');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id=2974399082633972&ev=PageView&noscript=1" /></noscript>
    <!-- End Facebook Pixel Code -->
</head>

<body>
    <nav class="navbar">
        <div class="white-circle"></div>
        <div class="logo">
            <a href="index.html"><img src="../img/logo-small.png" alt="Aria Select Office Suites Logo"
                    class="logo-img"></a>
        </div>
        <a href="#" class="toggle-button burger">
            <span class="bar line1"></span>
            <span class="bar line2"></span>
            <span class="bar line3"></span>
        </a>
        <div class="nav-links">
            <ul class="nav-ul">
                <li><a href="index.html">Home</a></li>
                <li><a href="location.html">Location</a></li>
                <li><a href="gallery.html">Gallery</a></li>
                <li><a href="index.html#contact">Contact</a></li>
                <li><a href="https://ariaoffices.skedda.com">Members</a></li>
            </ul>
        </div>
    </nav>

    <!----------------------------- PROMO --------------------------------->

    <section class="launch-page_promo">
        <div class="launch-page__container">
            <div class="launch-page__title">
                <h1 class="launch-page__header-h1">Launch Promotion</h1>
                <div class="border-dark"></div>
                <p class="launch-page__title-text">We’re excited to celebrate our Summer 2020 launch by giving away a
                    German legend.</p>
                <p class="launch-page__title-text text--bold">The 2021 BMW M4</p>
            </div>
            <div class="launch-page__info">
                <div class="launch-page__left-col">
                    <p class="launch-page__header text--medium">THE WINNER</p>
                    <p class="launch-page__header-text">ONLY for Aria Select Office Suites at Bell Tower. That means
                        your chances of winning could be 1/32 or 1/2... it’s all determined by YOU as you decide on the
                        number of luxury office suites you’ll occupy. We want YOU to arrive in style!</p>
                </div>
                <div class="launch-page__right-col">
                    <h1 class="launch-page__header text--medium">THE RULES</h1>
                    <p class="launch-page__header-text">Each office space is entered into the
                        draw with an 18-month lease. Leasing a workstation? You also qualify for the draw! Leasing an
                        executive corner office? Your chances are proportional as well. Contact us or more details.</p>
                </div>
            </div>
            <div class="launch-page__images">
                <img src="../img/bmw-4-3.jpg" alt="" class="bmw-left">
                <img src="../img/bmw-4-1.jpg" alt="" class="bmw-right">
            </div>
        </div>

    </section>

    <!------------------------ CANCELLATION FEES --------------------------->

    <div class="fees__container">
        <div class="fees-image">
            <img class="icon-accent" src="../img/payment.png" alt="" data-aos="zoom-in" />
        </div>
        <h1>We Pay Cancellation Fees</h1>
        <div class="border-dark"></div>
        <p class="text--header">
            Contact us for more information about how you can get into a luxury office suite sooner, without the added
            financial burden from your current lease.
        </p>
    </div>

    <!------------------------ CONTACT FORM SECTION --------------------------->

    <section class="form-container" id="contact">
        <div class="contact-heading">
            <h1>Contact</h1>
            <div class="border-dark"></div>
            <p>Interested in the details? Reach out below.</p>
        </div>
        <form action="POST" data-netlify="true" class="form">
            <div class="field">
                <input type="text" name="name" autocomplete="off" required />
                <label for="name" class="label-name">
                    <span class="content-name">Name</span>
                </label>
            </div>
            <div class="field">
                <input type="email" name="email" autocomplete="off" required />
                <label for="email" class="label-name">
                    <span class="content-name">Email</span>
                </label>
            </div>
            <div class="field">
                <input type="tel" name="tel" autocomplete="off" required />
                <label for="tel" class="label-name">
                    <span class="content-name">Phone</span>
                </label>
            </div>
            <div class="field">
                <input type="text" name="text" autocomplete="off" required />
                <label for="text" class="label-name">
                    <span class="content-name">Message</span>
                </label>
            </div>
            <!-- <div class="field recaptcha">
                <div data-netlify-recaptcha="true" required></div>
            </div> -->
            <p class="hidden">
                <label>Don’t fill this out if you're human: <input name="bot-field" /></label>
            </p>
            <button type="submit" class="button contact-btn">Submit</button>
        </form>
    </section>

    <!--------------------------------- FOOTER ------------------------------------>
    <footer class="footer">
        <div class="footer-container">
            <div class="logo-col">
                <img class="footer-logo" src="../img/logo-white.png" alt="Aria Logo">
                <p class="address">
                </p>
            </div>
            <div class="left-col">
                <h3 class="footer-header">LOCATION</h3>
                <div class="border footer-border"></div>
                <a href="index.html#belltower" class="footer-content">Bell Tower</a>
                <p class="address1">10104 103 Ave NW</p>
                <p class="address2">Edmonton, AB T5J 0H8</p>
                <p class="address2">(780) 243-1848</p>
                <p class="address2">info@ariaoffices.com</p>
            </div>
            <div class="center-col">
                <h3 class="footer-header">HOME</h3>
                <div class="border footer-border"></div>
                <a href="gallery.html" class="footer-content">Gallery</a>
                <a href="location.html" class="footer-content">Location</a>
                <a href="index.html#contact" class="footer-content">Contact</a>
                <a href="launch.html" class="footer-content">Launch Promo</a>
            </div>
            <div class="right-col">
                <h3 class="footer-header">SOCIAL</h3>
                <div class="border footer-border"></div>
                <a href="www.facebook.com/ariaoffices"><i class="fa fa-facebook-f fa-2x"></i></a>
                <a href="www.instagram.com/ariaoffices"><i class="fa fa-instagram fa-2x"></i></a>
                <a href="www.twitter.com/ariaoffices"><i class="fa fa-twitter fa-2x"></i></a>
                <a href="www.linkedin.com/company/ariaoffices"><i class="fa fa-linkedin fa-2x"></i></a>
            </div>
            <!-- <div class="rights footer-content">
                <p class="rights-text">© 2020 Social Logic Media</p>
            </div> -->
        </div>

    </footer>
    <script>
        AOS.init();
    </script>
</body>
<script>
    AOS.init();
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js"
    integrity="sha256-2p2tRZlPowp3P/04Pw2rqVCSbhyV/IB7ZEVUglrDS/c=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/debug.addIndicators.min.js"
    integrity="sha256-XBVALc3QsDSQiDtiaBwNZ2rxCJTHzlUhhlDQ84J8bw8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/animation.gsap.min.js"
    integrity="sha256-+9YNuItWuR4sbqeaNiJOxG0BvptYz4fbUXbIZoH5Jwo=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.2.6/gsap.min.js"
    integrity="sha256-3arngJBQR3FTyeRtL3muAGFaGcL8iHsubYOqq48mBLw=" crossorigin="anonymous"></script>
<script src="./app.js"></script>

</html>