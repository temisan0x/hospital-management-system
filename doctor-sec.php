<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- Place favicon.ico in the root directory -->
     <link rel="stylesheet" href="./bootstrap.min(1).css">
    <script src="./jquery.min.js(1).download"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="./bootstrap.min.js(1).download"></script>

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
    <link rel="stylesheet" href="jquery-ui.css">
    <!-- User style -->
    <link rel="stylesheet" href="css/custom.css">
    <title>Hospital Management System</title>
</head>

    <div class="jumbotron">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="mb-3">
            <a href="admin-panel.php" class="btn btn-primary active" role="button" aria-pressed="true"><span><i class="fa fa-arrow-circle-o-left" aria-hidden="true"></i></span></a>
          </div>
          <br>
          <div class="card">
            <div class="card-body">
                <h3 class="text-white text-center">Book an appointment</h3>
                    <div>
                        <form action="dbhandler.php" method="POST">
                            
                            <div class="input-group input-group-sm mb-3">
                           <span class="input-group-text span text-blue border border-dark" id="inputGroup-sizing-sm"><i class="fa fa-user-md" aria-hidden="true"></i></span>
                           <input type="text" class="form-control" name="name"  placeholder="Enter Doctor's name" aria-describedby="inputGroup-sizing-sm">
                         </div>
                            <div class="form-group text-center">
                                <button type="submit" value="update" class="btn btn-primary" name="doc_sub">Add Doctor</button>
                            </div>
                        </form>        
                    
                    </div>    
                 
                </div>
           </div>
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