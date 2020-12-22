<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<header>
    <h1 data-text="Colour Type" class="big-title translate" data-speed="0.1">SAMSUNG</h1>
    <p class="big-titlee translate" data-speed="0.1">Selamat datang di website kami </p>
    <img src="img/product.png" class="product translate" data-speed="-0.4" alt="">
    <img src="img/black1.png" class="black1 translate" data-speed="-0.5" alt="">
    <img src="img/kiri.png" class="kiri translate" data-speed="-0.4" alt="">
    <img src="img/kanan.png" class="kanan translate" data-speed="0.4" alt="">

</header>

<section>
    <div class="shadow"></div>

    <div class="container">
        <div class="content opacity">
            <h3 class="title">
                Samsung Z FOLD 2
                <div class="border"></div>
            </h3>
            <p class="text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eaque officiis quos expedita ipsa, a quidem inventore voluptates debitis accusamus tenetur qui et voluptas dicta, culpa earum, doloribus odio consectetur consequuntur soluta quasi nobis! Deserunt voluptatum reiciendis iure expedita sequi quisquam laboriosam temporibus exercitationem.</p>
        </div>

        <div class="imgContainer opacity">


            <div class="slider">
                <div class="slider-items">
                    <div class="item active">
                        <img src="img/slide1.jpg" />
                        <div class="caption">
                            Slide 1
                        </div>
                    </div>
                    <div class="item">
                        <img src="img/slide2.jpg" />
                        <div class="caption">
                            Slide 2
                        </div>
                    </div>
                    <div class="item">
                        <img src="img/slide3.jpg" />
                        <div class="caption">
                            Slide 3
                        </div>
                    </div>

                </div>
                <!-- slider controls -->
                <div class="left-slide">
                    <</div> <div class="right-slide">>
                </div>
                <!-- slider controls -->
            </div>
        </div>
    </div>
</section>
<?= $this->endSection(); ?>