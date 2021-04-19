<html>
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
<?php 
include_once('dbhandler.php');
if (isset($_POST['patient_search_submit'])) {
    $email= $_POST['search'];
    $query= "select * from doctorapp where email = '$email'";
    $result = mysqli_query($con, $query);

    echo "<div class='container-fluid' style='margin-top: 20px;>
        <div class='card'>
        <a href= 'admin-panel.php' class= 'btn mb-2' style= 'background-color: #337ab7; color:white'>Go Back</a>
        <img src='./img/jumbotron.jpg' class= 'card-img-top' style='height: 300px;'>
        <div class='card-body'>
           <table class='table table-hover'>
             <thead>
              <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email id</th>
                <th>Contact</th>
                <th>Doctor Appointment</th>
                <th>Payment</th>
              </tr>
             </thead>
        ";


    while ($row = mysqli_fetch_array($result)) {
            $fname=$row['fname'];
            $lname=$row['lname'];
            $email=$row['email'];
            $contact=$row['contact'];
            $docapp=$row['docapp'];
            $payment=$row['payment'];
            $delete=$row['id'];

        echo "<tbody>
                <tr style= 'background-color: #337ab7; color:white'>
                  <td>$fname</td>
                  <td>$lname</td>
                  <td>$email</td>
                  <td>$contact</td>
                  <td>$docapp</td>
                  <td>$payment</td>
                </tr>
              </tbody>
              
           </table>";
    }
    echo "
    </tbody>
    </table>
    </div>
    </div>
    </div>
    ";
}  
;?>


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