<!doctype html>
<html lang = "en">
<head>

    <!-- Author:  Caitlin Anderson
         Purpose: CS321 Assignment 2 -->

    <link rel="stylesheet" href="/css/contactStyle.css" />
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700i&display=swap" rel="stylesheet">
    <script src="/javascript/forms.js"></script>
</head>
<body>
<nav class="header">
    <a><h2>Name</h2></a>
    <ul class="hov">
        <li class=crumb><a href = "http://anderscr.cs321.simmons.edu/">Gallery 1</a></li>
        <li class=crumb><a href = "gallery 2">Gallery 2</a></li>
        <li class=crumb><a href = "shop">Shop</a></li>
        <li class=crumb><a href = "bio">Bio</a></li>
    </ul>
    <!-- source:  https://developer.mozilla.org/enUS/docs/Web/HTML/Element/nav -->
</nav>   <!-- I want the nav as a seperate column to the left -->
<?php
// define variables and set to empty values
$name1ERR = $phoneERR = $emailERR = $name2ERR = $address_line1ERR = $sizeERR = $checkERR = "";
$name1 = $phone = $email = $name2 = $address_line1 = $address_line2 = $size = "";
$check = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name1"])) {
        $name1ERR = "Name is required";
    } else {
        $name1 = test_input($_POST["name1"]);
        $name1length= strlen($name1);
        if ($name1length<3){
            $name1ERR = "Name must be at least 3 letters";
        }
        else if (!preg_match("/^[a-zA-Z ]*$/",$name1)) {
            $name1ERR = "Only letters and white space allowed in name";
        }
    }

    if (empty($_POST["phone"])) {
        $phoneERR = "Phone number is required";
    } else {
        $phone = test_input($_POST["phone"]);
        if (!preg_match("/^\d{3}-\d{3}-\d{4}$/",$phone)) {
            $phoneERR = "Phone number must be in ###-###-#### format and include only numbers and dashes";
        }
    }


    if (empty($_POST["email"])) {
        $emailERR = "Email is required";
    } else {
        $email = test_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailERR = "Invalid email format";
        }
    }

    if (empty($_POST["name2"])) {
        $name2ERR = "Name is required";
        } else {
        $name2 = test_input($_POST["name2"]);
        $name2length= strlen($name2);
        if ($name2length<3){
            $name2ERR = "Name must be at least 3 letters";
        }
        else if (!preg_match("/^[a-zA-Z ]*$/",$name2)) {
            $name2ERR = "Only letters and white space allowed in name";
        }
    }

    if (empty($_POST["address_line1"])) {
        $address_line1ERR = "Address is required";
    } else {
        $address_line1 = test_input($_POST["address_line1"]);
    }

    if (empty($_POST["address_line2"])) {
        $address_line2 = "";
    } else {
        $address_line2 = test_input($_POST["address_line2"]);
    }

    if (empty($_POST["size"])) {
        $sizeERR = "Size is required";
    } else {
        $size = test_input($_POST["size"]);
    }
    if (isset($_POST['submit'])) {
        $check = $_POST['check'];
        if (count($_POST['check']) < 2) {
            $checkERR = "Select at least two checkboxes";
        }
    }
}


function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST"> <!-- https://www.w3schools.com/php/php_form_validation.asp -->
    <div>
        <label for="name1">Name : </label>
        <div id="errorname1" class="error"><?php echo $name1ERR;?></div>
        <input  class="regInput" type="text" id="name1" name="name1" minlength="2" value="<?php echo $name1;?>">
    </div>
    <div>
        <label for = "phone">Phone : </label>
        <div id="errorphone" class="error"><?php echo $phoneERR;?></div>
        <input  class="regInput" type="tel" id = "phone" name="phone" value="<?php echo $phone;?>">
    </div>
    <div>
        <label for = "email">Email : </label>
        <div id="erroremail" class="error"><?php echo $emailERR;?></div>
        <input  class="regInput" type="email" id = "email" name="email" value="<?php echo $email;?>">
    </div>
    <fieldset class="f1">
        <legend>Shipping Address</legend>
        <div>
            <label for="name2">Name: </label>
            <div id="errorname2" class="error"><?php echo $name2ERR;?></div>
            <input class="shipInput" type="text" id="name2" name="name2" minlength="2" value="<?php echo $name2;?>">
        </div>
        <div>
            <label>Address Line 1
                <input  class="shipInput" type="text" name="address_line1" value="<?php echo $address_line1;?>">
            </label>
            <div id="erroradressline1" class="error"><?php echo $address_line1ERR;?></div>
        </div>
        <div>
            <label>Address Line 2
                <input class="shipInput" type="text" name="address_line2" value="<?php echo $address_line2;?>">
            </label>
        </div>
    </fieldset>
    <fieldset class="f2">
        <legend>Description</legend>
        <div>
            <label>Size :</label>
            <div id="errorradio" class="error"><?php echo $sizeERR;?></div>
            <input id="radio1" type="radio" name="size" <?php if (isset($size) && $size=="small") echo "checked";?> value="small"> Small &#40;5X7 in. or comparable&#41;<br>
            <input id="radio2" type="radio" name="size" <?php if (isset($size) && $size=="medium") echo "checked";?> value="medium"> Medium &#40;16X20 in. or comparable&#41;<br>
            <input id="radio3" type="radio" name="size" <?php if (isset($size) && $size=="large") echo "checked";?> value="large"> Larger than 16X20 &#40;please specify in your description&#41;<br>
        </div>
        <div>
            <p></p>
            <label>These are my checkboxes:</label>
            <p></p>
            <div id="errorcheck" class="error"><?php echo "<p class='note'>". $checkERR;?></div>
            <input id="check1" type="checkbox" name="check[]" <?php if(isset($_POST['submit']) && isset($_POST['check'][0])) echo "checked" ?> value="here"> here<br>
            <input id="check2" type="checkbox" name="check[]" <?php if(isset($_POST['submit']) && isset($_POST['check'][1])) echo "checked" ?> value="they"> they<br>
            <input id="check3" type="checkbox" name="check[]" <?php if(isset($_POST['submit']) && isset($_POST['check'][2])) echo "checked" ?> value="are"> are<br>
        </div>
        <p></p>
        <!--<div>
            <label>Describe :
                <p></p>
                <textarea class= "describe" name="describe"></textarea>
            </label>
        </div>-->
        <p></p>
    </fieldset>
    <p><input type="submit" class="submit" value="Submit"/></p> <!--onclick="checkAll();"-->
</form>
<footer>
    <a>copyright information</a>
    <a href = "http://anderscr.cs321.simmons.edu/contact_me/contact.php" class="contact">Contact Me</a>
</footer>
<!-- I got the section names, nav, aside, footer, etc from https://www.w3schools.com/html/html_layout.asp -->
</body>
</html>
