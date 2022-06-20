<span class="card-title dark4">This Is Dashboard</span>
<div class="section me-page-body">
    <!--Dashboard analytics-->
    <div class="row center m-b-no">
        <div class="col s12 m6 l3 me-sl">
            <div class="card">
                <?php
                $date = date('Y-m-d');
                $totalProduct = mysqli_num_rows(mysqli_query($conn, "select * from product"));
                $totalVisitor = mysqli_num_rows(mysqli_query($conn, "select * from visitor"));
                $totalVisitorToday = mysqli_num_rows(mysqli_query($conn, "select * from visitor where update_at like '$date%'"));
                ?>
                <div class="card-content dash-nav-box">
                    <span class="card-title dash-nav-title">Total Produk</span>
                    <p class="dash-nav-body"><i class="material-icons text-teal">supervisor_account</i><span><?= $totalProduct ?></span></p>
                    <p class="dash-nav-footer">Dari Update Terakhir</p>
                </div>
            </div>
        </div>
        <div class="col s12 m6 l3 me-sl">
            <div class="card">
                <div class="card-content dash-nav-box">
                    <span class="card-title dash-nav-title">Total Order</span>
                    <p class="dash-nav-body"><i class="material-icons text-green">group_work</i><span><?= 0 ?></span></p>
                    <p class="dash-nav-footer">Dari Update Terakhir</p>
                </div>
            </div>
        </div>
        <div class="col s12 m6 l3 me-sl">
            <div class="card">
                <div class="card-content dash-nav-box">
                    <span class="card-title dash-nav-title">Pengunjung Hari ini</span>
                    <p class="dash-nav-body"><i class="material-icons text-pink">monetization_on</i><span><?= $totalVisitorToday ?></span></p>
                    <p class="dash-nav-footer">Dari Update Terakhir</p>
                </div>
            </div>
        </div>
        <div class="col s12 m6 l3 me-sl">
            <div class="card">
                <div class="card-content dash-nav-box">
                    <span class="card-title dash-nav-title">Total Pengujung</span>
                    <p class="dash-nav-body"><i class="material-icons text-deep-purple">shopping_cart</i><span><?= $totalVisitor ?></span></p>
                    <p class="dash-nav-footer">Dari Update Terakhir</p>
                </div>
            </div>
        </div>
    </div>

</div>
</div>