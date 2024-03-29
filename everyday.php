<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
        <!-- font awesome cdn link  -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

        <!-- custom css file link  -->
        <link rel="stylesheet" href="css/style.css">

        <link href="./bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" />

    <style>
        #threading{
            margin-top:5%;
        }

        p{
            font-size: 1.5rem;
        }

        .col-md-4{
            margin-left: 20%;
            
        }

        td{
            text-align: center;
            height: 5rem;
        }

        .table {
            --bs-table-color: #fff;
            --bs-table-bg: #00b8b8;
            --bs-table-border-color: none;
            --bs-table-striped-bg: #00b8b8;
            --bs-table-striped-color: #fff;
            --bs-table-active-bg: #00b8b8;
            --bs-table-active-color: #fff;
            --bs-table-hover-bg: #323539;
            --bs-table-hover-color: #fff;
            color: var(--bs-table-color);
            border-color: var(--bs-table-border-color);
            font-size: 1.5rem;
        }
    </style>

</head>
<body>

<?php @include 'header.php'; ?>
    
    <section class="threading" id="threading">

    <div class="container">

      <div class="row align-items-center">

        

         <div class="col-md-6 content">
            <h1>Everyday</h1>
            <p>We offer a variety of hair services, including treatments for your daily requirements. <br> (Between 9.00 am to 8.00 pm)</p>
         

    <table class="table table-hover">
        <tbody>
        <tr>
            <td>Hair Style</td>
            <td>Rs.1500/-</td>
        </tr>
        <tr>
            <td>Make Up</td>
            <td>Rs.1500/-</td>
        </tr>
        <tr>
            <td>Saree Drape</td>
            <td>Rs.1500/-</td>
        </tr>
        <tr>
            <td>Full Dressing</td>
            <td>Rs.3500/-</td>
        </tr>
        </tbody>
    </table>


    </div>
    <div class="col-md-6 image">
            <img src="images/everyday.jpg" class="w-100 mb-5 mb-md-0" alt="">
         </div>
    </div>

   </div>

        
    </section>

<?php @include 'footer.php'; ?>

</body>
</html>