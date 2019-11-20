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
    }
    foreach($rss->channel->image as $item){
        $IMAGEurl = $item->url;
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
