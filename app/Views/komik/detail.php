<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container con_detail ">

    <section class="product-detail">
        <div class="imagery">
            <img src="/img/<?= $komik['sampul']; ?>" class="card-img" alt="...">
        </div>
        <div class="detail">
            <h1><?= $komik['judul']; ?></h1>
            <h2>Harga</h2>
            <h3></b><?= $komik['penerbit']; ?></h3>
            <div class="options">
                <h2>Spesifikasi</h2>
                <h2><?= (old('penulis')) ? old('penulis') : $komik['penulis']; ?></h2>
                <!-- <div class="capacity btn_grid">
                    <div class="btn_wrap">
                        <button class="size selected">64GB</button>
                    </div>
                    <div class="btn_wrap">
                        <button class="size">128GB</button>
                    </div>
                </div> -->
                <div class="colours btn_grid">
                    <!-- <div class="btn_wrap">
                        <button type="button" class="colour blue selected" data-name="blue" data-colour="#2484E4">
                            Blue
                        </button>
                    </div>
                    <div class="btn_wrap">
                        <button type="button" class="colour red" data-name="red" data-colour="#AF1E2D">
                            Red
                        </button>
                    </div> -->
                    <form action="/komik/<?= $komik['id']; ?>" method="post" class="d-inline">
                        <?= csrf_field(); ?>
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit" class="btn_delete" onclick="return confirm('apakah anda yakin?');">Delete</button>
                    </form>

                    <form action="/komik/edit/<?= $komik['slug']; ?>" class="d-inline">
                    <?= csrf_field(); ?>
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit" class="btn_edit">Edit</button>
                    </form>
        </div>


        
</div>
<?= $this->endSection(); ?>