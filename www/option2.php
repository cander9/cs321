<?php
function feed($feedURL){
    $i = 0;
    $url = $feedURL;
    $rss = simplexml_load_file($url);
    // RSS items loop
    foreach($rss->channel->item as $item) {
        $link = $item->link;
        $title = $item->title;
        $date = $item->pubDate;
        $description = $item->description;
        echo '
<a class="list-group-item" href="'.$link.'" target="_blank">
    <h5 class="list-group-item-heading">'.$title.'<br><small>'.$date.'</small></h5>
    <p class="list-group-item-text">'.$description.'</p>
</a>
        ';
    }
}
?>

<!doctype html>

<html lang="en">
<?php include('header.php'); ?>
<body>
<div>
    <?php feed("https://ptwc.weather.gov/feeds/ptwc_rss_hawaii.xml") ?>
    <img src="https://ptwc.weather.gov/ptwc/images/npacific_map.jpg" alt=map">
</div> <!-- However Many I need --><!--Code Source:  https://www.w3schools.com/howto/howto_css_button_on_image.asp    eventually I want to be able to click on the img rather than have a separate button-->
<?php include('footer.php'); ?>
</body>
</html>
