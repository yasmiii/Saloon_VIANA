<?php

@include 'config.php';


    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $comment = $_POST['comment'];
        $img = $_FILES['img']['name'];
        $img_tmp_name = $_FILES['img']['tmp_name'];
        $img_folder = 'uploaded_img/review/'.$img;
      
     
        $insert_query = mysqli_query($conn, "INSERT INTO `review`(name, comment, img) VALUES('$name', '$comment', '$img')") or die('query failed');

         if($insert_query){
            move_uploaded_file($img_tmp_name, $img_folder);
            $message[] = 'details add succesfully';
         }else{
            $message[] = 'could not add details';
         }
     

     };
?>

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
        #review{
            margin-top:5%;
        }
    </style>

</head>
<body>

<?php @include 'header.php'; ?>

<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>
 
    <section class="review contact" id="review">

        <h1 class="heading">put a review</h1>

        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="needs-validation" enctype="multipart/form-data" novalidate style="width:100%;height:100%;left-padding:200px">

        <?php 
            if(isset($message)){
                foreach($message as $message){
                    echo '<p class="message">'.$message.'</p>';
                }
            }
        ?>

        <span>Your Name :</span>
        <input type="text" name="name" placeholder="enter your name" class="box" required>
        <span>Your Comment about Us :</span>
        <textarea class="box" name="comment" id="exampleFormControlTextarea1" rows="4"  required></textarea>
        <span>Add Photograph :</span>
        <input type="file" name="img" accept="image/png, image/jpg, image/jpeg" class="box" required>
        <input type="submit" value="Submit" name="submit" class="link-btn">
        </form>  

    </section>


</div>



<?php @include 'footer.php'; ?>

</body>
</html>

