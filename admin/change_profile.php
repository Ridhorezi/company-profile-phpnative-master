<?php 
include_once("resource.php");
include_once("inc_header.php");
?>
<?php
$err        = "";
$sukses     = "";

if (isset($_POST['simpan'])) {
    $username               = $_POST['username'];
    $password_lama          = $_POST['password_lama'];
    $password               = $_POST['password'];
    $konfirmasi_password    = $_POST['konfirmasi_password'];

    $sql1 = "select * from admin where username = '" . $_SESSION['admin_username'] . "'";
    $q1   = mysqli_query($koneksi, $sql1);
    $r1   = mysqli_fetch_array($q1);

    if($username == ''){
        $err .= "<li>Silakan masukkan nama lengkap</li>";
    }

    if (md5($password_lama) != $r1['password']) {
        $err .= "<li>The password you write does not match the previous password</li>";
    }

    if ($password_lama == '' or $konfirmasi_password == '' or $password == '') {
        $err .= "<li>Please enter the old password, new password and confirm password</li>";
    }

    if ($password != $konfirmasi_password) {
        $err .= "<li>Please enter the password and confirm the same password</li>";
    }

    if (strlen($password) < 6) {
        $err .= "<li>The allowed character length for the password is 6 characters, minimum.</li>";
    }

    if(empty($err)){

        $sql1 = "update admin set username = '".$username."' where username = '".$_SESSION['admin_username']."'";
        mysqli_query($koneksi,$sql1);
        $_SESSION['admin_username'] = $username;

        if($password){
            $sql2 = "update admin set password = md5($password) where username = '".$_SESSION['admin_username']."'";
            mysqli_query($koneksi,$sql2);
        }

        $sukses = "Successfully Update Data";

    }
}
?>
 <div class="content-wrapper">
    <?php
    if ($err) {
    ?>
        <div class="alert alert-danger animate__animated animate__fadeInDown" role="alert">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <?php echo $err ?>
        </div>
    <?php
    }
    ?>
    <?php
    if ($sukses) {
    ?>
        <div class="alert alert-info animate__animated animate__fadeInDown" role="alert">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <?php echo $sukses ?>
        </div>
        <?php
        }
        ?>
        <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Change Profile</li>
                </ol>
              </nav>
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                  <form action="" method="POST">
                        <div class="mb-3 row">
                            <label for="username" class="col-sm-3 col-form-label">Username</label>
                            <div class="col-sm-9">
                                <input type="username" class="form-control" id="username" name="username" value="<?php echo $_SESSION['admin_username']?>"/>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="password_lama" class="col-sm-3 col-form-label">Old Password</label>
                            <div class="col-sm-9">
                                <input type="password" class="form-control" id="password_lama" name="password_lama" />
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="password" class="col-sm-3 col-form-label">New Password</label>
                            <div class="col-sm-9">
                                <input type="password" class="form-control" id="password" name="password" />
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="konfirmasi_password" class="col-sm-3 col-form-label">Confirm Password</label>
                            <div class="col-sm-9">
                                <input type="password" class="form-control" id="konfirmasi_password" name="konfirmasi_password" />
                            </div>
                        </div>
                            <div class="mb-3 row">
                                <div class="col-sm-3"></div>
                                    <div class="col-sm-9">
                                    <button type="submit" class="btn btn-gradient-primary" name="simpan"> Save <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-save" viewBox="0 0 16 16">
                                    <path d="M2 1a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H9.5a1 1 0 0 0-1 1v7.293l2.646-2.647a.5.5 0 0 1 .708.708l-3.5 3.5a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L7.5 9.293V2a2 2 0 0 1 2-2H14a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h2.5a.5.5 0 0 1 0 1H2z"/>
                                    </svg>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>  