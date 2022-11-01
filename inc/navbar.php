<!--Burger Icon-->
<div class="burger-menu" onclick="burgerMenu()">
    <div class="burger-menu-line"></div>
    <div class="burger-menu-line"></div>
    <div class="burger-menu-line"></div>
</div>

<!--Logo Mobile-->
<a href="./index.php" id="logo-container-mobile">
    <img id="logo-image-mobile" src="./images/wdslogo.svg" alt="">
    <h2>we<span id="span-section">DevelopStuff</span></h2>
</a>

<!--Regular Navbar-->
<nav class="navbar">
    <a href="./index.php" id="logo-container">
        <img id="logo-image" src="./images/wdslogo.svg" alt="">
        <h2>we<span>DevelopStuff</span></h2>
        <div id="separator"></div>
    </a>
    <li><a href="./index.php" class="p-2 home">Home</a></li>
    <li><a href="./about.php" class="p-2 about">About</a></li>
    <li><a href="./projects.php" class="p-2 projects">Projects</a></li>
    <li><a href="./contact.php" class="p-2 contact">Contact</a></li>
</nav>

<div id="toggle-button" onclick="toggleColor()">
    <svg id="moon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
        <path id="svg-path" stroke-linecap="round" stroke-linejoin="round" d="M21.752 15.002A9.718 9.718 0 0118 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 003 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 009.002-5.998z" />
    </svg>
    <svg id="sun" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
        <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v2.25m6.364.386l-1.591 1.591M21 12h-2.25m-.386 6.364l-1.591-1.591M12 18.75V21m-4.773-4.227l-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z" />
    </svg>

</div>