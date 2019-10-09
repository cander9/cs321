<!doctype html>

<html lang = "en">
<head>

    <!-- Author:  Caitlin Anderson
         Purpose: CS321 Assignment 2 -->

    <link rel="stylesheet" href="/css/contactStyle.css" />
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700i&display=swap" rel="stylesheet">
    <script src="/javascript/forms.js"></script>
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
<form>
<p>
    <label>Name
        <input type="text" name="customer_name">
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
        <label for="name">Name: </label>
            <div id="errorname" class="error"></div>
            <input type="text" id="name" name="name" minlength="2">
    </p>
    <p>
        <label>Address Line 1
            <input type="text" name="address_line1">
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
        <label>Size :</label>
    <p> </p>
    <input type="radio" name="size" value="small"> Small &#40;5X7 in. or comparable&#41;<br>
    <input type="radio" name="size" value="medium"> Medium &#40;16X20 in. or comparable&#41;<br>
    <input type="radio" name="size" value="large"> Larger than 16X20 &#40;please specify in your description&#41;<br>
    <p>
        <label>These are my checkboxes:</label>
    <p></p>
    <input type="checkbox" name="hi1" value="hi1"> here<br>
    <input type="checkbox" name="hi2" value="hi2"> they<br>
    <input type="checkbox" name="hi3" value="hi3"> are<br>
    <p></p>
        <label>Describe :
    <p></p>
    <textarea class= "describe" name="describe"></textarea>
    </label>
    <p></p>
</fieldset>
<p><button class = "checkout" >Submit</button></p>
</form>
<footer>
    <a>copyright information</a>
    <a href = "http://anderscr.cs321.simmons.edu/contact_me/contact.php" class = "contact">Contact Me</a>
</footer>
<!-- I got the section names, nav, aside, footer, etc from https://www.w3schools.com/html/html_layout.asp -->
</html>
