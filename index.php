<?php

$conn = mysqli_connect('localhost','root','','salon') or die('connection failed');

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = $_POST['number'];
   $date = $_POST['date'];

   $insert = mysqli_query($conn, "INSERT INTO `contact_form`(name, email, number, date) VALUES('$name','$email','$number','$date')") or die('query failed');

   if($insert){
      $message[] = 'appointment made successfully!';
   }else{
      $message[] = 'appointment failed';
   }

}

?>


<!-- review -->
<?php

@include 'config.php';

if(isset($_POST['review'])){

   $person_name = $_POST['person_name'];
   $person_comment = $_POST['person_comment'];
   $person_img = $_POST['person_img'];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Salon Vianna</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Trirong">
   <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"> -->

   <!-- bootstrap cdn link  -->
   <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css"> -->

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

   <link href="./bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" />

   <style>
      #home-page{
            margin-top:5%;
        }

      .col-md-12{
         background-image: url("images/about-img.jpg")no-repeat;
         /* background-size: cover;
         background-position: center; */
      }

      .my-img {
            position: relative;
            width: 100%;
        }

        .image {
            opacity: 1;
            display: block;
            width: 100%;
            height: auto;
            transition: .5s ease;
            backface-visibility: hidden;
        }

        .text {
            background-color: #00b8b8;
            color: white;
            font-size: 16px;
            padding: 16px 32px;
        }

        .middle {
            transition: .5s ease;
            opacity: 0;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            text-align: center;
        }

        .my-img:hover .image {
            opacity: 0.3;
        }

        .my-img:hover .middle {
            opacity: 1;
        }
   </style>

</head>
<body>
   
<!-- header section starts  -->

<?php @include 'header.php'; ?>

<!-- header section ends -->

<!-- home section starts  -->

<section>
      <div class="back-image"></div>
      <div class="back-text">
         <div style="background-color: #fff; opacity:70%;">
         <p style="color: black;">
         Salon <span style="font-size: 2.5rem; color: #00b8b8;">VIANNA</span> for more than a decade,<br>
         has been on the forefront of unveiling the feminine elegance.<br>
         We provide excellent service in hair care, beauty care and bridal dressing.<br>
         Our herbal spa treatments has been able to maintain a steady flow of clients throughout.<br> 
         They visit us to get themselves pampered in our professional hands.<br> 
         We also offer full time and part time courses in hair and beauty care.<br> 
         We aim to help the enthusiastic youth seeking a career in the current beauty industry.<br>
         </p>
         <!-- <a href="about.php" class="nav-item nav-link"> -->
         </div>
      </div>
    </section>

<!-- home section end  -->


<!-- gallery starts  -->
<h1 class="heading"> Gallery </h1>

<div class="container">
    <div class="row mt-5 mb-5">
        <div class="col-md-4">
            <div class="container my-img">
                <img src="./images/bride.jpg " alt="Avatar" class="image" style="width:100%">
                <div class="middle">
                    <div class="text"><a href="bride.php" style="text-decoration:none; color:white;">BRIDAL</a></div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="container my-img">
                <img src="./images/casual.jpg " alt="Avatar" class="image" style="width:100%">
                    <div class="middle">
                        <div class="text"><a href="casual.php" style="text-decoration:none; color:white;">CASUAL</a></div>
                    </div>
            </div>
         </div>

         <div class="col-md-4">
            <div class="container my-img">
                <img src="./images/hair.jpg " alt="Avatar" class="image" style="width:100%">
                    <div class="middle">
                        <div class="text"><a href="hair.php" style="text-decoration:none; color:white;">HAIR STYLES</a></div>
                    </div>
            </div>
        </div>
    </div>
</div>

<!--gallery ends -->


<!-- review section starts  -->





<section class="display-review">

   <h1 class="heading">REVIEWS</h1>


   <div class="box-container">

   <div class="row">

  

<?php

$select_review = mysqli_query($conn, "SELECT * FROM review");
if(mysqli_num_rows($select_review) > 0){
   while($fetch_review = mysqli_fetch_assoc($select_review)){
?>


   <div class="box col-md" name="review">
      <img src="./uploaded_img/review/<?php echo $fetch_review['img']; ?>" style="width: 200px; height:300px;">
      <div>
      <?php echo $fetch_review['name']; ?>
      </div>
        <div>
        <?php echo $fetch_review['comment']; ?>
        </div>
   </div>


<?php
   }
};
?>
 </div>
</div>


</section>
   

   




<?php @include 'footer.php'; ?>

<!-- footer section ends -->





<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>







