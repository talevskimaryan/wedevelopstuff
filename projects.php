<?php include './inc/header.php' ?>

<!--Page Specific Styles-->
<link rel="stylesheet" href="./css/projects.css">

</head>

<body>
    <?php include './inc/navbar.php' ?>

    <!--Page Specific Content Start-->
    <section>
        <div id="color"></div>
        <div id="background"></div>
        <div id="content">
            <h1>Portfolio</h1>
            <div id="projects-wrapper">
                <div id="project-card">
                    <div class="images" id="evo"></div>
                    <div id="gradient">
                        <h2>Medical Product Landing Page</h2>
                        <p>Landing page for a high-tech medical product. Page includes a custom-made calculator and a fully functional product simulator using which one can test the entire product functionality and train people on how to use it.</p>
                    </div>
                    <a href="http://www.geminievo.com" target="_blank"></a>
                </div>
                <div id="project-card">
                    <div class="images" id="calculator"></div>
                    <div id="gradient">
                        <h2>Custom Calculator</h2>
                        <p>Custom PBM calculator made for calculating the required energy or time dosage based on the required treatment.</p>
                    </div>
                    <a href="http://azena.live/newcalculator/" target="_blank"></a>
                </div>
                <div id="project-card">
                    <div class="images" id="brainsterpreneurs"></div>
                    <div id="gradient">
                        <h2>Brainsterpreneurs</h2>
                        <p>А platform for collaboration between students at academies in Brainster. Used technologies: Bootstrap, Vanilla JS, jQuery, Laravel.</p>
                    </div>
                    <a href="https://gitlab.com/vnackova07/brainster-preneurs?fbclid=IwAR3bUcBLbNLir69Ra9HD0UfdlMXtLmtIMqBsvsr0SWgN0rHv2Cst4MgO87Y" target="_blank"></a>
                </div>
                <div id="project-card">
                    <div class="images" id="jaeger"></div>
                    <div id="gradient">
                        <h2>Receipt Reading Software</h2>
                        <p>Website for validation of receipts used in a giveaway. Used technologies: Bootstrap, CSS, Vanilla JS, jQuery, AJAX and PHP.</p>
                    </div>
                    <a href="https://gitlab.com/vnackova07/project2?fbclid=IwAR1DmlFapE0loVq_K2j9rIonBWBpv3MdAdjRy8X06iqKYPCTJB2wlJwxplc" target="_blank"></a>
                </div>
                <div id="project-card">
                    <div class="images" id="zanov"></div>
                    <div id="gradient">
                        <h2>Zanov Admin Panel</h2>
                        <p>Administration panel for fashion design studio. Used technologies: Laravel, Livewire, Vanilla JS and jQuery.</p>
                    </div>
                    <a href=""></a>
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