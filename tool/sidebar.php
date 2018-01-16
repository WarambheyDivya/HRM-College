
      <!--header start-->
      <header class="header white-bg">
              <div class="sidebar-toggle-box">
                  <i class="fa fa-bars"></i>
              </div>
            <!--logo start-->
            <a href="index.php" class="logo">Hutatma Rajguru Mahavidyalaya, RajguruNagar</a>
            <img src="img/STES.jpg" height="60" width="130" align = "right">
            <!--logo end-->
        </header>
      <!--header end-->
      
      
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
                  <li>
                      <a class="active" href="dashboard.php">
                          <i class="fa fa-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a class="active" href="javascript:;" >
                          <i class="fa fa-laptop"></i>
                          <span>Add</span>
                      </a>
                      <ul class="sub">
                          <li class="<?php if($page == 'personal') {echo 'active';}; ?>"><a  href="1.php">Personal</a></li>
                          <li class="<?php if($page == 'qualification') {echo 'active';}; ?>"><a  href="2.php">Qualification</a></li>
                          <li class="<?php if($page == 'qualification2') {echo 'active';}; ?>"><a  href="3.php">Qualification(Detailed)</a></li>
                          <li class="<?php if($page == 'experience') {echo 'active';}; ?>"><a  href="4.php">Experience</a></li>
                          <li class="<?php if($page == 'other') {echo 'active';}; ?>"><a  href="5.php">Other Info</a></li>
                          <li class="<?php if($page == 'upload') {echo 'active';}; ?>"><a  href="6.php">Upload</a></li>
                      </ul>
                  </li>
                  
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-laptop"></i>
                          <span>Modify</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="add_attendance.php">Personal</a></li>
                          <li><a  href="add_attendance.php">Qualification</a></li>
                          <li><a  href="add_attendance.php">Qualification(Detailed)</a></li>
                          <li><a  href="add_attendance.php">Experience</a></li>
                          <li><a  href="add_attendance.php">Other Info</a></li>
                          <li><a  href="add_attendance.php">Upload</a></li>
                      </ul>
                  </li>
                  
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-laptop"></i>
                          <span>Delete</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="add_attendance.php">Personal</a></li>
                          <li><a  href="add_attendance.php">Qualification</a></li>
                          <li><a  href="add_attendance.php">Qualification(Detailed)</a></li>
                          <li><a  href="add_attendance.php">Experience</a></li>
                          <li><a  href="add_attendance.php">Other Info</a></li>
                          <li><a  href="add_attendance.php">Upload</a></li>
                      </ul>
                  </li>


              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
