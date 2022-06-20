<aside id="left-sidebar-nav">
    <div id="left-sidebar" class="side-nav fixed">
        <ul class="leftside-navigation">
            <?php function active($data1, $data2)
            {
                if ($data1 == $data2) return "active";
            }
            ?>
            <li class="navigation">Navigation </li>
            <li><a href="index.php" class="waves-effect waves-default <?php if (!isset($_GET['page'])) echo "active";  ?>"><i class="material-icons left-icon">dashboard</i>Dashboard</a></li>
            <li><a href="index.php?page=user" class="waves-effect waves-default <?= active($_GET['page'], 'user')  ?>"><i class="material-icons left-icon">people</i>User</a></li>
            <li><a href="index.php?page=product" class="waves-effect waves-default <?= active($_GET['page'], 'product')  ?>"><i class="material-icons left-icon">devices</i>Product</a></li>
            <li><a href="index.php?page=category" class="waves-effect waves-default <?= active($_GET['page'], 'category') ?>"><i class="material-icons left-icon">Class</i>Category</a></li>
            <li><a href="index.php?page=media" class="waves-effect waves-default <?= active($_GET['page'], 'media') ?>"><i class="material-icons left-icon">devices</i>Media</a></li>
            <li><a href="logout.php" class="waves-effect waves-default <?php  ?> "><i class="material-icons left-icon">logout</i>Logout</a></li>
            <li><a href="index.php?page=reset" onclick='return confirm("Yakin ingin melakukan Reset?, Tindakan ini akan menghapus statistik kunjungan pada web dan setiap produk")' class="waves-effect waves-default <?= active($_GET['page'], 'reset') ?>"><i class="material-icons left-icon">SettingsPowerTwoTone</i>Reset</a></li>
        </ul>
    </div>
</aside>