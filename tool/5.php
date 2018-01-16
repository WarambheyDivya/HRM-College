<?php 
$page = 'qualification2';

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
                <h2 style=" font-weight: bold;">Qualification Details (detailed)</h2>
                <form style="padding-top: 6%;" action="persnol.php" method="post">
                    
                    <div class="form-group row">
                        <label for="inputTeaching" class="col-sm-2 col-form-label">Degree Type</label>
                        <div class="col-sm-10">
                            <select id="inputExam1" class="form-control">
                                <option selected>Matriculation</option>
                                <option>Intermidiate</option>
                                <option>Graduation</option>
                                <option>Post Graduation</option>
                                <option>Ph.D / D.Phil</option>
                                <option>D.Sc / D. Litt</option>
                                <option>Pursuing Ph.D</option>
                                <option>Other Examination</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputMarks" class="col-sm-2 col-form-label">Marks</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="marks" id="inputMarks" placeholder="Ex. 75" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputGrade" class="col-sm-2 col-form-label">Grade</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="grade" id="inputGrade" placeholder="Ex. A+">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputUniversityName" class="col-sm-2 col-form-label">Board / University Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="university_name" id="inputUniversityName" placeholder="University name" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputCollegeName" class="col-sm-2 col-form-label">College / School Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="college_name" id="inputCollegeName" placeholder="College /School name" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputDegree" class="col-sm-2 col-form-label">Degree Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="degree_name" id="inputDegree" placeholder="Degree name" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputSpecialization" class="col-sm-2 col-form-label">Specialization</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="specialization" id="inputSpecialization" placeholder="Specailization" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassing_year" class="col-sm-2 col-form-label">Year of Passing</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" name="passing_year" id="inputPassing_Year" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputDivision" class="col-sm-2 col-form-label">Division</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="division" id="inputDivision" placeholder="Division" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="customFile" class="col-sm-2 col-form-label">Upload Document</label>
                        <div class="col-sm-10">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="customFile">
                                <label class="custom-file-label" for="customFile">Choose file</label>
                            </div>
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
