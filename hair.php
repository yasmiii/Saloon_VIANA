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
        #reviews{
            margin-top:5%;
        }

        /* Create two equal columns that floats next to each other */
        .column {
        float: left;
        width: 50%;
        padding: 10px;
        }

        .column img {
        margin-top: 12px;
        }

        /* Clear floats after the columns */
        .row:after {
        content: "";
        display: table;
        clear: both;
        }
        
    </style>

</head>
<body>

<?php @include 'header.php'; ?>
    
<section class="reviews" id="reviews">

<h1 class="heading"> HAIR CUTS & STYLES </h1>

    <div class="row"> 
        <div class="column">
            <img src="./images/gallery/hair-1.jpg" style="width:100%">
            <img src="./images/gallery/hair-2.jpg" style="width:100%">
            <img src="./images/gallery/hair-3.jpg" style="width:100%">
            <img src="./images/gallery/hair-4.jpg" style="width:100%">
            <img src="./images/gallery/hair-5.jpg" style="width:100%">
            <img src="./images/gallery/hair-6.jpg" style="width:100%">
            <img src="./images/gallery/hair-7.jpg" style="width:100%">
            <img src="./images/gallery/hair-8.jpg" style="width:100%">
            <img src="./images/gallery/hair-9.jpg" style="width:100%">
            <img src="./images/gallery/hair-10.jpg" style="width:100%">
        </div>
        <div class="column">
            <img src="./images/gallery/hair-11.jpg" style="width:100%">
            <img src="./images/gallery/hair-12.jpg" style="width:100%">
            <img src="./images/gallery/hair-13.jpg" style="width:100%">
            <img src="./images/gallery/hair-14.jpg" style="width:100%">
            <img src="./images/gallery/hair-15.jpg" style="width:100%">
            <img src="./images/gallery/hair-16.jpg" style="width:100%">
            <img src="./images/gallery/hair-17.jpg" style="width:100%">
            <img src="./images/gallery/hair-18.jpg" style="width:100%">
            <img src="./images/gallery/hair-20.jpg" style="width:100%">
        </div>
    </div>

</section>

<?php @include 'footer.php'; ?>

</body>
</html>




