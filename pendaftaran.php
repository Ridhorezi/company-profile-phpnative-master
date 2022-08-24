<?php include("inc_header.php")?>
<?php 
if(isset($_SESSION['members_email']) != ''){ //sudah dalam keadaan login
    header("location:index.php");
    exit();
}
?>
<h3 class="white-dark">Registration</h3>
<?php 
$email          = "";
$nama_lengkap   = "";
$err            = "";
$sukses         = "";

if(isset($_POST['simpan'])){
    $email                  = $_POST['email'];
    $nama_lengkap           = $_POST['nama_lengkap'];
    $password               = $_POST['password'];
    $konfirmasi_password    = $_POST['konfirmasi_password'];

    if($email == '' or $nama_lengkap == '' or $konfirmasi_password =='' or $password == ''){
        $err .= "<li>Please enter all fields.</li>";
    }

    //cek di bagian db, apakah email sudah ada atau belum
    if($email != ''){
        $sql1   = "select email from members where email = '$email'";
        $q1     = mysqli_query($koneksi,$sql1);
        $n1     = mysqli_num_rows($q1);
        if($n1 > 0){
            $err .= "<li>The email you entered is already registered.</li>";
        }

        //validasi email
        if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
            $err .= "<li>The email you entered is invalid.</li>";
        }
    }

    //cek kesesuaian password & konfirmasi password
    if($password != $konfirmasi_password){
        $err .= "<li>Password and Confirm Password do not match.</li>";
    }
    if(strlen($password) < 6){
        $err .= "<li>The allowed character length for the password is at least 6 characters.</li>";
    }

    if(empty($err)){
        $status             = md5(rand(0,1000));
        $judul_email        = "Registration Confirmation Page";
        $isi_email          = "The account you have with email <b>$email</b> is ready to use.<br/>";
        $isi_email          .= "Previously, please activate the email at the link below:<br/>";
        $isi_email          .= url_dasar()."/verifikasi.php?email=$email&kode=$status";

        kirim_email($email,$nama_lengkap,$judul_email,$isi_email);

        $sql1       = "insert into members(email,nama_lengkap,password,status) values ('$email','$nama_lengkap',md5($password),'$status')";
        $q1         = mysqli_query($koneksi,$sql1);
        if($q1){
            $sukses = "Process Successful. Please check your email for verification.";
        }
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
                <input type="text" name="email" class="input" value="<?php echo $email?>"/>
            </td>
        </tr>
        <tr>
            <td class="label">Full Name</td>
            <td>
                <input type="text" name="nama_lengkap" class="input" value="<?php echo $nama_lengkap?>"/>
            </td>
        </tr>
        <tr>
            <td class="label">Password</td>
            <td>
                <input type="password" name="password"  id="password" class="input" />
            </td>
        </tr>
        <tr>
            <td class="label">Confirm Password</td>
            <td>
                <input type="password" name="konfirmasi_password" class="input" />
                
            </td>
        </tr>
    </table>
    <p style="margin-left: 246px ;">
        <input type="checkbox" class="form-check-input" id="show-password"> Show Password 
        <a style="margin-left:16px; " class="white-dark" href='<?php echo url_dasar()?>/login.php'>Already have account ? Login </a>
        <br>
        <input type="submit" name="simpan" value="Save" class="tbl-biru" style="margin-left: px;"/>
    </p>  
</form>
<br>
<?php include("inc_footer.php")?>