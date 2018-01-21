<?php 
$page = 'experience';

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
                <h2 style=" font-weight: bold;">Experience Details</h2>
                <form style="padding-top: 6%;" action="experience.php" method="post">
                    <div class="form-group row">
                        <label for="inputTeaching" class="col-sm-2 col-form-label">Teaching Exp.</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="teaching_ex" id="inputTeaching" placeholder="Teaching exp.">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputIndustrial" class="col-sm-2 col-form-label">Industrial Exp.</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="industrial_ex" id="inputIndustrial" placeholder="Industrial exp.">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputResearch" class="col-sm-2 col-form-label">Research Exp.</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="research_ex" id="inputResearch" placeholder="Research exp.">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputExam1" class="col-sm-2 col-form-label">Exp. as univsersity exam evaluator</label>
                        <div class="col-sm-10">
                            <select id="inputExam1" class="form-control">
                                <option value="yes">Yes</option>
                                <option value="no" selected>No</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row" id="hidden" style="display: block;">
                        <label for="inputPhd" class="col-sm-2 col-form-label">Exp. as univsersity exam evaluator</label>
                        <div class="col-sm-10">
                            <input type="text" placeholder="Years" id="inputExam2" name="exam_ex" class="form-control">
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
