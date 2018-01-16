<?php 
$page = 'qualification';

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
                <h2 style=" font-weight: bold;">Qualification Details</h2>
                <form style="padding-top: 6%;" action="qualification.php" method="post">
                    <div class="form-group row">
                        <label for="inputQualification1" class="col-sm-2 col-form-label">Qualification 1 </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="qualification1" id="inputQualification1" placeholder="Qualification">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputQualification2" class="col-sm-2 col-form-label">Qualification 2 </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="qualification2" id="inputQualification2" placeholder="Qualification">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputQualification3" class="col-sm-2 col-form-label">Qualification 3 </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="Qualification3" id="inputQualification3" placeholder="Qualification">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPhd" class="col-sm-2 col-form-label">PHD Status</label>
                        <div class="col-sm-10">
                            <select name="php" id="inputPhd" class="form-control">
                                <option>Completed</option>
                                <option>Pursuing</option>
                                <option selected>No PHD</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputAppointment" class="col-sm-2 col-form-label">Completed</label>
                        <div class="col-sm-10">
                            <select name="completed" id="inputAppointment" class="form-control">
                                <option>SLET</option>
                                <option selected>NA</option>
                                <option>NET</option>
                            </select>
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
