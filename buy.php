<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Get Coffe</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    
<!-- header section starts  -->

<header class="header">

    <div id="menu-btn" class="fas fa-bars"></div>

    <a href="index.php" class="logo"> E-Get Coffe <i class="fas fa-mug-hot"></i> </a>

    <nav class="navbar">
        <a href="#home">home</a>
        <a href="#about">about</a>
        <a href="#menu">menu</a>
        <a href="#review">review</a>
        <a href="#book">book</a>
    </nav>

    <a href="#" class="btn">book a table</a>

</header>

<!-- header section ends -->



<!-- book section starts  -->

<section class="book" id="book" style="margin-top: 100px;">

    <h1 class="heading"> booking <span>reserve a table</span> </h1>

    <form action="./buy.inc.php" method="POST">

        <input type="text" placeholder="your names" name="username" class="box">
        <input type="text" placeholder="your phone number" name="phone" class="box">
        <input type="text" placeholder="ur location" name="loc" class="box">
        <input type="text" placeholder="enter cofffe u hve choosen" name="coffee" class="box">
        <input type="email" placeholder="your email" name="email" class="box">
        <input type="number" placeholder="number of cups" name="cups" class="box">


        <input type="submit" value="Buy" class="btn">

    </form>

</section>

<!-- book section ends -->

<!-- footer section starts  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>our branches</h3>
            <a href="#"> <i class="fas fa-arrow-right"></i> india </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> USA </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> france </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> africa </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> Japan </a>
        </div>

        <div class="box">
            <h3>quick links</h3>
            <a href="#home"> <i class="fas fa-arrow-right"></i> home </a>
            <a href="#about"> <i class="fas fa-arrow-right"></i> about </a>
            <a href="#menu"> <i class="fas fa-arrow-right"></i> menu </a>
            <a href="#review"> <i class="fas fa-arrow-right"></i> review </a>
            <a href="#book"> <i class="fas fa-arrow-right"></i> book </a>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a href="#"> <i class="fas fa-phone"></i> +250782953053 </a>
            <a href="#"> <i class="fas fa-phone"></i> +250722768777 </a>
            <a href="#"> <i class="fas fa-envelope"></i> irahari007@gmail.com </a>
            <a href="#"> <i class="fas fa-envelope"></i> Kigali, rwanda = 400104 </a>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
            <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
            <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
            <a href="https://www.instagram.com/_magentle_/?hl=en"> <i class="fab fa-instagram"></i> instagram </a>
            <a href="https://www.linkedin.com/in/imanirahari-didier-394458232?lipi=urn%3Ali%3Apage%3Ad_flagship3_profile_view_base_contact_details%3Brlan7USgT6yXPkwTbo9%2FKQ%3D%3D"> <i class="fab fa-linkedin"></i> linkedin </a>
        </div>

    </div>

    <div class="credit"> creatd by <span>mr. Didier IMANIRAHARI</span> | all rights reserved </div>

</section>

<!-- footer section ends -->

<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>