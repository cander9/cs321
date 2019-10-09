<!doctype html>

<html lang = "en">
<head>
     
<!-- Author:  Caitlin Anderson
     Purpose: CS321 Assignment 2 --> 

  <link rel="stylesheet" href="/css/contactStyle.css" />
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
<p>
  <label>Name
    <input type="text" name="customer_name" required>
  </label> 
</p>

<p>
  <label>Phone 
    <input type="tel" name="phone_number">
  </label>
</p>

<p>
  <label>Email 
    <input type="email" name="email_address">
  </label>
</p>
<fieldset class = "f1">
<legend>Shipping Address</legend>  
<p>
  <label>Name
    <input type="text" name="customer_name" required>
  </label> 
</p>
<p>
<label>Address Line 1
<input type="text" name="address_line1" required>
</label>
</p>
<p>
<label>Address Line 2
<input type="text" name="address_line2">
</label>
</p>
</fieldset>  
<fieldset class = "f2">
<legend>Description</legend>
<p>
<label>What : 
  <textarea class= "what" name="card_type" required></textarea>
</label>
</p>
<p>
<label>Describe :
<textarea class= "describe" name="card_number" required></textarea>
</label>
</p>
</fieldset>
<p><button class = "checkout" >Submit</button></p>
  <footer>
    <a>copyright information</a>
    <a href = "http://anderscr.cs321.simmons.edu/contact_me/contact.php" class = "contact">Contact Me</a>
  </footer>
<!-- I got the section names, nav, aside, footer, etc from https://www.w3schools.com/html/html_layout.asp -->
       </html>
