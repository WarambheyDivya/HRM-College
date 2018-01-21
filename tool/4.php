<?php 
$page = 'other';

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
            <div class="row" style="width: 40%; margin: 2% 0 10% 5%;">
                <h2 style=" font-weight: bold;">Other Information</h2>
                <form style="padding-top: 6%;" action="other_info.php" method="post">
                    <div class="form-group row">
                        <label for="inputTeaching" class="col-sm-2 col-form-label">Gender</label>
                        <div class="col-sm-10">
                            <select id="inputExam1" class="form-control" name="gender">
                                <option selected>None</option>
                                <option value="yes">Male</option>
                                <option value="no">Female</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputAppointment" class="col-sm-2 col-form-label">Date of Appointment</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" name="date_appointment" id="inputAppointment" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputJoining" class="col-sm-2 col-form-label">Date of joining</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" name="date_joining" id="inputjoining">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputRelegion" class="col-sm-2 col-form-label">Religion</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="relegion" id="inputRelegion" placeholder="Ex. Hindu">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputTelephone" class="col-sm-2 col-form-label">Tele. number</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="telephone" id="inputTelephone" placeholder="Ex. 943143XXXX">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputAddress" class="col-sm-2 col-form-label">Permanet Address</label>
                        <div class="col-sm-10">
                            <input type="text-area" class="form-control" name="address" id="inputAddress" placeholder="Address">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputCity" class="col-sm-2 col-form-label">City</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="city" id="inputCity" placeholder="Ex. Pune">
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
