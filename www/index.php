<!doctype html>

<html lang="en">
<?php include('header.php'); ?>
<body>
    <h1>Gallery 1</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
<div>
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
<?php include('footer.php'); ?>
</html>
