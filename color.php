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
            <img src="images/color.jpg" class="w-100 mb-5 mb-md-0" alt="">
         </div>

         <div class="col-md-6 content">
            <h1>Hair Coloring</h1>
            <p>Our highly skilled professionals conduct all of our color and texture treatments after completing a thorough program of advanced training after completing our basic apprenticeship, learning cutting and styling as well as a basic color course. This personalized, multi-dimensional coloring is done using our signature technique and results in beautiful hair that comes alive with shine and depth.</p>
         

    <table class="table table-hover" style="padding: 50px;">
        <tbody>
        <tr>
            <td>Full Head Color</td>
            <td>Rs.3500/- upwards</td>
        </tr>
        <tr>
            <td>Hair Color Fashion (Ladies)</td>
            <td>Rs.3800/- upwards</td>
        </tr>
        <tr>
            <td>Hair Color Fashion (Gents)</td>
            <td>Rs.2800/- upwards</td>
        </tr>
        <tr>
            <td>Highlights (1/2 Head)</td>
            <td>Rs.3500/- upwards</td>
        </tr>
        <tr>
            <td>Highlights (Full Head)</td>
            <td>Rs.5000/- upwards</td>
        </tr>
        <tr>
            <td>Color Application</td>
            <td>Rs.1500/- upwards</td>
        </tr>
        </tbody>
    </table>

    <p style="text-align:center;">(Charges will depend on volume and length of the hair)</p>

    </div>
    </div>

   </div>
        
    </section>

<?php @include 'footer.php'; ?>

</body>
</html>