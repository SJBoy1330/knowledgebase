<!-- <input type="search" name="cari" placeholder="Cari product">
<br>

<?php if ($result) : ?>
    <?php foreach ($result as $row) : ?>
        <a href="<?= base_url('detail') ?>">
            <img src="<?= base_url('data/product/' . $row->logo) ?>" alt=""> <br>
            <h3><?= $row->nama; ?></h3> <br>
            <p><?= $row->deskripsi; ?></p> <br>
        </a>
    <?php endforeach; ?>
<?php else : ?>
    TIDAK ADA DATA PRODUCT
<?php endif; ?>


<br> -->

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">
    <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
        <div class="row justify-content-center">
            <div class="col-xl-7 col-lg-9 text-center">
                <h1>Lorem ipsum dolor</h1>
                <h5>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus repellendus ipsum</h5>
            </div>
            <div class="col-md-12 offset-md-12 d-flex justify-content-center align-items-center mt-5">
                <div class="input-group w-75 mb-3" style="height: 50px;">
                    <input type="text" class="form-control shadow-none" placeholder="Apa yang anda butuhkan...">
                    <div class="input-group-append">
                        <button class="btn btn-primary btn-xs btn-search h-100"> <i class="fa-light fa-magnifying-glass"></i></button>
                    </div>
                </div>
            </div>
        </div>

        <div class="row icon-boxes">
            <a href="<?= base_url('bantuan') ?>" class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0 text-center" data-aos="zoom-in" data-aos-delay="200">
                <div class="icon-box">
                    <div class="icon"><i class="ri-stack-line"></i></div>
                    <h4 class="title">Lorem Ipsum</h4>
                    <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
                </div>
            </a>

            <a href="<?= base_url('bantuan') ?>" class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0 text-center" data-aos="zoom-in" data-aos-delay="300">
                <div class="icon-box">
                    <div class="icon"><i class="ri-palette-line"></i></div>
                    <h4 class="title">Sed ut perspiciatis</h4>
                    <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
                </div>
            </a>

            <a href="<?= base_url('bantuan') ?>" class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0 text-center" data-aos="zoom-in" data-aos-delay="400">
                <div class="icon-box">
                    <div class="icon"><i class="ri-command-line"></i></div>
                    <h4 class="title">Magni Dolores</h4>
                    <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
                </div>
            </a>

            <a href="<?= base_url('bantuan') ?>" class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0 text-center" data-aos="zoom-in" data-aos-delay="500">
                <div class="icon-box">
                    <div class="icon"><i class="ri-fingerprint-line"></i></div>
                    <h4 class="title">Nemo Enim</h4>
                    <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
                </div>
            </a>

        </div>
    </div>
</section><!-- End Hero -->