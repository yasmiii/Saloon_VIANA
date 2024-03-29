<?php

@include 'config.php';


    if(isset($_POST['join_submit'])){
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $address = $_POST['address'];
        $mail = $_POST['mail'];
        $contact = $_POST['contact'];
        $why = $_POST['why'];
        $qualifications = $_POST['qualifications'];
        $another = $_POST['another'];
        $past_img = $_FILES['past_img']['name'];
        $past_img_tmp_name = $_FILES['past_img']['tmp_name'];
        $past_img_folder = 'uploaded_img/'.$past_img;
            
        $insert_query = mysqli_query($conn, "INSERT INTO `join_us`(fname, lname, address, mail, contact, why, qualifications, another, past_img) VALUES('$fname', '$lname', '$address', '$mail', '$contact', '$why', '$qualifications', '$another', '$past_img')") or die('query failed');
     
        if($insert_query){
            move_uploaded_file($past_img_tmp_name, $past_img_folder);
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

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

        <!-- custom css file link  -->
        <link rel="stylesheet" href="css/style.css">

        <link href="./bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" />

    <style>
        #join{
            margin-top:5%;
        }

        form{
            font-size: 1.8rem;
        }

        .form-control{
            height: 50px;
            font-size: 1.5rem;
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
    
<section class="join" id="join">

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="needs-validation" enctype="multipart/form-data" novalidate style="width:100%;height:100%;left-padding:200px">

    <?php 
        if(isset($message)){
            foreach($message as $message){
                 echo '<p class="message">'.$message.'</p>';
            }
        }
    ?>


        <h1 class="container" style="color:white;text-align:center;background-color:#00b8b8; height:50px;aligh:center;padding:10px">Artist Registration Form</h1>
        <br>
        <br>
        <div class="container" style="border:solid 2px #00b8b8;padding:100px;">
        <div class="row">
            <div class="col">
            <label for="validationCustom01">First name</label>
            <input type="text" name="fname" class="form-control" id="validationCustom01" placeholder="First name" value="" required>
            <div class="valid-feedback">
                Looks good!
            </div>
            </div>
            <div class="col">
            <label for="validationCustom01">Last name</label>
            <input type="text" name="lname" class="form-control" id="validationCustom01" placeholder="Last name" value="" required>
            <div class="valid-feedback">
                Looks good!
            </div>
            </div>
        </div>  
        <br>

        <div class="row">
            <div class="col">
            <label for="validationCustom04">Address</label>
            <input type="text" name="address" class="form-control" id="validationCustom06" placeholder="Address"  required>
            <div class="valid-feedback">
                Looks good!
            </div>
            
            </div>
        </div>
        <br>

        <div class="row">
            <div class="col">
            <label for="validationCustom04">E-mail</label>
            <input type="text" name="mail" class="form-control" id="validationCustom07" placeholder="gmail"  required>
            <div class="valid-feedback">
                Looks good!
            </div>
            
            </div>
        </div>
        <br>

        <div class="row">
            <div class="col">
            <label for="validationCustom04">Phone Number</label>
            <input type="text" name="contact" class="form-control" id="validationCustom08" placeholder="07xxxxxxxx"  required>
            <div class="valid-feedback">
                Looks good!
            </div>
            
            </div>
        </div>
        <br>


        <div class="row">
            <div class="col">
            <label for="validationCustom04">Why are you registered as Artist?</label>
            <textarea class="form-control" name="why" id="exampleFormControlTextarea1" rows="3"  required></textarea>
            <div class="valid-feedback">
                Looks good!
            </div>
            
            </div>
        </div>
        <br>

        <div class="row">
            <div class="col">
            <label for="validationCustom04">what are your skills, experiance and qualifications for join with us?</label>
            <textarea class="form-control" name="qualifications" id="exampleFormControlTextarea1" rows="3"  required></textarea>
            <div class="valid-feedback">
                Looks good!
            </div>
            
            </div>
        </div>
        <br>

        <div class="col">
            <label for="validationCustom01">Do you have work as artist in another beauty salon?</label>
            <input type="text" name="another" class="form-control" id="validationCustom01" placeholder="Yes or No" value="" required>
            <div class="valid-feedback">
                Looks good!
            </div>
        </div>
        <br>

        <div class="row">
            <div class="col">
            
            <label for="exampleFormControlFile1">Add your Past Works as artist.</label>
            <input type="file" name="past_img" accept="image/png, image/jpg, image/jpeg" class="form-control-file" id="exampleFormControlFile1" required>
            <div class="valid-feedback">
                Looks good!
            </div>
            
            </div>
        </div>
        <br>

        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
            <label class="form-check-label" for="invalidCheck">
                Agree to terms and conditions
            </label>
            <div class="invalid-feedback">
                You must agree before submitting.
            </div>
            </div>
        </div>
        <br>

        <div class="row">
            <div class="col">
            <button class="btn" name="join_submit" style="background-color:#00b8b8; color:white; width:300px; height:50px; font-size: 1.8rem;" type="submit">Submit</button>
            </div>
        
            <div class="col">
            <button class="btn "style="background-color:#045F5F; color:white; width:300px; height:50px; font-size: 1.8rem;" type="reset">Reset</button>
            </div>
        </div>
        
        </div>
    </form>
</section>


<?php @include 'footer.php'; ?>

</body>
</html>