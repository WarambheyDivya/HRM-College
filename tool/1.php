<?php 
$page = 'personal';

?>



<?php
include 'footer.php'; 
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Sinhgad Technical Education Society</title>
    
    <?php include 'head.php'; ?>


  </head>

  <body>
    <section id="container">
    <?php include 'sidebar.php'; ?>
    
    <style>
        .col-sm-10 {
            padding-left : 10%;
        }
    </style>
        
    <section id="main-content">
        <section class="wrapper">
            <div class="row" style="width: 40%; margin: 5% 0 10% 5%;">
                <form action="persnol.php" method="post">
                    <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="email" id="inputEmail" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputName" name="name" placeholder="Full Name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputDesignation" class="col-sm-2 col-form-label">Designation</label>
                        <div class="col-sm-10">
                            <select name="designation" id="inputDesignation" class="form-control">
                                <option>Dean</option>
                                <option>Principal</option>
                                <option selected>Professor</option>
                                <option>Associate Prof.</option>
                                <option>Assistent prof.</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputAppointment" class="col-sm-2 col-form-label">Appointment</label>
                        <div class="col-sm-10">
                            <select name="appointment" id="inputAppointment" class="form-control">
                                <option selected>Full Time</option>
                                <option>Part Time</option>
                                <option>Visiting</option>
                                <option>Adhoc.</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputDob" class="col-sm-2 col-form-label">DOB</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" id="inputDob" name="dob">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputMobile" class="col-sm-2 col-form-label">Mobile</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputMobile" name="mobile" placeholder="Mobile">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputAddress" class="col-sm-2 col-form-label">Address</label>
                        <div class="col-sm-10">
                            <input type="textfield" class="form-control" id="inputAddress" name="address" placeholder="Address">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputZip" class="col-sm-2 col-form-label">ZIP code</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputZip" name="postal_code" placeholder="ZIP code">
                        </div>
                    </div>
                    <div class="form-group row">
                        <center>
                            <input type="submit" value="SAVE" class="btn btn-primary" />
                        </center>
                    </div>
                </form>
            </div>
        </section>
    </section>
    </section>

    <?php include 'footer.php'; ?>
  </body>
</html>
