<div class="main-container">
    <section class="switchable feature-large">
        <div class="container">
            <div class="row justify-content-around">
                <div class="col-md-6">
                    <img alt="Image" class="border--round" src="img/profile/owner4.png" />
                </div>
                <div class="col-md-6 col-lg-5">
                    <div class="switchable__text">
                        <div class="text-block">
                            <h2>Irma Russanti, S.Pd., M.Ds.</h2>
                            <span>Founder &amp; Designer</span>
                        </div>
                        <p class="lead">
                            Dosen D4 Tata Busana Program Vokasi Universitas Negeri Surabaya, Menyelesaikan Pendidikan S1 Tata Busana Tahun 1998 di IKIP Surabaya dan S2 Desain tahun 2007 di ITB saat ini sedang menempuh Pendidikan S3 Vokasi di Unesa. Menjadi Dosen di Unesa sejak tahun 2000 hingga kini. Aktif dalam Tridarma Perguruan Tinggi, salah satunya adalah penelitian tentang BANESA.
                        </p>
                        <ul class="social-list list-inline list--hover">
                            <li>
                                <a href="https://www.youtube.com/channel/UCzmO-X9bD_lZsrtwtE4Y3ag/featured">
                                    <i class="socicon socicon-youtube icon icon--xs"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.facebook.com/irma.hermawan">
                                    <i class="socicon socicon-facebook icon icon--xs"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/rosieaja/">
                                    <i class="socicon socicon-instagram icon icon--xs"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--end of row-->
        </div>
        <!--end of container-->
    </section>
    <section class="bg--secondary">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Media</h2>
                    <div class="slider" data-arrows="false" data-paging="true">
                        <ul class="slides">
                            <?php
                            $getMedia = mysqli_query($conn, "SELECT * FROM media ORDER BY media_seen DESC");
                            while ($r = mysqli_fetch_array($getMedia)) {
                                echo " 
                                <li class='col-md-4 col-12'>
                                    <div class='feature feature-1'>
                                        <img alt='Image' src='img/media/" . $r['media_thumb'] . "' />
                                        <div class='feature__body boxed boxed--border'>
                                            <h5>" . $r['media_title'] . "</h5>
                                            <p style='overflow: hidden;white-space: nowrap;text-overflow: ellipsis;'>
                                                " . $r['media_desc'] . "
                                            </p>
                                            <a href='redirect.php?id=" . $r['media_id'] . "&link=" . $r["media_link"] . "'>
                                                Learn More
                                            </a>
                                        </div>
                                    </div>
                                    <!--end feature-->
                                </li>
                            ";
                            } ?>
                        </ul>
                    </div>
                    <!--end of row-->
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
                    <div class="masonry masonry-blog-magazine">
                        <div class="masonry__container row">
                            <div class="masonry__item col-md-6"></div>
                            <!--end item-->
                            <div class="masonry__item col-md-12 col-lg-6 col-12" data-masonry-filter="Inspiration">
                                <a class="block" href="#">
                                    <article class="imagebg border--round height--tall" data-scrim-bottom="8">
                                        <div class="background-image-holder">
                                            <img alt="background" src="img/legal/legal1.jpg" />
                                        </div>
                                        <div class="article__title">
                                            <h4>Sejak tahun 2016 Banesa telah memperoleh Haki dan paten tahun 2018 tahun 2021 merek telah terdaftar di Dirjen Haki</h4>
                                        </div>
                                    </article>
                                </a>
                            </div>
                            <!--end item-->
                            <div class="masonry__item col-lg-6 col-md-12 col-12">
                                <div class="boxed boxed--lg boxed--border bg--secondary text-center masonry__promo height--tall">
                                    <div class="pos-vertical-center">
                                        <h3>SERTIFIKAT PATEN</h3>
                                        <p>Banesa merupakan produk unggulan hasil penelitian dosen Universitas Negeri Surabaya telah diteliti sejak tahun 2014 dan terus dikembangkan hingga saat ini. Sejak tahun 2016 Banesa telah memperoleh Haki dan paten tahun 2018 tahun 2021 merek telah terdaftar di Dirjen Haki. Pengembangan produk Banesa meliputi motif, teknik dan pewarnanya baik pewarna alam dan pewarna sintetis. Semangat Banesa untuk mengembangan kain tradisional Indonesa agar makin memperkaya budaya Bangsa. Bermitra dengan UKM Batik di Indonesia menjadikan Banesa siap berkompetisi baik skala Nasional dan Internasional.</p>
                                    </div>
                                </div>
                            </div>
                            <!--end item-->
                        </div>
                        <!--end masonry-->
                    </div>
                </div>
                <!--end of row-->
            </div>
            <!--end of container-->
    </section>
    <section class="cover height-90 imagebg switchable switchable--switch" data-overlay="1">
        <div class="background-image-holder">
            <img alt="background" src="img/conference-1.jpg" />
        </div>
        <div class="container pos-vertical-center">
            <div class="row justify-content-around">
                <div class="col-lg-5 col-md-7">
                    <div class="switchable__text">
                        <h1>
                            Channel Youtube
                        </h1>
                        <p class="lead">
                            Silakan cari tahu informasi lebih banyak melalui channel YouTube
                        </p>
                        <a class="btn bg--pinterest type--uppercase" href="https://www.youtube.com/channel/UCzmO-X9bD_lZsrtwtE4Y3ag">
                            <span class="btn__text">
                                Subscribe
                            </span>
                        </a>
                    </div>
                </div>

                <div class="col-lg-6 col-md-4 col-12">
                    <div class="video-cover border--round box-shadow-wide">
                        <div class="background-image-holder">
                            <img alt="image" src="img/bg/embed2.png" />
                        </div>
                        <div class="video-play-icon"></div>
                        <iframe data-src="https://www.youtube.com/embed/iys7_sRloaE?autoplay=1" allowfullscreen="allowfullscreen"></iframe>
                    </div>
                    <!--end video cover-->
                </div>
            </div>
            <!--end of row-->
        </div>
        <!--end of container-->
    </section>

</div>