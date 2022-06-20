<div class="main-container">
    <section class="switchable switchable--switch space--xs">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="height-50 imagebg border--round" data-overlay="2">
                        <div class="background-image-holder">
                            <img alt="background" src="img/bg/bgmain.jpg" />
                        </div>
                        <div class="pos-vertical-center col-md-6 col-lg-5 pl-5">
                            <h2>BANESA.</h2>
                            <p class="lead">
                                Halo Batik Lovers…
                                </br>
                                BANESA kepanjangan dari Batik Tanah Unesa merupakan batik yang memiliki keunikan dan kekhasan menggunakan pewarna alam dari Tanah menjadikan Banesa berbeda dengan batik lainnya. <a href="index.php?page=about">Baca Selengkapnya</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!--end of row-->
        </div>
        <!--end of container-->
    </section>
    <section class="space--sm">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="masonry">
                        <div class="masonry-filter-container row justify-content-center align-items-center">
                            <span>Category:</span>
                            <div class="masonry-filter-holder">
                                <div class="masonry__filters" data-filter-all-text="All Categories"></div>
                            </div>
                        </div>

                        <div class="masonry__container row">
                            <div class="masonry__item col-md-6 col-lg-3"></div>
                            <?php
                            $getProduk = mysqli_query($conn, "SELECT * FROM product ORDER BY product_seen DESC LIMIT 12");
                            while ($r = mysqli_fetch_array($getProduk)) {
                            ?>
                                <div class="masonry__item col-md-6 col-lg-3" data-masonry-filter="<?= productCategory($r['product_category']) ?>">
                                    <div class="product">
                                        <a href="index.php?page=product&act=detail&id=<?= $r['product_id'] ?>">
                                            <img alt="Image" src="img/product/<?= $r['product_img'] ?>" />
                                        </a>
                                        <a class="block" href="index.php?page=product&act=detail&id=<?= $r['product_id'] ?>">
                                            <div>
                                                <h5 style="overflow: hidden;white-space: nowrap;text-overflow: ellipsis;">
                                                    <?= $r['product_name'] ?></h5>
                                                <p style="overflow: hidden;white-space: nowrap;text-overflow: ellipsis;">
                                                    <?= $r['product_desc'] ?>
                                                </p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <!--end item-->
                            <?php } ?>
                        </div>
                        <!--end masonry container-->
                    </div>
                    <!--end masonry-->
                </div>
            </div>
            <!--end of row-->
        </div>
        <!--end of container-->


        <div class="tab__content">
            <div class="container switchable switchable--switch">
                <div class="row">
                    <div class="col-md-7">
                        <img alt="Image" src="img/product/15.jpeg" />
                    </div>
                    <div class="col-md-5 col-lg-4">
                        <div class="mt--1">
                            <h3>Ekplorasi Batik Tanah</h3>
                            <p class="lead">
                                BANESA kepanjangan dari Batik Tanah Unesa merupakan produk unggulan hasil penelitian dosen Universitas Negeri Surabaya pewarnaan dengan tanah menjadi keunikan dan kekhasannya telah diteliti sejak tahun 2014 hingga saat ini diproduksi untuk komersialisasi.
                            </p>
                            <hr class="short" />
                            <p>
                                BANESA kepanjangan dari Batik Tanah Unesa merupakan produk unggulan hasil penelitian dosen Universitas Negeri Surabaya pewarnaan dengan tanah menjadi keunikan dan kekhasannya telah diteliti sejak tahun 2014 hingga saat ini diproduksi untuk komersialisasi.
                            </p>
                        </div>
                    </div>
                </div>
                <!--end of row-->
            </div>
            <!--end of container-->
        </div>
    </section>
    <section class="cover text-center bg--secondary">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6">
                    <h1> Terima Kasih atas kepercayaan anda</h1>
                    <p class="lead">
                        Tak lupa kami ucapakan selamat menggunakan BANESA, batik yang dibuat dengan perpaduan cinta dan seni. BANESA melestarikan Budaya tak Tergerus oleh Zaman.
                    </p>

                </div>
                <div class="col-md-12">
                    <div class="triptych border--round">
                        <img alt="Image" src="img/product/16.jpeg" />
                        <img alt="Image" src="img/product/17.jpeg" />
                        <img alt="Image" src="img/product/18.jpeg" />
                    </div>
                </div>
            </div>
            <!--end of row-->
        </div>
        <!--end of container-->
    </section>

    <section>
        <div class="container">
            <div class="row justify-content-around">
                <div class="col-md-7 col-lg-6">
                    <div class="slider border--round boxed--border" data-paging="true" data-arrows="true">
                        <ul class="slides">
                            <?php
                            $getImg = mysqli_query($conn, "SELECT * FROM product ORDER BY product_seen DESC LIMIT 12");
                            while ($r = mysqli_fetch_array($getImg)) {
                                echo " 
                                <li>
                                    <img alt='Image' src='img/product/$r[product_img]' />
                                </li>
                            ";
                            } ?>


                        </ul>
                    </div>
                    <!--end slider-->
                </div>
                <div class="col-md-5 col-lg-4">
                    <ul class="accordion accordion-2 accordion--oneopen">
                        <li class="active">
                            <div class="accordion__title">
                                <span class="h5">Latar Belakang</span>
                            </div>
                            <div class="accordion__content">
                                <p class="lead">
                                    BANESA kepanjangan dari Batik Tanah Unesa merupakan produk unggulan hasil penelitian dosen Universitas Negeri Surabaya pewarnaan dengan tanah menjadi keunikan dan kekhasannya telah diteliti sejak tahun 2014 hingga saat ini diproduksi untuk komersialisasi.
                                </p>

                            </div>
                        </li>
                        <li class="">
                            <div class="accordion__title">
                                <span class="h5">Sejarah</span>
                            </div>
                            <div class="accordion__content">

                                <p class="lead">
                                    BANESA kepanjangan dari Batik Tanah Unesa merupakan produk unggulan hasil penelitian dosen Universitas Negeri Surabaya pewarnaan dengan tanah menjadi keunikan dan kekhasannya telah diteliti sejak tahun 2014 hingga saat ini diproduksi untuk komersialisasi.
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class="accordion__title">
                                <span class="h5">Pencapaian</span>
                            </div>
                            <div class="accordion__content">
                                <p class="lead">
                                    BANESA kepanjangan dari Batik Tanah Unesa merupakan produk unggulan hasil penelitian dosen Universitas Negeri Surabaya pewarnaan dengan tanah menjadi keunikan dan kekhasannya telah diteliti sejak tahun 2014 hingga saat ini diproduksi untuk komersialisasi
                                </p>
                            </div>
                        </li>
                    </ul>
                    <!--end accordion-->
                </div>
            </div>
            <!--end of row-->
        </div>
        <!--end of container-->
    </section>
    <section class="cover unpad--bottom switchable switchable--switch bg--secondary text-center-xs">
        <div class="container">
            <div class="row align-items-center justify-content-around">
                <div class="col-md-6 col-lg-7 mt-0">
                    <h1>
                        Irma Russanti, S.Pd., M.Ds
                    </h1>
                    <p class="lead">
                        Dosen D4 Tata Busana Program Vokasi Universitas Negeri Surabaya . . .
                        <span class="block type--fine-print">
                            <a href="index.php?page=about">Baca Selengkapnya</a>
                        </span>
                    </p>
                </div>
                <div class="col-md-6">
                    <img alt="Image" src="img/profile/owner.png" />
                </div>
            </div>
            <!--end of row-->
        </div>
        <!--end of container-->
    </section>
</div>