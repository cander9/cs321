<?php
function feed($feedURL){
    $i = 0; // initiate counter to limit the amount of articles to return
    $url = $feedURL; // url to parse
    $rss = simplexml_load_file($url); // the XML parser
    // RSS items loop
    foreach($rss->channel->item as $item) {  //loop through each item
        $link = $item->link;  //extract the link
        $title = $item->title;  //extract the title
        $date = $item->pubDate;  //extract the date
        $description = strip_tags($item->description);  //extract description and strip HTML
        if (strlen($description) > 200) {
            // truncate string if greater than 200 characters
            $stringCut = substr($description, 0, 200);
            // make sure it ends in a complete word and add ... at the end
            $description = substr($stringCut, 0, strrpos($stringCut, ' ')).'...';
        }
        if ($i < 4) { // parse only 4 items
            echo '
                        <a class="list-group-item" href="'.$link.'" target="_blank">
                            <h5 class="list-group-item-heading">'.$title.'<br><small>'.$date.'</small></h5>
                            <p class="list-group-item-text">'.$description.'</p>
                        </a>
                        ';
        }
        $i++;
    }
}
?>

<!doctype html>

<html lang="en">
<?php include('header.php'); ?>
<body>
<div>
    <?php feed("https://ptwc.weather.gov/feeds/ptwc_rss_hawaii.xml") ?>
</div>
<?php include('footer.php'); ?>
</body>
</html>
