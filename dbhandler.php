<?php 
    session_start();
    $con = mysqli_connect("localhost", "root", "", "hospital_management_system");
   
    if (isset($_POST['login_submit'])) {   
        $username=$_POST['username'];
        $password=$_POST['password'];
        $query = "select * from logintb where username = '$username' and password = '$password'";
        $result = mysqli_query($con, $query);
        if (mysqli_num_rows($result) == 1) {

            $_SESSION['username']=$username;
            header("Location: admin-panel.php");
        } else {
            echo "<script>alert('Enter correct details to have access to the admin panel.');</script>";
            echo "<script>window.open('index.php', '_self')</script>";
        }
    } 

    if (isset($_POST['pat_submit'])) {
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $email=$_POST['email'];
        $contact=$_POST['contact'];
        $docapp=$_POST['docapp'];
        $payment=$_POST['payment'];

        $query = "insert into doctorapp(fname, lname, email, contact, docapp, payment)
                 values('$fname', '$lname', '$email', '$contact' ,'$docapp', '$payment')";
        $result=mysqli_query($con, $query);
        if ($result) {
            echo "<script>alert('Appointment registered.');</script>";
            echo "<script>window.open('admin-panel.php', '_self')</script>";
        }
    }

    function get_patient_details(){
        global $con;
        $query = "select * from doctorapp";
        $result = mysqli_query($con, $query);
        while ($row = mysqli_fetch_array($result)) {
            $fname=$row['fname'];
            $lname=$row['lname'];
            $email=$row['email'];
            $contact=$row['contact'];
            $docapp=$row['docapp'];
            $payment=$row['payment'];
            
            echo "
            <tr>
            <td>$fname</td>
            <td>$lname</td>
            <td>$email</td>
            <td>$contact</td>
            <td>$docapp</td>
            <td>$payment</td>
            </tr>";
        }
    }

    if (isset($_POST['update_data'])) {
        $email = $_POST['email'];
        $status =$_POST['status'];
        $query="update doctorapp set payment='$status' where email='$email'";
        $result = mysqli_query($con, $query);
        if ($result) {
            header("Location:update.php");
        }
    }

    function display_docs(){
        global $con;
        $query = "select * from docname";
        $result = mysqli_query($con, $query);
        while ($row = mysqli_fetch_array($result)) {
            $name = $row['name'];
            echo '<option value="'.$name.'">'.$name.'</option>';
        }
    }

    if (isset($_POST['doc_sub'])) {
        $name=$_POST['name'];
        $query="insert into docname(name)
                values('$name')";
        $result=mysqli_query($con,$query);
        if ($result) {
            header("Location:addDoc.php");
        }
    }

    function display_admin_panel(){
        echo '<!DOCTYPE html>
       
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
        <body>
            
            
            </div>
            <div class="container-fluid">
            <div class="jumbotron">
                <div class="row">
                    <div class="col-md-3">
                        <div class="list-group">
                            <a href="#" class="list-group-item active";>Patients</a>
                            <a href="patient-details.php" class="list-group-item">Patient Details</a>
                            <a href="paymentStatus.php" class="list-group-item">Payment Status</a>
                        </div>
                        <hr>
                        <div class="list-group">
                            <a href="#" class="list-group-item active">Staff</a>
                            <a href="doctor-sec.php" class="list-group-item">Doctors Section</a>
                        </div>
                        <hr>
                        
                    </div>
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-body" style="background-color: #337ab7;">
                                <h3 class="text-white text-center">Book an appointment</h3>
                            </div>
                            <div class="card-body">
                                <form action="dbhandler.php" class="form-group" method="POST">
                                    <input type="text" name="fname" class="form-control" placeholder="First Name"><br>
                                    <input type="text" name="lname" class="form-control" placeholder="Last Name"><br>
                                    <input type="email" name="email" class="form-control" placeholder="Email ID"><br>
                                    <input type="tel" name="contact" class="form-control" placeholder="Contact">
                                    <label for="doctor">Doctor Appointment:</label>
                                    <select class="form-control" name="docapp">
                                        <?php echo get_patient_details();?>
                                    </select><br>
                                    <label for="doctor">Payment:</label>
                                    <select class="form-control mb-4" name="payment">
                                        <option value="Paid">Paid</option>
                                        <option value="pay later">Pay later</option>
                                    </select>
                                    <input type="submit" name="pat_submit" value="Enter Appointment" class="btn text-white" style="background-color: #337ab7;"></input>
                                </form>
                                <div class="list-group">
                                  <a href="logout.php" class="list-group-item-sm active bg-danger text-center">Sign Out - <span><i class="fa fa-sign-out fa-sm"></i></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-1"></div>
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
        </html>';
    }
;?>