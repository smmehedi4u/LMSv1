<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Management System</title>

    <!-- Link Custom css file   -->
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet">
<!-- <link rel="stylesheet" href="css/style.css"> -->

<!-- Link Bootsrap css file   -->

 <link rel="stylesheet" href="Css/bootstrap.min.css">

<!-- Link owl Carousel css file   -->

<link rel="stylesheet" href="Css/owl.carousel.min.css">
<link rel="stylesheet" href="Css/owl.theme.default.min.css">



<!-- Link Font Awesome file   -->

<link rel="stylesheet" href="Font/fontawesome-free-5.15.2-web/fontawesome-free-5.15.2-web/css/all.min.css">

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

<!--    <link rel="stylesheet" href="/Css/swiper.css" />-->
<!-- Link Swiper's CSS -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"
    />

    <!-- Demo styles -->
    <style>
      html,
      body {
        position: relative;
        height: 80%;
      }

      body {
        background: #fff;
        font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
        font-size: 14px;
        color: #000;
        margin: 0;
        padding: 0;

      }

      .swiper {
        width: 100%;
        height: 100%;

      }

      .swiper-slide {
        text-align: center;
        font-size: 18px;
        background: #fff;

        /* Center slide text vertically */
        display: -webkit-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-justify-content: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        -webkit-align-items: center;
        align-items: center;
      }

      .swiper-slide img {
        display: block;
        width: 70%;
        height: 70%;
        object-fit: cover;
      }
    </style>



</head>
<body>



 <!-- header section starts  -->

<header>

    <div id="menu-bar" class="fas fa-bars"></div>
    <div>   </div>
    <a href="#">
         <img src="Images/logo.png" style=" width: 120px;height: 70px;margin: 0px;" >
    </a>




    <nav class="navbar">
        <a href="#home">Home</a>
        <a href="#books">Books</a>
        <a href="#aboutus">About Us</a>

    </nav>
         <div class="col-12 col-md-10 col-lg-4">

                            <form class="card card-sm">
                                <div class="card-body row no-gutters align-items-center">
                                    <!--end of col-->
                                    <div class="col-sm">
                                        <input class="form-control form-control-lg form-control-borderless" type="search" placeholder="Search here">
                                    </div>
                                    <!--end of col-->
                                    <div class="col-auto">
                                        <button class="btn btn-lg btn-success" type="submit">Search</button>
                                    </div>
                                    <!--end of col-->
                                </div>
                            </form>
                        </div>


                           <div>   </div>

</header>
<!-- header section ends  -->



<section style="height: 80px; background-color: #fff">

</section>



<!-- home section starts  -->



<section class="home"  id="home" style="background-image: url(Images/homebackground.jpg) ;">

    <div class="row">

        <div class="content" style="font-weight: bolder; word-spacing: 10px;">
            <h3>A PLACE IS  </h3>

            <h3>   NOT A PLACE</h3>
            <p>UNTIL IT HAS A BOOK LIBRARY</p>

        </div>

        <div class="swiper books-slider">
            <div class="swiper-wrapper "  >
                <a href="#" class="swiper-slide"><img style="width:100%" src="images/tom-hermans-9BoqXzEeQqM-unsplash.jpg" alt=""></a>

            </div>
            <img src="images/stand.png" class="stand" alt="">
        </div>

    </div>

</section>



<!-- home section ends -->

<section id="books" style="height: 80px; background-color: #fff" >

</section>

<!-- book section start-->


<!-- Swiper -->
   <section >
     <h1 class="heading"> <span> Books</span> </h1>
        <div class="swiper mySwiper"  data-swiper-autoplay="200">
      <div class="swiper-wrapper">

            <!-- <div class="swiper-slide"><img src="Images/introduction.png" alt=""></div> -->
           <a href="introduction.php" class="swiper-slide"> <img src="Images/introduction.png" alt=""></a>
           <a href="anci c.php" class="swiper-slide"> <img src="Images/anci c.png" alt=""></a>
           <a href="algorithm.php" class="swiper-slide"> <img src="Images/algorithm.png" alt=""></a>
           <a href="java.php" class="swiper-slide"> <img src="Images/java.png" alt=""></a>
           <a href="computer architecture.php" class="swiper-slide"> <img src="Images/computer architecture.png" alt=""></a>
           <a href="cpp.php" class="swiper-slide"> <img src="Images/cpp.png" alt=""></a>
           <a href="database.php" class="swiper-slide"> <img src="Images/database.png" alt=""></a>
           <a href="os.php" class="swiper-slide"> <img src="Images/os.png" alt=""></a>
           <a href="numerical.php" class="swiper-slide"> <img src="Images/numerical.png" alt=""></a>


        <!-- <div class="swiper-slide"><img src="Images/anci%20c.png" alt=""></div>
        <div class="swiper-slide"><img src="Images/algorithm.png" alt=""></div>
        <div class="swiper-slide"><img src="Images/java.png" alt=""></div>
        <div class="swiper-slide"><img src="Images/computer%20architecture.png" alt=""></div>
        <div class="swiper-slide"><img src="Images/cpp.png" alt=""></div>
        <div class="swiper-slide"><img src="Images/database.png" alt=""></div>
        <div class="swiper-slide"><img src="Images/os.png" alt=""></div>
        <div class="swiper-slide"><img src="Images/numerical.png" alt=""></div> -->
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-pagination"></div>
    </div>
   </section>
   <!-- book section ends -->
   <section id="aboutus" style="height:100px; background-color: #fff" >

</section>

   <!-- about us section start -->

   <section  >
     <h1 class="heading"> <span>About Us</span> </h1>
       <div class="container">
           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates exercitationem ipsa, libero eius facilis veniam illum est architecto ut eos molestiae iste vitae quibusdam dolor, repellendus autem, quisquam excepturi possimus praesentium. Molestiae magnam modi nemo, voluptas! Doloremque dignissimos vitae veniam assumenda dolorem accusamus voluptatem quo architecto neque doloribus dolorum tenetur, maxime quam necessitatibus placeat, aperiam aliquam! Commodi magni atque eveniet ipsum praesentium nobis expedita explicabo magnam eligendi, et fugit corporis, nemo sed libero officiis dolore cupiditate maxime laborum unde non, fuga assumenda voluptatem adipisci! Ratione illo esse cum maxime totam laudantium, sapiente, voluptatem aut porro suscipit itaque at explicabo inventore!</p>
       </div>

   </section>
   <!-- about us section ends -->




  <section style="height:50px; background-color: #fff">

</section>



  <!-- footer section starts  -->


<section class="footer" style=" background-color: #fff">

    <div class="box-container">


        <div class="box">
            <h3>quick links</h3>
            <a href="#"> <i class="fas fa-arrow-right"></i> home </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> books </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> about us </a>

        </div>


        <div class="box">
            <h3>extra links</h3>
            <a href="#"> <i class="fas fa-arrow-right"></i>Facebook </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> Twitter </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> Instagram</a>
            <a href="#"> <i class="fas fa-arrow-right"></i> Linked In  </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> Pinterest </a>
        </div>


        <div class="box">
            <h3>contact info</h3>
            <a href="#"> <i class="fas fa-phone"></i> +123-456-7890 </a>
            <a href="#"> <i class="fas fa-phone"></i> +111-222-3333 </a>
            <a href="#"> <i class="fas fa-envelope"></i> shaikhanas@gmail.com </a>
            <img src="imageS/worldmap.png" class="map" alt="">
        </div>

    </div>

    <div class="share">
        <a href="#" class="fab fa-facebook-f"></a>
        <a href="#" class="fab fa-twitter"></a>
        <a href="#" class="fab fa-instagram"></a>
        <a href="#" class="fab fa-linkedin"></a>
        <a href="#" class="fab fa-pinterest"></a>
    </div>

    <div class="credit">| created by TEAM INNOVATOR | </div>

</section>

<!-- footer section ends -->


    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>


      var swiper = new Swiper(".mySwiper", {
        slidesPerView: 3,
        spaceBetween: 30,
        slidesPerGroup: 3,
        loop: true,
        loopFillGroupWithBlank: true,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
          autoplay: {
    delay: 2000,
  },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });
    </script>

	<!--   Js files-->

	<!-- <script src="Js/bootstrap.min.js"></script> -->
	<script src="Js/jquery-3.6.0.min.js"></script>
	<script src="Js/owl.carousel.min.js"></script>
	<script src="Js/script.js"></script>

</body>
</html>
