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
        #about{
            margin-top:5%;
        }
    </style>

</head>
<body>

<?php @include 'header.php'; ?>
    
<section class="about" id="about">

   <div class="container">

      <div class="row align-items-center">

         <div class="col-md-6 image">
            <img src="images/about.jpg" class="w-100 mb-5 mb-md-0" alt="">
         </div>

         <div class="col-md-6 content">
            <h3>about us</h3>
            <p style="text-align: justify;">Salon <span style="color:#00b8b8;">VIANNA</span> for more than a decade, has been on the forefront of unveiling the feminine elegance providing excellent service in hair care, beauty care and bridal dressing. We also offer full time and part time courses in hair and beauty care for the enthusiastic youth seeking a career in the current beauty industry. Excellent and professional service, experienced and friendly staff, high quality and skin friendly products plus appealing sophistication are the key factors that help us earn our clients’ confidence and recommendation.</p>
         </div>

      </div>

   </div>

</section>

<?php @include 'footer.php'; ?>

</body>
</html>