<?php 
session_start();
include_once("inc/inc_koneksi.php");
include_once("inc/inc_fungsi.php");
?>
<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>User</title>
    <link rel="stylesheet" href="<?php echo url_dasar()?>/css/style.css">
    <link rel="stylesheet" href="<?php echo url_dasar()?>/css/darkmode.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
</head>
<body>
    <nav class="shadow">
        <div class="wrapper">
            <div class="logo animate__animated"> <a href='<?php echo url_dasar()?>'> <img src="https://img.icons8.com/stickers/100/undefined/laptop-coding.png" height="46px" width="60px"/></a>
            <style>
                 .logo img{
                    border-radius: 7px;
                    margin-top: 20px;
                }
            </style>
            </div>
            <div class="menu">
                <ul>
                    <li><a href="#home" class="page-scroll">Home</a></li>
                    <li><a href="#courses" class="page-scroll link-dark">Courses</a></li>
                    <li><a href="#tutors" class="page-scroll link-dark">Tutors</a></li>
                    <li><a href="#partners" class="page-scroll link-dark">Partners</a></li>
                    <li><a href="#contact" class="page-scroll link-dark">Contact</a></li>
                    <li>
                    <?php  ob_start(); if(isset($_SESSION['members_nama_lengkap'])){
                        echo "<a href='".url_dasar()."/ganti_profile.php'>".$_SESSION['members_nama_lengkap']."</a> | <a href='".url_dasar()."/logout.php'>Logout</a>";
                    }else{  ob_start(); ?>
                        <a href="pendaftaran.php" class="cta">
                            <span>Sign In</span>
                            <span class="sp">
                            <svg width="20px" height="9px" viewBox="0 0 66 43" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <g id="arrow" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <path class="one" d="M40.1543933,3.89485454 L43.9763149,0.139296592 C44.1708311,-0.0518420739 44.4826329,-0.0518571125 44.6771675,0.139262789 L65.6916134,20.7848311 C66.0855801,21.1718824 66.0911863,21.8050225 65.704135,22.1989893 C65.7000188,22.2031791 65.6958657,22.2073326 65.6916762,22.2114492 L44.677098,42.8607841 C44.4825957,43.0519059 44.1708242,43.0519358 43.9762853,42.8608513 L40.1545186,39.1069479 C39.9575152,38.9134427 39.9546793,38.5968729 40.1481845,38.3998695 C40.1502893,38.3977268 40.1524132,38.395603 40.1545562,38.3934985 L56.9937789,21.8567812 C57.1908028,21.6632968 57.193672,21.3467273 57.0001876,21.1497035 C56.9980647,21.1475418 56.9959223,21.1453995 56.9937605,21.1432767 L40.1545208,4.60825197 C39.9574869,4.41477773 39.9546013,4.09820839 40.1480756,3.90117456 C40.1501626,3.89904911 40.1522686,3.89694235 40.1543933,3.89485454 Z" fill="#FFFFFF"></path>
                                <path class="two" d="M20.1543933,3.89485454 L23.9763149,0.139296592 C24.1708311,-0.0518420739 24.4826329,-0.0518571125 24.6771675,0.139262789 L45.6916134,20.7848311 C46.0855801,21.1718824 46.0911863,21.8050225 45.704135,22.1989893 C45.7000188,22.2031791 45.6958657,22.2073326 45.6916762,22.2114492 L24.677098,42.8607841 C24.4825957,43.0519059 24.1708242,43.0519358 23.9762853,42.8608513 L20.1545186,39.1069479 C19.9575152,38.9134427 19.9546793,38.5968729 20.1481845,38.3998695 C20.1502893,38.3977268 20.1524132,38.395603 20.1545562,38.3934985 L36.9937789,21.8567812 C37.1908028,21.6632968 37.193672,21.3467273 37.0001876,21.1497035 C36.9980647,21.1475418 36.9959223,21.1453995 36.9937605,21.1432767 L20.1545208,4.60825197 C19.9574869,4.41477773 19.9546013,4.09820839 20.1480756,3.90117456 C20.1501626,3.89904911 20.1522686,3.89694235 20.1543933,3.89485454 Z" fill="#FFFFFF"></path>
                                <path class="three" d="M0.154393339,3.89485454 L3.97631488,0.139296592 C4.17083111,-0.0518420739 4.48263286,-0.0518571125 4.67716753,0.139262789 L25.6916134,20.7848311 C26.0855801,21.1718824 26.0911863,21.8050225 25.704135,22.1989893 C25.7000188,22.2031791 25.6958657,22.2073326 25.6916762,22.2114492 L4.67709797,42.8607841 C4.48259567,43.0519059 4.17082418,43.0519358 3.97628526,42.8608513 L0.154518591,39.1069479 C-0.0424848215,38.9134427 -0.0453206733,38.5968729 0.148184538,38.3998695 C0.150289256,38.3977268 0.152413239,38.395603 0.154556228,38.3934985 L16.9937789,21.8567812 C17.1908028,21.6632968 17.193672,21.3467273 17.0001876,21.1497035 C16.9980647,21.1475418 16.9959223,21.1453995 16.9937605,21.1432767 L0.15452076,4.60825197 C-0.0425130651,4.41477773 -0.0453986756,4.09820839 0.148075568,3.90117456 C0.150162624,3.89904911 0.152268631,3.89694235 0.154393339,3.89485454 Z" fill="#FFFFFF"></path>
                                </g>
                            </svg>
                            </span> 
                        </a>
                        <style>
                                .cta {
                                    padding: 13px 13px;
                                    margin-left: 15px;
                                    text-decoration: none;
                                    font-family: 'Poppins', sans-serif;
                                    font-size: 14px;
                                    color: white;
                                    background: #3f72af;
                                    transition: 1s;
                                    border-radius: 6px;
                                    box-shadow: 6px 6px  0 light;
                                    transform: skewX(-15deg);
                                }

                                .cta:focus {
                                outline: none; 
                                }

                                .cta:hover {
                                    transition: 1s;
                                    box-shadow: -5px 10px 10px -5px grey;
                                    color: white;
                        
                                }

                                .cta span:nth-child(2) {
                                    transition: 1s;
                                    margin-right: 0px;
                                }

                                .cta:hover  span:nth-child(2) {
                                    transition: 0.5s;
                                    /* margin-right: 45px; */
                                }

                                .sp {
                                    transform: skewX(15deg) 
                                }

                                .sp:nth-child(2) {
                                    width: 5px;
                                    position: relative;
                                    top: 12%;
                                }
                                
                                /**************SVG****************/

                                path.one {
                                    transition: 0.4s;
                                    transform: translateX(-60%);
                                }

                                path.two {
                                    transition: 0.4s;
                                    transform: translateX(-30%);
                                }

                                .cta:hover path.three {
                                    animation: color_anim 1.5s infinite 0.2s;
                                }

                                .cta:hover path.one {
                                    transform: translateX(0%);
                                    animation: color_anim 1.5s infinite 0.6s;
                                }

                                .cta:hover path.two {
                                    transform: translateX(0%);
                                    animation: color_anim 1.5s infinite 0.4s;
                                }

                                /* SVG animations */

                                @keyframes color_anim {
                                    0% {
                                        fill: white;
                                    }
                                    50% {
                                        fill: #fc5185;
                                    }
                                    100% {
                                        fill: white;
                                    }
                                }
                        </style>
                    <?php  ob_start(); }  ob_start();?>
                    </li>
                </ul>
            </div>
            <div class="dark-mode">
                <label for="checkbox" class="theme-switch">
                    <input type="checkbox" id="checkbox">
                    <div class="slider round"></div>
                </label>
            </div>
        </div>
    </nav>
    <script>
        const ToogleSwitch = document.querySelector('.theme-switch input[type="checkbox"]');
        function switchTheme(e) {
            
            if (e.target.checked){
                document.documentElement.setAttribute('mode-dark', 'dark');
                localStorage.setItem('theme', 'dark'); // save to localstorage in dark mode
            }else{
                document.documentElement.setAttribute('mode-dark', 'light');
                localStorage.setItem('theme', 'light'); // save to localstorage in light mode
            }
        }

        ToogleSwitch.addEventListener('change', switchTheme, false);

        const currentTheme = localStorage.getItem('theme') ? localStorage.getItem('theme') : null;

        if (currentTheme) {
            document.documentElement.setAttribute('mode-dark', currentTheme);

            if (currentTheme === 'dark') {
                ToogleSwitch.checked = true;
            }
        }
    </script>
<div class="wrapper">

  