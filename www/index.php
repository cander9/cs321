<!doctype html>

<!-- Author:  Caitlin Anderson
     Purpose: CS321 Assignment 2 --> 

<html lang = “en”>
<head>
  <link rel=”stylesheet” href=”style.css”>
  <link href="https://fonts.googleapis.com/css?family=Raleway:400,700i&display=swap" rel="stylesheet">
<!--</head>-->
  <nav class = "header">         
    <a><h2>Name</h2></a>
    <ul>
      <li class = crumb><a href = "gallery 1">Gallery 1</a></li>
      <li class = crumb><a href = "gallery 2">Gallery 2</a></li>
      <li class = crumb><a href = "shop">Shop</a></li>
      <li class = crumb><a href = "bio">Bio</a></li>
    </ul>
<!-- source:  https://developer.mozilla.org/enUS/docs/Web/HTML/Element/nav -->
  </nav>   <!-- I want the nav as a seperate column to the left -->
  <header> <h1>Gallery Title</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
  </header>   <!-- will be a description of the gallery in final -->
  <ul>
 <ul>
  <li class="container">
       <img src="http://anderscr.cs321.simmons.edu/images/IMG01.JPG" alt="Piece1" width = 300>
    <a class = "closerLook" href = "closer_look1">Closer Look</a>
  </li>
  <li class= "container" >
       <img src="http://anderscr.cs321.simmons.edu/images/IMG1.JPG" alt="Piece2" width = 300 class = "rotate">
     <a class = "closerLook" href = "closer_look2">Closer Look</a>
  </li>  
  <li class="container">
       <img src="http://anderscr.cs321.simmons.edu/images/IMG2.JPG" alt="Piece3" width = 300 class = "rotate">
<a class = "closerLook" href = "closer_look3">Closer Look</a>
  </li>
  </ul><!-- However Many I need --><!--Code Source:  https://www.w3schools.com/howto/howto_css_button_on_image.asp    eventually I want to be able to click on the img rather than have a separate button-->
  <footer>
    <a>copyright information</a>
    <a href = "contact" class = "contact">Contact</a>
  </footer>
</html><!-- I got the section names, nav, aside, footer, etc from https://www.w3schools.com/html/html_layout.asp -->
 
