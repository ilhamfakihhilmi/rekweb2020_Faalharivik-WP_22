<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<?php
function get_CURL($url)
{
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    $result = curl_exec($curl);
    curl_close($curl);

    return  json_decode($result, true);
}

$result = get_CURL('https://www.googleapis.com/youtube/v3/channels?part=snippet,statistics&id=UC1dI4tO13ApuSX0QeX8pHng&key=AIzaSyBh-Eh5eK6F8ozKqRn6GxljhgS7V_3cxtQ');

$youtubeProfilePic = $result['items'][0]['snippet']['thumbnails']['medium']['url'];
$channelName = $result['items'][0]['snippet']['title'];
$description = $result['items'][0]['snippet']['description'];
$subscriber = $result['items'][0]['statistics']['subscriberCount'];
?>

<!-- banner -->

    <header class="v-header containers">
        <div class="fullscreen-video-wrap">
            <video src="img/intro.mp4" autoplay="true" loop="true"></video>
        </div>
        <div class="header-overlay"></div>
        <div class="header-content">
            <h1>Welcome To Faalharivik-WP</h1>
            <p>Find your favorite gadget!</p>
        </div>
    </header>


<!-- About -->
<section class="about">
    <div class="contentBx">
        <h2 class="heading" data-center-center="opacity:1;left:0;" data-0-bottom="opacity:0;left:500px;">About Us
        </h2>
        <p class="text" data-center-center="opacity:1;left:0;" data-0-bottom="opacity:0;left:-500px;">Faalharivik-WP is a website for people who want a new gadget but didn't know the difference a gadget between each other<br><br>You can search the products what you want and read carefully the details, so you can find your favorite gadget</p>
    </div>
    <div class="imgBx" data-center-center="opacity:1;left:0;" data-0-bottom="opacity:0;left:200px;"></div>
</section>


<!-- Social Media -->
<section class="testimonials">
    <h2 class="heading">Social Media</h2>
    <div class="container">
        <div class="contentBx" data-center-center="opacity:1;left:0;" data-0-bottom="opacity:0;left:-400px;">
            <div>
                <h2>YouTube</h2>
                <img src="<?= $youtubeProfilePic ?>" width="50" class="rounded-circle img-thumbnail">
                <h5><?= $channelName; ?></h5>
                <p><?= $description ?></p>
                <p><?= $subscriber; ?> Subscribers</p>
            </div>
        </div>
        <div class="contentBx" data-center-center="opacity:1;right:0;" data-0-bottom="opacity:0;right:-400px;">
            <div>
                <p>The social media on the side is a YouTube channel that reviews the latest gadget products, if the information here is incomplete then you can watch a videos from that channel</p>
            </div>
        </div>
    </div>
</section>


<!-- footer -->
<section class="footer">
    <p class="text">Design & Developer By Faalharivik-WP</p>
    <ul>
        <p class="text">Follow Us On : </p>
        <li><a href="#"><img src="img/facebook.png"></a></li>
        <li><a href="#"><img src="img/twitter.png"></a></li>
        <li><a href="#"><img src="/linkedin.png"></a></li>
    </ul>
</section>



<script src="libraries/jquary/jquery-3.5.1.min.js"></script>
<script src="libraries/bootstrap/js/bootstrap.js"></script>
<script src="libraries/retina/retina.min.js"></script>
<script src="libraries/xzoom/xzoom.min.js"></script>
<script src="libraries/skrollr/skrollr.js"></script>
<script type="text/javascript">
    var s = skrollr.init();
</script>
<script>
    $(document).ready(function() {
        $('.xzoom, .xzoom-gallery').xzoom({
            zoomWidth: 500,
            title: false,
            tint: '#333',
            xoffset: 15
        });
    });
</script>
<?= $this->endSection(); ?>