
<!DOCTYPE html>

<?php
  session_start();
  $email = $_SESSION['teacher'];

  include('getDB.php');
?>


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
         <div class="container">  
                <h3>Personal Details</h3>  
                <br />  
                <div class="table-responsive">  
                     <table id="student_details" class="table table-striped table-bordered">  
                          <thead>  
                               <tr>  
                                    <td>Email</td>  
                                    <td>Name</td>  
                                    <td>Designation</td>  
                                    <td>Dob</td>  
                                    <td>Mobile</td>
                                    <td>Address</td>
                                    <td>Postal Code</td>
                                    <td>Appointment</td>
                       </tr>  
                          </thead>  
                          <?php
                          $q = "SELECT * FROM `persnol_details` WHERE `email` = '$email'";
                          $result = mysqli_query($con, $q);
                         if($result)
                          while($row =  mysqli_fetch_array($result))  
                          {  
                               echo '  
                               <tr>  
                                    <td>'.$row["email"].'</td>  
                                    <td>'.$row["name"].'</td>  
                                    <td>'.$row["designation"].'</td>  
                                    <td>'.$row["dob"].'</td>  
                                    <td>'.$row["mobile"].'</td>
                                    <td>'.$row["address"].'</td>
                                    <td>'.$row["postal_code"].'</td>
                                    <td>'.$row["appointment"].'</td>
                                </tr>  
                               ';  
                          }  
                          ?>  
                     </table>
                    
                    
                    
                </div>  
           </div>
            <div class="container">  
                <h3 >Qualification</h3>  
                <br />  
                <div class="table-responsive">  
                     <table id="student_details" class="table table-striped table-bordered">  
                          <thead>  
                               <tr> 
                                    <td>Email</td>  
                                    <td>qualification_1</td>  
                                    <td>qualification_2</td>  
                                    <td>qualification_3</td>  
                                    <td>phd_status</td>
                                    <td>completed</td>
                                    
                       </tr>  
                          </thead>  
                          <?php
                          $q = "SELECT * FROM `qualification` WHERE `email` = '$email'";
                          $result = mysqli_query($con, $q);
                         if($result)
                          while($row =  mysqli_fetch_array($result))  
                          {  
                               echo '  
                               <tr>  
                                    <td>'.$row["email"].'</td>  
                                    <td>'.$row["qualification_1"].'</td>  
                                    <td>'.$row["qualification_2"].'</td>  
                                    <td>'.$row["qualification_3"].'</td>  
                                    <td>'.$row["phd_status"].'</td>
                                    <td>'.$row["completed"].'</td>
                                </tr>  
                               ';  
                          }  
                          ?>  
                     </table>
                    
                    
                    
                </div>  
           </div>
            <div class="container">  
                <h3 >Qualification (Detailed)</h3>  
                <br />  
                <div class="table-responsive">  
                     <table id="student_details" class="table table-striped table-bordered">  
                          <thead>  
                               <tr>  
                                    <td>Email</td>  
                                    <td>select_degree</td>  
                                    <td>marks</td>  
                                    <td>grade</td>  
                                    <td>board</td>
                                    <td>college</td>
                                    <td>degree_name</td>
                                    <td>specialization</td>
                                    <td>year_of_passing</td>
                                    <td>division</td>
                                    <td>marksheet</td>
                       </tr>  
                          </thead>  
                          <?php
                          $q = "SELECT * FROM `detailed_qualification` WHERE `email` = '$email'";
                          $result = mysqli_query($con, $q);
                         if($result)
                          while($row =  mysqli_fetch_array($result))  
                          {  
                               echo '  
                               <tr>  
                                    <td>'.$row["email"].'</td>  
                                    <td>'.$row["select_degree"].'</td>  
                                    <td>'.$row["marks"].'</td>  
                                    <td>'.$row["grade"].'</td>  
                                    <td>'.$row["board"].'</td>
                                    <td>'.$row["college"].'</td>
                                    <td>'.$row["degree_name"].'</td>
                                    <td>'.$row["specialization"].'</td>
                                    <td>'.$row["year_of_passing"].'</td>
                                    <td>'.$row["division"].'</td>
                                    <td>'.$row["marksheet"].'</td>
                                </tr>  
                               ';  
                          }  
                          ?>  
                     </table>
                    
                    
                    
                </div>  
           </div>
            <div class="container">  
                <h3 >Experience</h3>  
                <br />  
                <div class="table-responsive">  
                     <table id="student_details" class="table table-striped table-bordered">  
                          <thead>  
                               <tr>  
                                    <td>email</td>  
                                    <td>teaching</td>  
                                    <td>industrial</td>  
                                    <td>research</td>  
                                    <td>uni_exam_evaluator</td>
                                    
                       </tr>  
                          </thead>  
                          <?php
                          $q = "SELECT * FROM `experience` WHERE `email` = '$email'";
                          $result = mysqli_query($con, $q);
                         if($result)
                          while($row =  mysqli_fetch_array($result))  
                          {  
                               echo '  
                               <tr>  
                                    <td>'.$row["email"].'</td>  
                                    <td>'.$row["teaching"].'</td>  
                                    <td>'.$row["industrial"].'</td>  
                                    <td>'.$row["research"].'</td>  
                                    <td>'.$row["uni_exam_evaluator"].'</td>
                                    
                                </tr>  
                               ';  
                          }  
                          ?>  
                     </table>
                    
                    
                    
                </div>  
           </div>
           <div class="container">  
                <h3 >Other Info</h3>  
                <br />  
                <div class="table-responsive">  
                     <table id="student_details" class="table table-striped table-bordered">  
                          <thead>  
                               <tr>  
                                    <td>email</td>  
                                    <td>gender</td>  
                                    <td>telephone</td>  
                                    <td>date_of_joining</td>  
                                    <td>per_address</td>
                                    <td>religion</td>
                                    <td>city</td>
                                    
                       </tr>  
                          </thead>  
                          <?php
                          $q = "SELECT * FROM `other_info` WHERE `email` = '$email'";
                          $result = mysqli_query($con, $q);
                         if($result)
                          while($row =  mysqli_fetch_array($result))  
                          {  
                               echo '  
                               <tr>  
                                    <td>'.$row["email"].'</td>  
                                    <td>'.$row["gender"].'</td>  
                                    <td>'.$row["Telephone"].'</td>  
                                    <td>'.$row["date_of_joining"].'</td>  
                                    <td>'.$row["per_address"].'</td>
                                    <td>'.$row["religion"].'</td>
                                    <td>'.$row["city"].'</td>
                                   
                                </tr>  
                               ';  
                          }  
                          ?>  
                     </table>
                    
                    
                    
                </div>  
           </div>
             
      </section>
    </section>


  </section>

      <script>  
         $(document).ready(function(){  
              $('#personal_details').DataTable();  
         });  
      </script>    
    <?php include 'footer.php'; ?>
  </body>
</html>
