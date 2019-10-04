<!doctype html>

<html lang = "en">
<head>

    <!-- Author:  Caitlin Anderson
         Purpose: CS321 Assignment 2 -->

    <link rel="stylesheet" href="/css/style.css" />
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700i&display=swap" rel="stylesheet">
    <script src="/javascript/myscripts.js"></script>
</head>
<nav class = "header">
    <a><h2>Name</h2></a>
    <ul class = "hov">
        <li class = crumb><a href = "http://anderscr.cs321.simmons.edu/">Gallery 1</a></li>
        <li class = crumb><a href = "gallery 2">Gallery 2</a></li>
        <li class = crumb><a href = "shop">Shop</a></li>
        <li class = crumb><a href = "bio">Bio</a></li>
    </ul>
    <!-- source:  https://developer.mozilla.org/enUS/docs/Web/HTML/Element/nav -->
</nav>   <!-- I want the nav as a seperate column to the left -->
<header> <h1>Gallery 1</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
</header>   <!-- will be a description of the gallery in final -->
<ul id = "test">
    <li class="container" id = "IMG01" >
        <img src="http://anderscr.cs321.simmons.edu/images/IMG01.JPG" alt="Piece1" width = 300>
        <a class = "closerLook" id = "closerLook1" href = "http://anderscr.cs321.simmons.edu/closer_look/gallery1A.php">Closer Look</a>
    </li>
    <li class= "container" >
        <img src="http://anderscr.cs321.simmons.edu/images/IMG1.JPG" alt="Piece2" width = 300 class = "rotate">
        <a class = "closerLook" id = "closerLook2" href = "http://anderscr.cs321.simmons.edu/closer_look/gallery1B.php">Closer Look</a>
    </li>
    <li class="container">
        <img src="http://anderscr.cs321.simmons.edu/images/IMG2.JPG" alt="Piece3" width = 300 class = "rotate">
        <a class = "closerLook" id = "closerLook3" href = "http://anderscr.cs321.simmons.edu/closer_look/gallery1C.php">Closer Look</a>
    </li>
</ul><!-- However Many I need --><!--Code Source:  https://www.w3schools.com/howto/howto_css_button_on_image.asp    eventually I want to be able to click on the img rather than have a separate button-->
<footer>
    <a>copyright information</a>
    <a href = "contact" class = "contact">Contact</a>
</footer>
<!-- I got the section names, nav, aside, footer, etc from https://www.w3schools.com/html/html_layout.asp -->
<script src="/javascript/myscripts.js"></script>
<script>
    $("#IMG01") .mouseover(function() {
        this.src= "http://anderscr.cs321.simmons.edu/images/CloserLook1.png"
    }) .mouseout(function () {
        this.src= "http://anderscr.cs321.simmons.edu/images/IMG01.JPG"
    });
</script>
</html>
