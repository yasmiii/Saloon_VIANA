<?php

@include 'config.php';


    if(isset($_POST['make_appoinment'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $number = $_POST['number'];
        $date = $_POST['date'];
     
        $insert_query = mysqli_query($conn, "INSERT INTO `contact_form`(name, email, number, date) VALUES('$name', '$email', '$number', '$date')") or die('query failed');
     
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
        #contact{
            margin-top:5%;
        }
    </style>

</head>
<body>

<?php @include 'header.php'; ?>

 
    <section class="contact" id="contact">

        <h1 class="heading">make appointment</h1>

        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <?php 
            if(isset($message)){
                foreach($message as $message){
                    echo '<p class="message">'.$message.'</p>';
                }
            }
        ?>

        <span>your name :</span>
        <input type="text" name="name" placeholder="enter your name" class="box" required>
        <span>your email :</span>
        <input type="email" name="email" placeholder="enter your email" class="box" required>
        <span>your contact number :</span>
        <input type="text" name="number" placeholder="enter your number" class="box" required>
        <span>appointment date & time :</span>
        <input type="datetime-local" name="date" class="box" required>
        <input type="submit" value="make appointment" name="make_appoinment" class="link-btn">
        </form>  

    </section>


</div>



<?php @include 'footer.php'; ?>

</body>
</html>

