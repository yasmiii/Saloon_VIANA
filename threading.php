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
            <img src="images/threading.jpg" class="w-100 mb-5 mb-md-0" alt="">
         </div>

         <div class="col-md-6 content">
            <h1>Threading</h1>
            <p>We are experts in brow shaping and take extra care to make arches that are ideal for you. We take our time with each customer in order to provide you with the greatest service and results that meet your demands since we view threading as an art form rather than merely a quick way to get rid of facial hair.</p>
         

    <table class="table table-hover" style="padding: 50px;">
        <tbody>
        <tr>
            <td>Eye Brows</td>
            <td>Rs.200/-</td>
        </tr>
        <tr>
            <td>Upper Lip</td>
            <td>Rs.200/-</td>
        </tr>
        <tr>
            <td>Chin</td>
            <td>Rs.200/-</td>
        </tr>
        <tr>
            <td>Sides</td>
            <td>Rs.200/-</td>
        </tr>
        <tr>
            <td>Full Face</td>
            <td>Rs.1000/-</td>
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