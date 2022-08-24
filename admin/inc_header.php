<?php 
session_start();
if($_SESSION['admin_username'] == ''){
    header("location:login.php");
    exit();
}
include_once("../inc/inc_fungsi.php");
include_once("../inc/inc_koneksi.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin</title>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
      <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
         <img src="https://img.icons8.com/stickers/100/undefined/laptop-coding.png" width="55px" height="40px" alt="logo" style="border-radius: 5px;"/>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-stretch">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
          </button>
          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item nav-profile dropdown">
              <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <div class="nav-profile-img">
                  <img src="../gambar/admin_logo.png" alt="image">
                  <span class="availability-status online"></span>
                </div>
                <div class="nav-profile-text">
                  <p class="mb-1 text-black"><?php echo $_SESSION['admin_username']?></p>
                </div>
              </a>
              <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
                <a class="dropdown-item" href="change_profile.php">
                  <i class="mdi mdi-account mr-2 text-success"></i> Profile </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="logout.php">
                  <i class="mdi mdi-logout mr-2 text-primary"></i> Signout </a>
              </div>
            </li>
            <li class="nav-item d-none d-lg-block full-screen-link">
              <a class="nav-link">
                <i class="mdi mdi-fullscreen" id="fullscreen-button"></i>
              </a>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="index.php" class="nav-link">
                <div class="nav-profile-image">
                  <img src="../gambar/admin_logo.png" alt="profile">
                  <span class="login-status online"></span>
                </div>
                <div class="nav-profile-text d-flex flex-column">
                  <span class="font-weight-bold mb-2">Administrator</span>
                  <span class="text-secondary text-small">PT. GBVR COURSES</span>
                </div>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php">
                <span class="menu-title">Dashboard</span>
                <i class="mdi mdi-home menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#page" aria-expanded="false" aria-controls="page">
                <span class="menu-title">Page</span>
                <i class="menu-arrow mdi"></i>
                <i class="mdi mdi-page-layout-body"></i>
              </a>
              <div class="collapse" id="page">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="http://localhost/web_tugas/website-company-new/admin/halaman.php">Page View</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#tutors" aria-expanded="false" aria-controls="tutors">
                <span class="menu-title">Tutors</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-account-multiple"></i>
              </a>
              <div class="collapse" id="tutors">
                <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="http://localhost/web_tugas/website-company-new/admin/tutors.php">Tutors View</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#partners" aria-expanded="false" aria-controls="partners">
                <span class="menu-title">Partners</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-account-group"></i>
              </a>
              <div class="collapse" id="partners">
                <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="http://localhost/web_tugas/website-company-new/admin/partners.php">Partners View</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#contact" aria-expanded="false" aria-controls="contact">
                <span class="menu-title">Contact</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-contacts"></i>
              </a>
              <div class="collapse" id="contact">
                <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="http://localhost/web_tugas/website-company-new/admin/contact.php">Contact View</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#members" aria-expanded="false" aria-controls="members">
                <span class="menu-title">Members</span>
                <i class="menu-arrow mdi"></i>
                <i class="mdi mdi-wallet-membership"></i>
              </a>
              <div class="collapse" id="members">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="http://localhost/web_tugas/website-company-new/admin/members.php">Members View</a></li>
                </ul>
              </div>
          </li>
      </ul>
  </nav>