 <!-- Check Sessionpersist
===================================================================================================-->

 <!--END  Check Sessionpersist
===================================================================================================-->

 <!doctype html>
 <html lang="en">

 <head>
   <!-- Required meta tags
===================================================================================================-->
   <title>The Na Thailand</title>
   <meta charset="utf-8">
   <META NAME="keywords" CONTENT="The Na Thailand">
   <META NAME="description" CONTENT="สินค้าดูแลสุขภาพและความงาม จากผู้เชี่ยวชาญ">

   <!-- END Required meta tags
===================================================================================================-->
   <?php
    include 'components/head/head.php'
    ?>

   <!-- CSS
===================================================================================================-->
<link rel="stylesheet" href="css/style-navbar.css">
   <!-- CSS
===================================================================================================-->
   <style>
     .carousel-item {
       height: 65vh;
       min-height: 300px;
       background: no-repeat center center scroll;
       -webkit-background-size: cover;
       -moz-background-size: cover;
       -o-background-size: cover;
       background-size: cover;
     }
     body {
    background: no-repeat center center fixed;
    background-color: white;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    background-size: cover;
    -o-background-size: cover;

}
section {padding:2rem;}

.bg-gray {background-color:#F0F8FF
;}
   </style>
 </head>

 <body>

   <!-- Navbar
 ===================================================================================================-->
   <header>
     <?php
      include 'components/navbar/navbar.php'
      ?>
   </header>
   <!--END  Navbar
   
===================================================================================================-->

   <main>
     <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
       <ol class="carousel-indicators">
         <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"></li>
         <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"></li>
         <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"></li>
       </ol>
       <div class="carousel-inner">
         <div class="carousel-item active" style="background-image: url('https://source.unsplash.com/RCAhiGJsUUE/1920x1080')">

           <div class="carousel-caption d-none d-md-block">
             <h5>First slide label</h5>
             <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
           </div>
         </div>
         <div class="carousel-item" style="background-image: url('https://source.unsplash.com/RCAhiGJsUUE/1920x1080')">

           <div class="carousel-caption d-none d-md-block">
             <h5>Second slide label</h5>
             <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
           </div>
         </div>
         <div class="carousel-item" style="background-image: url('https://source.unsplash.com/RCAhiGJsUUE/1920x1080')">

           <div class="carousel-caption d-none d-md-block">
             <h5>Third slide label</h5>
             <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
           </div>
         </div>
       </div>
       <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-bs-slide="prev">
         <span class="carousel-control-prev-icon" aria-hidden="true"></span>
         <span class="visually-hidden"></span>
       </a>
       <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-bs-slide="next">
         <span class="carousel-control-next-icon" aria-hidden="true"></span>
         <span class="visually-hidden"></span>
       </a>
     </div>


    <!--Page Content
===================================================================================================-->
     <section class=" shadow-sm bg-gray text-center" >
   <div class="container">
     

           <section class="py-5">
             <div class="container">
               <h3>-- ช่องทางการติดต่อ --</h3>
               <p class="lead"> <a href="https://www.facebook.com/chititpat.Sripoot">faebook-pakping</a> <a href="https://www.facebook.com/jeerachon9/">facebook-G</a>
                 <a href="https://www.facebook.com/profile.php?id=100002182427958">facebook-big</a>
               </p>
             </div>
           </section>

           <!-- end crad body -->
       </div>
       <!-- end container -->
     </section>
     <!--END Page Content
===================================================================================================-->



     <!-- Pagae content-photo-library
===================================================================================================-->

     <?php
      include 'components/content/content.php'
      ?>
     <!--END  Pagae content-photo-library
===================================================================================================-->
<section class=" shadow-sm bg-gray text-center" >
   <div class="container">
     

           <section class="py-5">
             <div class="container">
               <h3>-- ช่องทางการติดต่อ --</h3>
               <p class="lead"> <a href="https://www.facebook.com/chititpat.Sripoot">faebook-pakping</a> <a href="https://www.facebook.com/jeerachon9/">facebook-G</a>
                 <a href="https://www.facebook.com/profile.php?id=100002182427958">facebook-big</a>
               </p>
             </div>
           </section>

           <!-- end crad body -->
       </div>
       <!-- end container -->
     </section>
     <!-- start footer 
===================================================================================================-->
     <?php
      include 'components/footer.php'
      ?>
   </main>
   <!--END start footer 
===================================================================================================-->
 </body>

 </html>