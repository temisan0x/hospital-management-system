<!DOCTYPE html>
<?php include("dbhandler.php") ;?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- Place favicon.ico in the root directory -->
     <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    

    <!-- All css files are included here. -->
    <!-- Bootstrap fremwork main css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Owl Carousel min css -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <!-- This core.css file contents all plugings css file. -->
    <link rel="stylesheet" href="css/core.css">
    <!-- Theme shortcodes/elements style -->
    <link rel="stylesheet" href="css/shortcode/shortcodes.css">
    <!-- Theme main style -->
    <link rel="stylesheet" href="style.css">
    <!-- Responsive css -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- User style -->
    <link rel="stylesheet" href="css/custom.css">
    <title>Hospital Management System</title>
</head>
<body>

<div class="jumbotron">
<div class="container-fluid">
    <a href="admin-panel.php" class="btn btn-primary mb-2"><span><i class="fa fa-arrow-circle-o-left" aria-hidden="true"></i></span></a>
    <div class="card">
        <div class="card-body" style="background-color: #337ab7;">
        <div class="row">
            <div class="col-md-2">
                <h3 class="text-white bold mt-3" style="font-family: cursive; font-weight: 600;">Patient Details</h3>
            </div>
            <div class="col-md-8">
            <form class="form-group" method="POST" action="patient_search.php">
                <input type="text" name="search" class="form-control" placeholder="search box..">
            </div>
            <div class="col-md-1">
                <input type="submit" name="patient_search_submit" class="btn btn-info" value="search">
            </div>
          </div>
        </form>
        </div>
        
        <div class="row">
        <div class="card-body">
            <table class="table table-hover">
                <thead class="bg-white">
                    <tr class="bg-white">
                        <th class="bg-white">First Name</th>
                        <th class="bg-white">Last Name</th>
                        <th class="bg-white">Email id</th>
                        <th class="bg-white">Contact</th>
                        <th class="bg-white">Doctor Appointment</th>
                        <th class="bg-white">Payment</th>
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                       <?php get_patient_details();?>
                       <th>
                    </tbody>
            </table>
        </div>
        </div>
    </div>
</div>
</div>

 <!-- jquery latest version -->
    <script src="js/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap framework js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- All js plugins included in this file. -->
    <script src="js/plugins.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <!-- Waypoints.min.js. -->
    <script src="js/waypoints.min.js"></script>
    <!-- Main js file that contents all jQuery plugins activation. -->
    <script src="js/main.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

</body>
</html>