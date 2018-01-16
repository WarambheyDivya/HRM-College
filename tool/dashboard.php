
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
                <h3 >Qualification (Detailed)</h3>  
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
                <h3 >Experience</h3>  
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
                <h3 >Other Info</h3>  
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
