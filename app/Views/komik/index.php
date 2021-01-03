<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>


<?php if (session()->getFlashdata('pesan')) : ?>
    <div class="alert alert-info" role="alert">
        <?= session()->getFlashdata('pesan'); ?>
    </div>
<?php endif; ?>
<a href="/komik/create" class="btn_tambah">Tambah Data</a>


<div class="search_product">
    <div class="row">
        <div class="col">
            <form action="" method="post">
                <div class="input-group mb-4">
                    <input type="text" class="form-control" placeholder="Apa yang anda cari?" name="keyword">
                    <div class="input-group-append">
                        <button class="btn_search btn-outline-secondary" type="submit" name="submit">Search</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
<div class="row">
    <div class="col">
        <table class="table table-striped">
            <thead>
                <div class="row pt-5 mb-0">
                    <?php $i = 1; ?>
                    <?php foreach ($komik as $k) : ?>
                        <div class="produk_1 col-md mb-4">
                            <div class="box">
                                <div class="slide-img">

                                    <body class="bod_daf">
                                        <img src="/img/<?= $k['sampul']; ?>" alt="" class="sampul" >
                                        <div class="overlay">
                                            <a href="/komik/<?= $k['slug']; ?>" class="btn_detail">Detail</a>
                                        </div>
                                </div>
                                <div class="detail_box_prod">
                                    <div class="type_detail">
                                        <h5><?= $k['judul']; ?> </h5>
                                        <h6><?= $k['penerbit']; ?></h6>
                                        </body>
                                    </div>
                                </div>
                            </div>
                        </div>









                        </section>
                    <?php endforeach; ?>
                    <?= $this->endSection(); ?>