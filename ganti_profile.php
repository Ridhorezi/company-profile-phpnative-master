<?php include("inc_header.php")?>
<?php 
if(isset($_SESSION['members_email']) == ''){ //belum dalam keadaan login
    header("location:login.php");
    exit();
}
?>
<h3 class="white-dark">Change Profile Account</h3>
<?php 
$email          = "";
$nama_lengkap   = "";
$err            = "";
$sukses         = "";

if(isset($_POST['simpan'])){
    $nama_lengkap           = $_POST['nama_lengkap'];
    $password_lama          = $_POST['password_lama'];
    $password               = $_POST['password'];
    $konfirmasi_password    = $_POST['konfirmasi_password'];

    if($nama_lengkap == ''){
        $err .= "<li>Please enter full name</li>";
    }

    if($password != ''){ //jika akan melakukan perubahan password
        $sql1 = "select * from members where email = '".$_SESSION['members_email']."'";
        $q1   = mysqli_query($koneksi,$sql1);
        $r1   = mysqli_fetch_array($q1);
        if(md5($password_lama) != $r1['password']){
            $err .= "<li>The password you wrote does not match the previous password</li>";
        }

        if($password_lama == '' or $konfirmasi_password == '' or $password == ''){
            $err .= "<li>Please enter the old password, new password and confirm password</li>";
        }

        if($password != $konfirmasi_password){
            $err .= "<li>Please enter the password and confirm the same password</li>";
        }

        if(strlen($password) < 6){
            $err .= "<li>The allowed character length for the password is 6 characters, minimum.</li>";
        }
    }

    if(empty($err)){
        $sql1 = "update members set nama_lengkap = '".$nama_lengkap."' where email = '".$_SESSION['members_email']."'";
        mysqli_query($koneksi,$sql1);
        $_SESSION['members_nama_lengkap'] = $nama_lengkap;

        if($password){
            $sql2 = "update members set password = md5($password) where email = '".$_SESSION['members_email']."'";
            mysqli_query($koneksi,$sql2);
        }

        $sukses = "Data changed successfully";
    }

}
?>
<?php if($err) {echo "<div class='error alert-dismissible animate__animated animate__fadeInDown'><ul>$err</ul></div>";} ?>
<?php if($sukses) {echo "<div class='sukses alert-dismissible animate__animated animate__fadeInDown'><ul>$sukses</ul></div>";} ?>

<form action="" method="POST">
    <table>
        <tr>
            <td class="label">Email</td>
            <td>
                <input type="text" name="members_email" class="input" value="<?php echo $_SESSION['members_email']?>"/>
            </td>
        </tr>
        <tr>
            <td class="label">Full Name</td>
            <td>
                <input type="text" name="nama_lengkap" class="input" value="<?php echo $_SESSION['members_nama_lengkap']?>"/>
            </td>
        </tr>
        <tr>
            <td class="label">Old Password</td>
            <td>
                <input type="password" name="password_lama" class="input" />
            </td>
        </tr>
        <tr>
            <td class="label">New Password</td>
            <td>
                <input type="password" name="password" class="input" />
            </td>
        </tr>
        <tr>
            <td class="label">Confirm Password</td>
            <td>
                <input type="password" name="konfirmasi_password" class="input" />
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="submit" name="simpan" value="simpan" class="tbl-biru"/>
            </td>
        </tr>
    </table>
</form>

<?php include("inc_footer.php")?>