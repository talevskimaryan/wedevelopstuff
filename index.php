<?php include './inc/header.php' ?>

<!--Page Specific Styles-->
<link rel="stylesheet" href="./css/home.css">

</head>

<body>
    <?php include './inc/navbar.php' ?>

    <!--Page Specific Content Start-->
    <section>
        <div id="color"></div>
        <div id="background"></div>
        <div id="content">
            <div id="section-one">
                <div id="text">
                    <h1>Web Design &<br>Development</h1>
                    <br>
                    <p>Website design and development of web-based apps.</p>
                    <p>Pixel perfect designs and flawless functionality.</p>
                    <a href="#split-line" id="button">
                        Scroll Down<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.25 4.5l7.5 7.5-7.5 7.5m-6-15l7.5 7.5-7.5 7.5" />
                        </svg>

                    </a>
                </div>
                <div id="hero-image-wrapper">
                    <img id="hero-image" src="./images/new-image.svg" alt="">
                </div>

            </div>
            <hr id="split-line">
            <div id="services">
                <h1>Services</h1>
                <p id="services-description">Our core services are based around Laravel Apps with stunning UI/UX integrated on the Front-End.</p>
                <div id="services-cards">
                    <div id="card">
                        <img src="./images/frontend.svg" alt="">
                        <div id="text-heading">
                            <h3>Front-End Development</h3>
                            <p>We love working on complex web applications and we deliver easy to use beautiful looking products.</p>
                        </div>
                    </div>
                    <div id="card">
                        <img src="./images/backend.svg" alt="">
                        <div id="text-heading">
                            <h3>Back-End Development</h3>
                            <p>Creating custom applications and providing Laravel based solutions with MySQL or MongoDB.</p>
                        </div>
                    </div>
                    <div id="card">
                        <img src="./images/uiux.svg" alt="">
                        <div id="text-heading">
                            <h3>UI/UX Design</h3>
                            <p>Every website or web application needs to look good and be easy to use.</p>
                        </div>
                    </div>
                    <div id="card">
                        <img src="./images/maintenance.svg" alt="">
                        <div id="text-heading">
                            <h3>Website Maintenance</h3>
                            <p>We can help you keep your website up to date with the ever changing and evolving technologies.</p>
                        </div>

                    </div>
                </div>
            </div>
            <hr id="split-line">
            <div id="tech-stack">
                <h1>Tech-Stack</h1>
                <p id="tech-stack-description">Our core services are based around Laravel Apps with stunning UI/UX integrated on the Front-End. However, we collaborate with other freelancers and can offer the rest of the stuff listed below.</p>
                <div id="icons">
                    <div><img src="./images/illustrator.svg" alt=""></div>
                    <div><img src="./images/photoshop.svg" alt=""></div>
                    <div><img src="./images/figma.svg" alt=""></div>
                    <div><img src="./images/html.svg" alt=""></div>
                    <div><img src="./images/css.svg" alt=""></div>
                    <div><img src="./images/sass.svg" alt=""></div>
                    <div><img src="./images/bootstrap.svg" alt=""></div>
                    <div><img src="./images/tailwind.svg" alt=""></div>
                    <div><img src="./images/js.svg" alt=""></div>
                    <div><img src="./images/jquery.svg" alt=""></div>
                    <div><img src="./images/vue.svg" alt=""></div>
                    <div><img src="./images/php.svg" alt=""></div>
                    <div><img src="./images/laravel.svg" alt=""></div>
                    <div><img src="./images/postman.svg" alt=""></div>
                    <div><img src="./images/mysql.svg" alt=""></div>
                    <div><img src="./images/mongodb.svg" alt=""></div>
                    <div><img src="./images/vscode.svg" alt=""></div>
                    <div><img src="./images/git.svg" alt=""></div>
                    <div><img src="./images/github.svg" alt=""></div>
                    <div><img src="./images/gitlab.svg" alt=""></div>
                </div>
            </div>
        </div>
    </section>

    <!--Page Specific Content End-->

    <!-- Including Common Scripts -->
    <?php include './inc/scripts.php'; ?>
    <!-- Page-Specific Scripts  -->
</body>

<?php include './inc/footer.php' ?>