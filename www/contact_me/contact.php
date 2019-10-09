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
<!--form action="#" method="POST"-->
    <div>
        <label for="name1">Name : </label>
        <div id="errorname1" class="error"></div>
        <input  class = "regInput" type="text" id="name1" name="name1" minlength="2">
    </div>
    <div>
        <label for = "phone">Phone : </label>
        <div id="errorphone" class="error"></div>
        <input  class = "regInput" type="tel" id = "phone" name="phone">
    </div>
    <div>
        <label for = "email">Email : </label>
        <div id="erroremail" class="error"></div>
        <input  class = "regInput" type="email" id = "email" name="email">
    </div>
    <fieldset class = "f1">
        <legend>Shipping Address</legend>
        <div>
            <label for="name2">Name: </label>
            <div id="errorname2" class="error"></div>
            <input class = "shipInput" type="text" id="name2" name="name2" minlength="2">
        </div>
        <div>
            <label>Address Line 1
                <input  class = "shipInput" type="text" name="address_line1">
            </label>
        </div>
        <div>
            <label>Address Line 2
                <input class = "shipInput" type="text" name="address_line2">
            </label>
        </div>
    </fieldset>
    <fieldset class = "f2">
        <legend>Description</legend>
        <div>
            <label>Size :</label>
            <p> </p>
            <input type="radio" name="size" value="small"> Small &#40;5X7 in. or comparable&#41;<br>
            <input type="radio" name="size" value="medium"> Medium &#40;16X20 in. or comparable&#41;<br>
            <input type="radio" name="size" value="large"> Larger than 16X20 &#40;please specify in your description&#41;<br>
        </div>
        <div>
            <p></p>
            <label>These are my checkboxes:</label>
            <p></p>
            <input type="checkbox" name="hi1" value="hi1"> here<br>
            <input type="checkbox" name="hi2" value="hi2"> they<br>
            <input type="checkbox" name="hi3" value="hi3"> are<br>
        </div>
        <p></p>
        <div>
            <label>Describe :
                <p></p>
                <textarea class= "describe" name="describe"></textarea>
            </label>
        </div>
        <p></p>
    </fieldset>
<<<<<<< HEAD
    <<p><button class = "submit" onclick="checkName1(),checkName2(),checkPhone(),checkEmail();">Submit</button></p>
</form>
=======
    <p><button class = "submit" onclick="checkName1(),checkName2(),checkPhone(),checkEmail();">Submit</button></p>
<!--/form-->
>>>>>>> c9e0f5a6ba5c6d6c3b115faf2b078a3e569e3c6c
<footer>
    <a>copyright information</a>
    <a href = "http://anderscr.cs321.simmons.edu/contact_me/contact.php" class = "contact">Contact Me</a>
</footer>
<!-- I got the section names, nav, aside, footer, etc from https://www.w3schools.com/html/html_layout.asp -->
</html>
