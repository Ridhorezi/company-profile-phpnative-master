<?php include("inc_header.php")?>
<h3 class="white-dark">Login to Members Page</h3>
<?php 
    ob_start();
    $email      = "";
    $password   = "";
    $err        = "";

if(isset($_POST['login'])){
    $email      = $_POST['email'];
    $password   = $_POST['password'];

    if($email == '' or $password == ''){
        $err .= "<li>Please enter all fields</li>";
    }else{
        $sql1   = "select * from members where email = '$email'";
        $q1     = mysqli_query($koneksi,$sql1);
        $r1     = mysqli_fetch_array($q1);
        $n1     = mysqli_num_rows($q1);

        if($r1['status'] != '1' && $n1 > 0){
            $err .= "<li>The account you have is not active</li>";
        }

        if($r1['password'] != md5($password) && $n1 >0 && $r1['status'] == '1'){
            $err .= "<li>Password does not match</li>";
        }

        if($n1 < 1){
            $err .= "<li>Account not found</li>";
        }
    
        if(empty($err)){
            $_SESSION['members_email'] = $email;
            $_SESSION['members_nama_lengkap'] = $r1['nama_lengkap'];
            echo "<script>
                    alert('Login Success');
                    document.location.href='rahasia.php';
                  </script>";
        }
    }
}
ob_start(); ?>
<?php if($err){ echo "<div class='error alert-dismissible animate__animated animate__fadeInDown'><ul>$err</ul></div>";}?>
<form action="" method="POST">
    <table>
        <tr>
            <td class="label">Email</td>
            <td><input type="text" name="email" class="input" value="<?php echo $email?>"/></td>
        </tr>
        <tr>
            <td class="label">Password</td>
            <td><input type="password" name="password" id="password" class="input" /></td>
        </tr>
    </table>
        <p  style="margin-left: 246px ;">
            <input type="checkbox" class="form-check-input" id="show-password"> Show Password 
                <a style="margin-left:55px;" class="white-dark" href='<?php echo url_dasar()?>/lupa_password.php'>Forgot Your Password ?</a><br>
            <input type="submit" name="login" value="login" class="tbl-biru" /> 
        </p>
</form>
<br>
<?php include("inc_footer.php")?>