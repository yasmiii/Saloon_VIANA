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

         <div class="col-md-6 image">
            <img src="images/facial-new.jpg" class="w-100 mb-5 mb-md-0" alt="">
         </div>

         <div class="col-md-6 content">
            <h1>Facial</h1>
            <p>For healthy skin, facials are necessary. They are the only thing that can actually unclog pores and are the greatest at removing dead skin cells. Here is a detailed explanation of what to anticipate from our trademark facial. We provide facials for all skin types, professional skin care products, and skilled estheticians.</p>
         

    <table class="table table-hover" style="padding: 50px;">
        <tbody>
        <tr>
            <td>Eye Treatment</td>
            <td>Rs.1200/-</td>
        </tr>
        <tr>
            <td>Mini Clean up</td>
            <td>Rs.1000/-</td>
        </tr>
        <tr>
            <td>Clean up</td>
            <td>Rs.1800/-</td>
        </tr>
        <tr>
            <td>Hand Scrub and Pack</td>
            <td>Rs.2200/-</td>
        </tr>
        <tr>
            <td>Glow Facial</td>
            <td>Rs.3500/-</td>
        </tr>
        <tr>
            <td>Gold Facial</td>
            <td>Rs.4000/-</td>
        </tr>
        </tbody>
    </table>


    </div>
    </div>

   </div>
        
    </section>

<?php @include 'footer.php'; ?>

</body>
</html>