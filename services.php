<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
        <!-- font awesome cdn link  -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

        <!-- bootstrap cdn link  -->
        <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css"> -->

        <!-- custom css file link  -->
        <link rel="stylesheet" href="css/style.css">

        <link href="./bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" />

    <style>
        #services{
            margin-top:5%;
        }

        .service {
            transition: transform 0.2s ease;
            box-shadow: 0 4px 6px 0 rgba(22, 22, 26, 0.18);
            border-radius: 0;
            border: 0;
            margin-bottom: 1.5em;
        }
        .service:hover {
            transform: scale(1.1);
        }
    </style>

</head>
<body>

<?php @include 'header.php'; ?>
    
    <section class="services" id="services">

    <h1 class="heading">our services</h1>

    <div class="box-container container">

    <div class="box service">
        <h3>Threading</h3>
        <p>Threading is an extremely effective way to remove unwanted body hair.  It is quick and relatively painless.<br><br><br></p>
        <a href="threading.php" class="link-btn ms-auto" style="color: white;">More Details</a>
    </div>

    <div class="box service">
        <h3>Manicure & Pedicure</h3>
        <p>Our highly experienced nail technicians will be happy to talk you through the treatments available. It is one of the key things that makes us unique from other nail salons. <br></p>
        <a href="manicure.php" class="link-btn ms-auto" style="color: white;">More Details</a>
        </div>

    <div class="box service">
        <h3>Facial</h3>
        <p>We offer the best facials. Our beauty therapists are expertly trained to give you a luxurious, specialized facial treatment to cater for your skins needs.<br><br></p>
        <a href="facial.php" class="link-btn ms-auto" style="color: white;">More Details</a>
    </div>

    <div class="box service">
        <h3>Hair Cuts</h3>
        <p>Our stylists are trained in a wide variety of skills and techniques. Our continuing education program ensures our entire team is constantly up-to-date on trends around the world.</p>
        <a href="cuts.php" class="link-btn ms-auto" style="color: white;">More Details</a>
    </div>

    <div class="box service">
        <h3>Hair Color</h3>
        <p>We make your hair color ideas a reality with professional results you won't get anywhere else. Our premium hair dye colors and options are not available in stores, offering tones and textures that most people only dream about. </p>
        <a href="color.php" class="link-btn ms-auto" style="color: white;">More Details</a>
    </div>

    <div class="box service">
        <h3>Hair Treatments</h3>
        <p>Enjoy professional hair care at its best with our collection. Enjoy a little treat for yourself and maximize the benefits of your hair care routine. As experts we pride ourselves in offering the latest innovations to help all hair types.</p>
        <a href="treatment.php" class="link-btn ms-auto" style="color: white;">More Details</a>
    </div>

    <div class="box service">
        <h3>Hair Styling</h3>
        <p>We give you exactly what you want. And if you’re looking for a little change, our experienced and passionate stylists will help you.<br><br><br><br></p>
        <a href="styling.php" class="link-btn ms-auto" style="color: white;">More Details</a>
    </div>

    <div class="box service">
        <h3>Everyday</h3>
        <p>We offer a variety of hair services, including treatments for your daily requirements. <br> (Between 9.00 am to 8.00 pm) <br><br><br><br></p>    
        <a href="everyday.php" class="link-btn ms-auto" style="color: white;">More Details</a>
    </div>


</section>

<?php @include 'footer.php'; ?>

</body>
</html>

