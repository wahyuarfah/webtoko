<?php if (!isset($_GET['act'])) { ?>

    <div class="fixed-action-btn" id="" style="display:true">
        <a class="btn-floating btn-large" href="index.php?page=user&act=add">
            <i class="large material-icons">add</i>
        </a>
    </div>

    <span class="card-title dark4">User</span>
    <table class="responsive-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Timestamp</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $data = getTable("users");
            $no = 1;
            while ($i = mysqli_fetch_array($data)) {
                echo "<tr>
                    <td>$i[users_id]</td>
                    <td>$i[users_name]</td>
                    <td>$i[users_email]</td>
                    <td>$i[update_at]</td>
                    <td>
                    <a href='index.php?page=user&act=edit&id=$i[users_id]' class='btn'>Edit</a>
                    <a href='index.php?page=user&act=delete&id=$i[users_id]' onclick=\"return confirm('Are you sure?')\" class='btn'>Delete</a>
                    </td></tr>";
            }
            ?>
        </tbody>
    </table>
    </div>
<?php
} elseif ($_GET['act'] == 'delete') {
    if (deleteItem($_GET['id'], "users")) {
        echo "<script>window.alert('Delete Success');
    window.location='index.php?page=user'</script>";
    } else echo "<script>window.alert('Delete Failed');
        window.location='index.php?page=user'</script>";
} elseif ($_GET['act'] == 'add') {
    if (isset($_POST['submit'])) {
        addUser($_POST['name'], $_POST['email'], $_POST['password']);
    }
?>
    <span class="card-title">Add User</span>
    <div class="row">
        <form action='' method="POST" class="col s12 no-padding">
            <div class="row no-margin">
                <div class="input-field col s12">
                    <input id="name" name="name" type="text" required>
                    <label for="name" class="">Name</label>
                </div>
                <div class="input-field col s12">
                    <input id="email" name="email" type="email" required>
                    <label for="email" class="">Email</label>
                </div>
                <div class="input-field col s12">
                    <input id="password" name="password" type="password" required>
                    <label for="password" class="">Password</label>
                </div>
                <div class="input-field col s12">
                    <button class="btn waves-effect waves-light right default" type="submit" name="submit">Submit <i class="material-icons right">send</i></button>
                </div>
            </div>
        </form>
    </div>
<?php } elseif ($_GET['act'] == 'edit') {

    if (isset($_POST['update'])) {
        updateUser($_GET['id'], $_POST['name'], $_POST['email'], $_POST['password']);
    }

    $item = mysqli_fetch_array(getItem('users', $_GET['id']));
?>
    <span class="card-title">Edit User</span>
    <div class="row">
        <form action='' method="POST" class="col s12 no-padding">
            <div class="row no-margin">
                <div class="input-field col s12">
                    <input id="name" name="name" type="text" value="<?= $item['users_name'] ?>" required>
                    <label for="name" class="">Name</label>
                </div>
                <div class="input-field col s12">
                    <input id="email" name="email" type="email" value="<?= $item['users_email'] ?>" required>
                    <label for="email" class="">Email</label>
                </div>
                <div class="input-field col s12">
                    <input id="users_password" name="users_password" type="password" placeholder="Kosongkan jika tidak ada perubahan">
                    <label for="users_password" class="">Password</label>
                </div>
                <div class="input-field col s12">
                    <button class="btn waves-effect waves-light right default" type="submit" name="update">Update <i class="material-icons right">send</i></button>
                </div>
            </div>
        </form>
    </div>
<?php } ?>