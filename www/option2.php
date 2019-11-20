<?php
function feed($feedURL){
    $i = 0;
    $url = $feedURL;
    $rss = simplexml_load_file($url);
    // RSS items loop
    foreach($rss->channel->item as $item) {  //loop through each item
        $link = $item->link;  //extract the link
        $title = $item->title;  //extract the title
        $date = $item->pubDate;  //extract the date
        $description = strip_tags($item->description);  //extract description and strip HTML
        echo '
        <a class="list-group-item" href="'.$link.'" target="_blank">
             <h5 class="list-group-item-heading">'.$title.'<br><small>'.$date.'</small></h5>
             <p class="list-group-item-text">'.$description.'</p>
        </a>
        ';
    }

    foreach($rss->channel->image as $item){
        $IMAGEurl = $item->url;
        echo '
        <a <img src="'.$IMAGEurl.'" alt="map"/>
        </a>
        ';
    }
}
?>

<!doctype html>

<html lang="en">
<?php include('header.php'); ?>
<body>
<?php feed("https://ptwc.weather.gov/feeds/ptwc_rss_hawaii.xml") ?>
<?php include('footer.php'); ?>
</body>
</html>
