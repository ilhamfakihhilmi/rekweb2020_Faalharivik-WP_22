<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<body bod_prod1>


    <header head_prod>
        <h1 data-text="Colour Type" class="big-title translate" data-speed="0.1"></h1>
        <img src="/img/samsung_logo.png" class="big-samsung translate" data-speed="-0.4" alt="">
        <p class="big-titlee translate" data-speed="0.1">Selamat datang di website kami &#9829 &#9829 &#128513 </p>
        <a href="/komik" class="btn_produk_1">More!</a>
        <img src="/img/product.png" class="product_sam translate" data-speed="-0.4" alt="">
        <img src="/img/black1.png" class="black1 translate" data-speed="-0.5" alt="">
        <img src="/img/kiri.png" class="kiri translate" data-speed="-0.4" alt="">
        <img src="/img/kanan.png" class="kanan translate" data-speed="0.4" alt="">
    </header>

    <section>
        <div class="shadow"></div>

        <div class="container">
            <div class="content opacity">
                <h3 class="title">
                    Samsung Z FOLD 2
                    <div class="border"></div>
                </h3>
                <p class="text translate" data-speed="0.1">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eaque officiis quos expedita ipsa, a quidem inventore voluptates debitis accusamus tenetur qui et voluptas dicta, culpa earum, doloribus odio consectetur consequuntur soluta quasi nobis! Deserunt voluptatum reiciendis iure expedita sequi quisquam laboriosam temporibus exercitationem.</p>
            </div>
            <div class="imgContainer opacity">


                <div class="slider">
                    <div class="slider-items">
                        <div class="item active">
                            <img src="/img/slide1.jpg" />
                            <div class="caption">
                                Teknowlogue
                            </div>
                        </div>
                        <div class="item">
                            <img src="/img/slide2.jpg" />
                            <div class="caption">
                                Teknowlogue
                            </div>
                        </div>
                        <div class="item">
                            <img src="/img/slide3.jpg" />
                            <div class="caption">
                                Teknowlogue
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
</body>
<?= $this->endSection(); ?>