<!doctype html>

<html lang = "en">
<head>

    <!-- Author:  Caitlin Anderson
         Purpose: CS321 Assignment-->

    <link rel="stylesheet" href="/css/contactStyle.css" />
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700i&display=swap" rel="stylesheet">
    <script src="/javascript/forms.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <nav class="header">
        <a><h2>Name</h2></a>
        <ul class="hov">
            <li class=crumb><a href = "http://anderscr.cs321.simmons.edu/">Gallery 1</a></li>
            <li class=crumb><a href = "gallery 2">Gallery 2</a></li>
            <li class=crumb><a href = "shop">Shop</a></li>
            <li class=crumb><a href = "bio">Bio</a></li>
        </ul>
        <!-- source:  https://developer.mozilla.org/enUS/docs/Web/HTML/Element/nav -->
    </nav>
</head>
</html><div>
    <ul id="test">
        <li class="container">
            <img src="http://anderscr.cs321.simmons.edu/images/IMG01.JPG" alt="Piece1" width=300>
            <a class="closerLook" id="closerLook1" href="http://anderscr.cs321.simmons.edu/closer_look/gallery1A.php">Closer Look</a>
        </li>
        <li class= "container" >
            <img src="http://anderscr.cs321.simmons.edu/images/IMG1.JPG" alt="Piece2" width=300 class="rotate">
            <a class="closerLook" id="closerLook2" href="http://anderscr.cs321.simmons.edu/closer_look/gallery1B.php">Closer Look</a>
        </li>
        <li class="container">
            <img src="http://anderscr.cs321.simmons.edu/images/IMG2.JPG" alt="Piece3" width=300 class="rotate">
            <a class="closerLook" id="closerLook3" href="http://anderscr.cs321.simmons.edu/closer_look/gallery1C.php">Closer Look</a>
        </li>
    </ul>
</div> <!-- However Many I need --><!--Code Source:  https://www.w3schools.com/howto/howto_css_button_on_image.asp    eventually I want to be able to click on the img rather than have a separate button-->
<footer>
    <a>copyright information</a>
    <a href = "http://anderscr.cs321.simmons.edu/contact_me/contact.php" class="contact">Contact Me</a>
</footer>
</html>
