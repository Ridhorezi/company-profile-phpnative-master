<?php 
session_start();
if(isset($_SESSION['admin_username'])!=''){
    $success    = "Success Login";
    header("location:index.php");
    exit();
}
include("../inc/inc_koneksi.php");
$username   = "";
$password   = "";
$err        = "";
$success    = "";

if(isset($_POST['Login'])){
    $username       = $_POST['username'];
    $password       = $_POST['password'];

    if($username == '' or $password == ''){
        $err    = "Please enter all fields";
    }else{
        $sql1   = "select * from admin where username = '$username'";
        $q1     = mysqli_query($koneksi,$sql1);
        $r1     = mysqli_fetch_array($q1);
        $n1     = mysqli_num_rows($q1);

        if($n1 < 1){
            $err = "Username not found";
        }elseif($r1['password'] != md5($password)){
            $err = "The password you entered does not match";
        }else{
          
            $_SESSION['admin_username'] = $username;
            echo "<script>
              alert('Login Success');
              document.location.href='index.php';
            </script>";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <title>Login Admin</title>
</head>
<body style="width:100%;max-width:350px;margin:auto;padding:15px;">   
<style>
    body {
        background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
        background-size: 400% 400%;
        animation: gradient 13s ease infinite;
        height: 100vh;
    }
    @keyframes gradient {
      0% {
        background-position: 0% 50%;
      }
      50% {
        background-position: 100% 50%;
      }
      100% {
        background-position: 0% 50%;
      }
    }

</style>
    <div class="login-box">       
        <h2>
        <img class="mb-3" src="https://img.icons8.com/stickers/100/undefined/laptop-coding.png" alt width="77" height="62"> 
        <style>
            img{
                border-radius: 10px;
            }
        </style> <p>
        </p>
        </h2>
        <?php 
        if($err){
        ?>
            <div class="alert alert-danger alert-dismissible animate__animated animate__fadeInDown" role="alert">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                </svg>  <?php echo $err ?>
                <style>
                  a{
                    color: black;
                    text-decoration: none; 
                    float: inline-end;
                  }
                </style>
            </div>
        <?php
        }
        ?>
        <br>
        <form action="" method="POST">
            <div class="user-box">
                <input type="text" name="username" id="username" required="" value="<?php echo $username?>">
                <label>Username</label>
            </div>
            <div class="user-box">
                <input type="password" name="password" id="password" required="" value="<?php echo $password ?>">
                <label>Password</label>
            </div>
            <div class="form-group text-light">
                <input type="checkbox" class="form-check-input" id="show-password"> Show Password
            </div>
            <button type="submit" id="tombol" name="Login">Login
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </button>
            <style>
                button{
                    border-radius: 5px;
                }
            </style>
        </form>
<style>
  .login-box {
      position: absolute;
      top: 50%;
      left: 50%;
      width: 360px;
      padding: 40px;
      transform: translate(-50%, -50%);
      background: rgba(0,0,0,.5);
      box-sizing: border-box;
      box-shadow: 0 15px 25px rgba(0,0,0,.6);
      border-radius: 10px;
  }

  .login-box h2 {
    margin: 0 0 20px;
    padding: 0;
    color: #fff;
    text-align: center;
  }

  .login-box .user-box {
    position: relative;
  }

  .login-box .user-box input {
    width: 100%;
    padding: 10px 0;
    font-size: 16px;
    color: #fff;
    margin-bottom: 30px;
    border: none;
    border-bottom: 1px solid #fff;
    outline: none;
    background: transparent;
  }
  .login-box .user-box label {
    position: absolute;
    top:0;
    left: 0;
    padding: 10px 0;
    font-size: 16px;
    color: #fff;
    pointer-events: none;
    transition: .5s;
  }

  .login-box .user-box input:focus ~ label,
  .login-box .user-box input:valid ~ label {
    top: -20px;
    left: 0;
    color: #03e9f4;
    font-size: 12px;
  }

  .login-box form button {
    position: relative;
    display: inline-block;
    padding: 10px 20px;
    color: white;
    font-size: 10px;
    text-decoration: none;
    text-transform: uppercase;
    overflow: hidden;
    transition: .5s;
    margin-top: 40px;
    letter-spacing: 4px;
    background-color: transparent;
  }

  .login-box button:hover {
    background: #03e9f4;
    color: #fff;
    border-radius: 5px;
    box-shadow: 0 0 5px #03e9f4,
                0 0 25px #03e9f4,
                0 0 50px #03e9f4,
                0 0 100px #03e9f4;
  }

  .login-box button span {
    position: absolute;
    display: block;
  }

  .login-box button span:nth-child(1) {
    top: 0;
    left: -100%;
    width: 100%;
    height: 2px;
    background: linear-gradient(90deg, transparent, #03e9f4);
    animation: btn-anim1 1s linear infinite;
  }


  @keyframes btn-anim1 {
    0% {
      left: -100%;
    }
    50%,100% {
      left: 100%;
    }
  }

  .login-box button span:nth-child(2) {
    top: -100%;
    right: 0;
    width: 2px;
    height: 100%;
    background: linear-gradient(180deg, transparent, #03e9f4);
    animation: btn-anim2 1s linear infinite;
    animation-delay: .25s
  }

  @keyframes btn-anim2 {
    0% {
      top: -100%;
    }
    50%,100% {
      top: 100%;
    }
  }

  .login-box button span:nth-child(3) {
    bottom: 0;
    right: -100%;
    width: 100%;
    height: 2px;
    background: linear-gradient(270deg, transparent, #03e9f4);
    animation: btn-anim3 1s linear infinite;
    animation-delay: .5s
  }

  @keyframes btn-anim3 {
    0% {
      right: -100%;
    }
    50%,100% {
      right: 100%;
    }
  }

  .login-box button span:nth-child(4) {
    bottom: -100%;
    left: 0;
    width: 2px;
    height: 100%;
    background: linear-gradient(360deg, transparent, #03e9f4);
    animation: btn-anim4 1s linear infinite;
    animation-delay: .75s
  }

  @keyframes btn-anim4 {
    0% {
      bottom: -100%;
    }
    50%,100% {
      bottom: 100%;
    }
  }
</style>
</div>   
<script src="../js/jquery-3.6.0.min.js"></script>  
<script src="../js/script.js"></script>
<script src="../css/style.css"></script>
</body>
</html>