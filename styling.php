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
            <img src="images/styling.jpg" class="w-100 mb-5 mb-md-0" alt="">
         </div>

         <div class="col-md-6 content">
            <h1>Hair Styling</h1>
            <p>The talented team at our hair salon can give you the conditioning treatment, blowout and style you’re looking for. We have extensive industry experience and will work hard to meet your every need. We know that when you book a salon service, you’ll want to be pampered and taken care of. Our attentive staff will go the extra mile to give you the great experience you deserve.</p>
         

    <table class="table table-hover" style="padding: 50px;">
        <tbody>
        <tr>
            <td>Relaxing</td>
            <td>Rs.9000/- upwards</td>
        </tr>
        <tr>
            <td>Re-Bonding</td>
            <td>Rs.10000/- upwards</td>
        </tr>
        <tr>
            <td>Perming</td>
            <td>Rs.10000/- upwards</td>
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