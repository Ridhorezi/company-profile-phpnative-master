<?php include("inc_header.php")?>
<?php 
if($_SESSION['members_email'] == ''){ //dia belum login
    header("location:login.php");
    exit();
}
?>
<br><br>
<div  class=" white-dark" style="text-align: center; font-family:comic sans ms; font-weight:600; font-size: 25px;">
 Hello  <?php echo $_SESSION['members_nama_lengkap']?>
</div>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gbvr Courses</title>
    <link rel="stylesheet" href="../website-company-profile/css/style.css">
</head>
<body>

<div id="wrapp">
  <form action="" autocomplete="on">
  <input id="search" class="white-dark" name="search" type="text" placeholder="What do you want to learn today ? "><input id="search_submit" value="Rechercher" type="submit" class="white-dark">
  </form>
</div>

<style>
 
</style>

<br><br>
  
<div id="container">  
  
<!-- Start  Product details -->
  <div class="product-details">
    
    <!--  Product Name -->
  <h1>Full-Stack Web Development</h1>
<!--    <span class="hint new">New</span> -->
<!--    <span class="hint free-shipping">Free Shipping</span> -->
<!--    the Product rating -->
  <span class="hint-star star">
    <i class="fa fa-star" aria-hidden="true"></i>
    <i class="fa fa-star" aria-hidden="true"></i>
    <i class="fa fa-star" aria-hidden="true"></i>
    <i class="fa fa-star-half-o" aria-hidden="true"></i>
    <i class="fa fa-star-o" aria-hidden="true"></i>
  </span>
<!-- The most important information about the product -->
    <p class="information">" learn the basics of making back end and frontend applications using php, html, css, and java script"</p>
<!--    Control -->
<a href="transaction.php">
  <div class="control">
  <!-- Start Button buying -->
    <button class="bnt">
  <!--    the Price -->
    <span class="price">28 $</span>
  <!--    shopping cart icon-->
    <span class="shopping-cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i></span>
  <!--    Buy Now / ADD to Cart-->
    <span class="buy">Buy Now</span>
  </button>
    <!-- End Button buying -->
  </div>
</a>

      
</div>
  
<!--  End Product details   -->
  
<!--  Start product image & Information -->
  
<div class="product-image">
  
  <img src="../website-company-profile/gambar/image_web_developer.jpg" alt="">
  
<!--  product Information-->
<div class="info">
  <h2>The Description</h2>
  <ul>
    <li><strong>PHP: </strong>Fundamental & OOP</li>
    <li><strong>Css: </strong>Full</li>
    <li><strong>Html: </strong>Full Sintaks</li>
    <li><strong>Jquery: </strong>Full</li>
    <li><strong>Laravel: </strong>Full Arsitektur</li>
  </ul>
</div>
</div>
<!--  End product image  -->
</div>

<!-- batas page -->

<div id="container">  
  
<!-- Start  Product details -->
  <div class="product-details">
    
    <!--  Product Name -->
  <h1>Frontend-Web Development</h1>
<!--    <span class="hint new">New</span> -->
<!--    <span class="hint free-shipping">Free Shipping</span> -->
<!--    the Product rating -->
  <span class="hint-star star">
    <i class="fa fa-star" aria-hidden="true"></i>
    <i class="fa fa-star" aria-hidden="true"></i>
    <i class="fa fa-star" aria-hidden="true"></i>
    <i class="fa fa-star-half-o" aria-hidden="true"></i>
    <i class="fa fa-star-o" aria-hidden="true"></i>
  </span>
<!-- The most important information about the product -->
    <p class="information">"learn web design to create a professional and responsive website that is fully customizable"</p>
<!--    Control -->
<a href="transaction.php">
  <div class="control">
  <!-- Start Button buying -->
    <button class="bnt">
  <!--    the Price -->
    <span class="price">20 $</span>
  <!--    shopping cart icon-->
    <span class="shopping-cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i></span>
  <!--    Buy Now / ADD to Cart-->
    <span class="buy">Buy Now</span>
  </button>
    <!-- End Button buying -->
  </div>
</a>

      
</div>
  
<!--  End Product details   -->
  
<!--  Start product image & Information -->
  
<div class="product-image">
  
  <img src="../website-company-profile/gambar/image_frontendd.jpg" alt="">
  
<!--  product Information-->
<div class="info">
  <h2>The Description</h2>
  <ul>
    <li><strong>Css: </strong>Full</li>
    <li><strong>Html: </strong>Full Sintaks</li>
    <li><strong>Jquery: </strong>Full</li>
    <li><strong>React Js: </strong>Full</li>
    <li><strong>Vue Js: </strong>Full</li>

  </ul>
</div>
</div>
<!--  End product image  -->
</div>

<!-- batas page -->

<div id="container">  
  
<!-- Start  Product details -->
  <div class="product-details">
    
    <!--  Product Name -->
  <h1>Java-Spring Boot</h1>
<!--    <span class="hint new">New</span> -->
<!--    <span class="hint free-shipping">Free Shipping</span> -->
<!--    the Product rating -->
  <span class="hint-star star">
    <i class="fa fa-star" aria-hidden="true"></i>
    <i class="fa fa-star" aria-hidden="true"></i>
    <i class="fa fa-star" aria-hidden="true"></i>
    <i class="fa fa-star-half-o" aria-hidden="true"></i>
    <i class="fa fa-star-o" aria-hidden="true"></i>
  </span>
<!-- The most important information about the product -->
    <p class="information">"learn java programming language and spring boot framework"</p>
<!--    Control -->
<a href="transaction.php">
  <div class="control">
  <!-- Start Button buying -->
    <button class="bnt">
  <!--    the Price -->
    <span class="price">23 $</span>
  <!--    shopping cart icon-->
    <span class="shopping-cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i></span>
  <!--    Buy Now / ADD to Cart-->
    <span class="buy">Buy Now</span>
  </button>
    <!-- End Button buying -->
  </div>
</a>

      
</div>
  
<!--  End Product details   -->
  
<!--  Start product image & Information -->
  
<div class="product-image">
  
  <img src="../website-company-profile/gambar/image_java.jpg" alt="">
  
<!--  product Information-->
<div class="info">
  <h2>The Description</h2>
  <ul>
    <li><strong>Java: </strong>Fundamental & OOP</li>
    <li><strong>Spring Boot: </strong>Full Arsitektur </li>
  </ul>
</div>
</div>
<!--  End product image  -->
</div>

<!-- batas page -->

<div id="container">  
  
<!-- Start  Product details -->
  <div class="product-details">
    
    <!--  Product Name -->
  <h1>Android Apps Development</h1>
<!--    <span class="hint new">New</span> -->
<!--    <span class="hint free-shipping">Free Shipping</span> -->
<!--    the Product rating -->
  <span class="hint-star star">
    <i class="fa fa-star" aria-hidden="true"></i>
    <i class="fa fa-star" aria-hidden="true"></i>
    <i class="fa fa-star" aria-hidden="true"></i>
    <i class="fa fa-star-half-o" aria-hidden="true"></i>
    <i class="fa fa-star-o" aria-hidden="true"></i>
  </span>
<!-- The most important information about the product -->
    <p class="information">"learn to make android apps using kotlin from scratch to publish"</p>
<!--    Control -->
<a href="transaction.php">
  <div class="control">
  <!-- Start Button buying -->
    <button class="bnt">
  <!--    the Price -->
    <span class="price">15 $</span>
  <!--    shopping cart icon-->
    <span class="shopping-cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i></span>
  <!--    Buy Now / ADD to Cart-->
    <span class="buy">Buy Now</span>
  </button>
    <!-- End Button buying -->
  </div>
</a>
 
</div>
  
<!--  End Product details   -->
  
<!--  Start product image & Information -->
  
<div class="product-image">
  
  <img src="../website-company-profile/gambar/android.jpg" alt="">
  
<!--  product Information-->
<div class="info">
  <h2>The Description</h2>
  <ul>
    <li><strong>Android: </strong>Full</li>
    <li><strong>Kotlin </strong>Fundamental & OOP</li>
  </ul>
</div>
</div>
<!--  End product image  -->
</div>

<!-- batas page -->

<div id="container">  
  
<!-- Start  Product details -->
  <div class="product-details">
    
    <!--  Product Name -->
  <h1>Flutter Mobile Apps Development</h1>
<!--    <span class="hint new">New</span> -->
<!--    <span class="hint free-shipping">Free Shipping</span> -->
<!--    the Product rating -->
  <span class="hint-star star">
    <i class="fa fa-star" aria-hidden="true"></i>
    <i class="fa fa-star" aria-hidden="true"></i>
    <i class="fa fa-star" aria-hidden="true"></i>
    <i class="fa fa-star-half-o" aria-hidden="true"></i>
    <i class="fa fa-star-o" aria-hidden="true"></i>
  </span>
<!-- The most important information about the product -->
    <p class="information">"learn to make multi-platform mobile applications from scratch to publish"</p>
<!--    Control -->
<a href="transaction.php">
<div class="control">
<!-- Start Button buying -->
  <button class="bnt">
<!--    the Price -->
   <span class="price">18 $</span>
<!--    shopping cart icon-->
   <span class="shopping-cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i></span>
<!--    Buy Now / ADD to Cart-->
   <span class="buy">Buy Now</span>
 </button>
  <!-- End Button buying -->
</div>
</a>

</div>
  
<!--  End Product details   -->
  
<!--  Start product image & Information -->
  
<div class="product-image">
  
  <img src="../website-company-profile/gambar/flutter.jpg" alt="">
  
<!--  product Information-->
<div class="info">
  <h2>The Description</h2>
  <ul>
    <li><strong>Dart </strong>Fundamental & OOP</li>
    <li><strong>Flutter </strong>Full</li>
  </ul>
</div>
</div>
<!--  End product image  -->
</div>


<style>

@import url('https://fonts.googleapis.com/css?family=Abel|Aguafina+Script|Artifika|Athiti|Condiment|Dosis|Droid+Serif|Farsan|Gurajada|Josefin+Sans|Lato|Lora|Merriweather|Noto+Serif|Open+Sans+Condensed:300|Playfair+Display|Rasa|Sahitya|Share+Tech|Text+Me+One|Titillium+Web');

/* Search */
#wrapp {
  margin: 20px 170px;
  display: inline-block;
  position: relative;
  height: 60px;
  float: right;
  padding: 0;
}

input[type="text"] {
  height: 60px;
  font-size: 47px;
  display: inline-block;
  font-family: "Lato";
  font-weight: 100;
  border: none;
  outline: none;
  color: #555;
  padding: 3px;
  padding-right: 60px;
  width: 0px;
  position: absolute;
  top: 0;
  right: 0;
  background: none;
  z-index: 3;
  transition: width .4s cubic-bezier(0.000, 0.795, 0.000, 1.000);
  cursor: pointer;
}

input[type="text"]:focus:hover {
  border-bottom: 1px solid #BBB;
}

input[type="text"]:focus {
  width: 700px;
  z-index: 1;
  border-bottom: 1px solid #BBB;
  cursor: text;
}
input[type="submit"] {
  height: 67px;
  width: 63px;
  display: inline-block;
  color:red;
  float: right;
  background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAMAAABg3Am1AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAADNQTFRFU1NT9fX1lJSUXl5e1dXVfn5+c3Nz6urqv7+/tLS0iYmJqampn5+fysrK39/faWlp////Vi4ZywAAABF0Uk5T/////////////////////wAlrZliAAABLklEQVR42rSWWRbDIAhFHeOUtN3/ags1zaA4cHrKZ8JFRHwoXkwTvwGP1Qo0bYObAPwiLmbNAHBWFBZlD9j0JxflDViIObNHG/Do8PRHTJk0TezAhv7qloK0JJEBh+F8+U/hopIELOWfiZUCDOZD1RADOQKA75oq4cvVkcT+OdHnqqpQCITWAjnWVgGQUWz12lJuGwGoaWgBKzRVBcCypgUkOAoWgBX/L0CmxN40u6xwcIJ1cOzWYDffp3axsQOyvdkXiH9FKRFwPRHYZUaXMgPLeiW7QhbDRciyLXJaKheCuLbiVoqx1DVRyH26yb0hsuoOFEPsoz+BVE0MRlZNjGZcRQyHYkmMp2hBTIzdkzCTc/pLqOnBrk7/yZdAOq/q5NPBH1f7x7fGP4C3AAMAQrhzX9zhcGsAAAAASUVORK5CYII=) center center no-repeat;
  text-indent: -10000px;
  border: none;
  position: absolute;
  top: 0;
  right: 0;
  /* z-index: 2; */
  cursor: pointer;
  opacity: 0.4;
  cursor: pointer;
  transition: opacity .4s ease;
}

input[type="submit"]:hover {
  opacity: 0.8;
}

/* content */

#container{
  box-shadow: 0 15px 30px 1px rgba(128, 128, 128, 0.31);
  background: rgba(255, 255, 255, 0.90);
  text-align: center;
  border-radius: 5px;
  overflow: hidden;
  margin: 5em auto;
  height: 350px;
  width: 700px;
  
}

/*  Product details  */
.product-details {
  position: relative;
  text-align: left;
  overflow: hidden;
  padding: 30px;
  height: 100%;
  float: left;
  width: 40%;

}

/*  Product Name */
#container .product-details h1{
  font-family: 'Old Standard TT', serif;
  display: inline-block;
  position: relative;
  font-size: 34px;
  color: #344055;
  margin: 0;
  
}

#container .product-details h1:before{
  position: absolute;
  content: '';
  right: 0%; 
  top: 0%;
  transform: translate(25px, -15px);
  font-family: 'Farsan', cursive;
  display: inline-block;
  background: #FFA69E;
  border-radius: 5px;
  font-size: 14px;
  padding: 5px;
  color: #FFF;
  margin: 0;
  animation: chan-sh 3s ease infinite;

}


@keyframes chan-sh {
  from  {content: 'Hot';}
  to  {content: 'Promo';}
  
}

/*Product Rating  */
.hint-star {
  display: inline-block;
  margin-left: 0.5em;
  color: gold;
  width: 50%;
}


/* The most important information about the product */
#container .product-details > p {
  font-family: 'Farsan', cursive;
  text-align: center;
  font-size: 20px;
  color: #7d7d7d;
  
}

/* control */

.control{
  position: absolute;
  bottom: 20%;
  left: 22.8%;
  
}
/* the Button */
.bnt {
  transform: translateY(0px);
  transition: 0.3s linear;
  background: #49C608;
  border-radius: 5px;
  position: relative;
  overflow: hidden;
  cursor: pointer;
  outline: none;
  border: none;
  color: #eee;
  padding: 0;
  margin: 0;
}


.bnt:hover{transform: translateY(-4px);}

.bnt span {
  font-family: 'Farsan', cursive;
  transition: transform 0.3s;
  display: inline-block;
  padding: 10px 20px;
  font-size: 1.2em;
  margin:0;
}
/* shopping cart icon */
.bnt .price, .shopping-cart{
  background: #333;
  border: 0;
  margin: 0;
}

.bnt .price {
  transform: translateX(-10%); padding-right: 15px;
}

/* the Icon */
.bnt .shopping-cart {
  transform: translateX(-100%);
  position: absolute;
  background: #333;
  z-index: 1;
  left: 0;
  top: 0;
}

/* buy */
.bnt .buy {z-index: 3; font-weight: bolder;}

.bnt:hover .price {transform: translateX(-110%);}

.bnt:hover .shopping-cart {transform: translateX(0%);}

/* product image  */
.product-image {
  transition: all 0.3s ease-out;
  display: inline-block;
  position: relative;
  overflow: hidden;
  height: 100%;
  float: right;
  width: 50%;
  display: inline-block;
}

#container img {width: 100%;height: 100%;}

.info {
    background: rgba(27, 26, 26, 0.9);
    font-family: 'Farsan', cursive;
    transition: all 0.3s ease-out;
    transform: translateX(-100%);
    position: absolute;
    line-height: 1.9;
    text-align: left;
    font-size: 120%;
    cursor: no-drop;
    color: #FFF;
    height: 100%;
    width: 100%;
    left: 0;
    top: 0;
}

.info h2 {text-align: center}
.product-image:hover .info{transform: translateX(0);}

.info ul li{transition: 0.3s ease;}
.info ul li:hover{transform: translateX(50px) scale(1.3);}

.product-image:hover img {transition: all 0.3s ease-out;}
.product-image:hover img {transform: scale(1.2, 1.2);}

</style>
</body>
</html>
<script src="js/jquery-3.6.0.min.js"></script>  
<script src="js/script.js"></script>
