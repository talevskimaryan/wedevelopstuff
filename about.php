<?php include './inc/header.php' ?>

<!--Page Specific Styles-->
<link rel="stylesheet" href="./css/about.css">

</head>

<body>
    <?php include './inc/navbar.php' ?>

    <!--Page Specific Content Start-->
    <section>
        <div id="color"></div>
        <div id="background"></div>
        <div id="content">
            <h1>Team Members</h1>
            <div id="top-spacer"></div>
            <div id="wrapper">
                <div id="wrapper-link">
                    <div data-tilt class="card" id="card-one">
                        <div id="team-mate">
                            <img src="./images/user.svg" alt="">
                            <h2>M. Talevski</h2>
                            <h3>UI/UX & Front-End</h3>
                        </div>
                        <hr>
                        <ul>
                            <li>HTML & CSS</li>
                            <li>JavaScript</li>
                            <li>PHP</li>
                            <li>Adobe Photoshop</li>
                            <li>Adobe Illustrator</li>
                            <li>Figma</li>
                            <li>Wordpress</li>
                        </ul>
                        <hr>
                        <a href="https://www.linkedin.com/in/maryan-talevski/" target="_blank"><img id="social" src="./images/linkedin.svg" alt=""></a>
                    </div>
                </div>
                <div id="spacer"></div>
                <div id="wrapper-link" target="_blank">
                    <div data-tilt class="card" id="card-two">
                        <div id="team-mate">
                            <img src="./images/woman.svg" alt="">
                            <h2>V. Nackova</h2>
                            <h3>Full-Stack Developer</h3>
                        </div>
                        <hr>
                        <ul>
                            <li>Bootstrap</li>
                            <li>Tailwind CSS</li>
                            <li>JavaScript & AlpineJS</li>
                            <li>VueJS</li>
                            <li>jQuery</li>
                            <li>Laravel PHP</li>
                            <li>MySQL / MongoDB</li>
                        </ul>
                        <hr>
                        <a href="https://www.linkedin.com/in/nackovav/" target="_blank"><img id="social" src="./images/linkedin.svg" alt=""></a>
                        <a href="https://gitlab.com/vnackova07" target="_blank"><img id="social" src="./images/gitlab.svg" alt=""></a>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!--Page Specific Content End-->

    <!-- Including Common Scripts -->
    <?php include './inc/scripts.php' ?>
    <!-- Page-Specific Scripts  -->
    <!-- <script src="js/about-tilt-effects.js"></script> -->
</body>

<?php include './inc/footer.php' ?>