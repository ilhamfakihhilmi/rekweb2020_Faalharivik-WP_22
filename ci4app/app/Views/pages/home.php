<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<!-- banner -->
<header class="v-header containers">
    <div class="fullscreen-video-wrap">
        <video src="img/intro.mp4" autoplay="true" loop="true"></video>
    </div>
    <div class="header-overlay"></div>
    <div class="header-content">
        <h1>Welcome Everyone</h1>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Id temporibus perferendis necessitatibus numquam amet impedit explicabo? Debitis quasi ullam aperiam!</p>
        <button class="btn" type="submit" value="/pages/about">Find Out More</button>
    </div>
</header>


<!-- About -->
<section class="about">
    <div class="contentBx">
        <h2 class="heading" data-center-center="opacity:1;left:0;" data-0-bottom="opacity:0;left:500px;">About Us
        </h2>
        <p class="text" data-center-center="opacity:1;left:0;" data-0-bottom="opacity:0;left:-500px;">Lorem ipsum
            dolor sit, amet consectetur adipisicing elit. Minus inventore exercitationem
            maiores tempora consequuntur distinctio adipisci officia perspiciatis.<br><br>Lorem ipsum dolor sitamet,
            consectetur adipisicing elit. Magnam
            amet distinctio Eos, soluta fugiat nulla quidem
            numquam laudantium aliquam facere voluptatem nihil temporibus.
            nisi exercitationem debitis voluptatum atque beatae laborum.</p>
    </div>
    <div class="imgBx" data-center-center="opacity:1;left:0;" data-0-bottom="opacity:0;left:200px;"></div>
</section>

<!-- services -->
<section class="services">
    <h2 class="heading" data-center-center="opacity:1;left:0;" data-0-bottom="opacity:0;left:500px;">Our Services
    </h2>
    <p class="text" data-center-center="opacity:1;right:0;" data-0-bottom="opacity:1;right:500px;">Lorem, ipsum
        dolor sit amet consectetur adipisicing elit. Exercitationem error odio cumque sint
        voluptatem
        voluptas doloribus laboriosam consectetur necessitatibus assumenda, ipsum nulla atque quae, illum,
        aspernatur</p>
    <div class="container">
        <div class="serviceBx" data-center-center="opacity:1;left:0;" data-0-bottom="opacity:0;left:-150px;">
            <div>
                <img src="img/icon1.png">
                <h2>Design</h2>
            </div>
        </div>
        <div class="serviceBx" data-center-center="opacity:1;bottom:0;" data-0-bottom="opacity:0;bottom:-150px;">
            <div5 <img src="img/icon2.png">
                <h2>Development</h2>
            </div5>
        </div>
        <div class="serviceBx" data-center-center="opacity:1;right:0;" data-0-bottom="opacity:0;right:-150px;">
            <div>
                <img src="img/icon3.png">
                <h2>Branding/h2>
            </div>
        </div>
    </div>
</section>

<!-- technology -->
<section class="technology">
    <div class="contentBx" data-center-center="opacity:1;left:0;" data-0-bottom="opacity:0;left:-400px;">
        <h2 class="heading">We use cutting edge technology</h2>
        <p class="text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nobis molestias illo consequatur
            voluptate nemo. Suscipit vel provident voluptatibus facilis aliquid! Architecto ipsam optio itaque
            ratione voluptatibus at omnis labore assumenda.</p>
    </div>
    <div class="imgBx" data-center-center="opacity:1;right:0;" data-0-bottom="opacity:0;right:-400px;">
        <img src="img/tech.png" alt="">
    </div>
</section>

<!-- Client -->
<section class="client">
    <h2 class="heading" data-center-center="opacity:1;top:0;" data-0-bottom="opacity:0;top:-100px;">Our Clients</h2>
    <p class="text" data-center-center="opacity:1;bottom:0;" data-0-bottom="opacity:0;bottom:-100px;">Lorem ipsum
        dolor sit amet consectetur, adipisicing elit. Hic ratione vero officiis quia
        voluptatum sit natus minus deserunt suscipit? Vitae vero, cupiditate eveniet quos odio modi? Maxime mollitia
        nobis tenetur!</p>
    <div class="imgBx">
        <img src="img/brand1.png" data-center-center="top:0;" data-0-bottom="top:100px;">
        <img src="img/brand2.png" data-center-center="top:0;" data-0-bottom="top:150px;">
        <img src="img/brand3.png" data-center-center="top:0;" data-0-bottom="top:200px;">
        <img src="img/brand4.png" data-center-center="top:0;" data-0-bottom="top:250px;">
    </div>
</section>

<!-- Testimonials -->
<section class="testimonials">
    <h2 class="heading">What Our Cliant Says</h2>
    <div class="container">
        <div class="contentBx" data-center-center="opacity:1;left:0;" data-0-bottom="opacity:0;left:-400px;">
            <div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus nobis ad qui suscipit
                    vitae reiciendis, molestiae obcaecati adipisci dolorum illo omnis eius, praesentium architecto
                    repudiandae sapiente ab dolor quibusdam veritatis?</p>
                <h3>Someone Famous</h3>
            </div>
        </div>
        <div class="contentBx" data-center-center="opacity:1;right:0;" data-0-bottom="opacity:0;right:-400px;">
            <div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus nobis ad qui suscipit
                    vitae reiciendis, molestiae obcaecati adipisci dolorum illo omnis eius, praesentium architecto
                    repudiandae sapiente ab dolor quibusdam veritatis?</p>
                <h3>Someone Famous</h3>
            </div>
        </div>
    </div>
</section>

<!-- contact -->
<section class="contact">
    <div data-center-center="opacity:1;left:0;" data-0-bottom="opacity:0;left:-400px;">
        <h2 class="heading">Contact Us</h2>
        <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo voluptas officiis rem eaque
            ex?
            Saepe autem nesciunt, soluta modi tempora, excepturi quibusdam sint molestiae error necessitatibus ex
            dolorem repellat aut!</p>
    </div>
</section>
<section class="about">
    <div class="contentBx redbg">
        <div class="form" data-center-center="opacity:1;left:0;" data-0-bottom="opacity:0;left:-400px;">
            <div class="inputBx">
                <input type="text" name="" placeholder="Full Name">
            </div>
            <div class="inputBx">
                <input type="text" name="" placeholder="Email Address">
            </div>
            <div class="inputBx">
                <input type="text" name="" placeholder="Mobile No.">
            </div>
            <div class="inputBx">
                <textarea placeholder="Write your masage here"></textarea>
            </div>
            <div class="inputBx">
                <input type="submit" name="" value="Send">
            </div>
        </div>
    </div>
    <div class="imgBx2"></div>
</section>

<!-- footer -->
<section class="footer">
    <p class="text">Design & Developer By Ilham Fakih Hilmi</p>
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