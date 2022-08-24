<?php include("inc_header.php")?>
<?php 
$err     = "";
$sukses  = "";

if(!isset($_GET['email']) or !isset($_GET['kode'])){
    $err    = "Data yang diperlukan untuk verifikasi tidak tersedia.";
}else{
    $email  = $_GET['email'];
    $kode   = $_GET['kode'];

    $sql1   = "select * from members where email = '$email'";
    $q1     = mysqli_query($koneksi,$sql1);
    $r1     = mysqli_fetch_array($q1);
    if($r1['status'] == $kode){
        $sql2   = "update members set status = '1' where email = '$email'";
        mysqli_query($koneksi,$sql2);
        $sukses = "Account is active. Please login on the login page.";
    }else{
        $err = "Invalid code";
    }
}
?>
<h3>Page Verification</h3>
<?php if($err) { echo "<div class='error alert-dismissible animate__animated animate__fadeInDown'>$err</div>";}?>
<?php if($sukses) { echo "<div class='sukses alert-dismissible animate__animated animate__fadeInDown'>$sukses</div>";}?>
<?php include("inc_footer.php")?>