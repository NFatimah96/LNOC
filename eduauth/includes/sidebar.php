<nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
           <!--  <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                <div class="profile-image">
                  <img class="img-xs rounded-circle" src="assets/images/faces/face8.jpg" alt="profile image">
                  <div class="dot-indicator bg-success"></div>
                </div>
                <div class="text-wrapper"> -->
                  <?php
        // $aid= $_SESSION['sturecmsaid'];
// $sql="SELECT * from tbladmin where ID=:aid";

// $query = $dbh -> prepare($sql);
// $query->bindParam(':aid',$aid,PDO::PARAM_STR);
// $query->execute();
// $results=$query->fetchAll(PDO::FETCH_OBJ);

// $cnt=1;
// if($query->rowCount() > 0)
// {
// foreach($results as $row)
// {               ?>
                 <!--  <p class="profile-name"><?php // echo htmlentities($row->AdminName);?></p>
                  <p class="designation"><?php  //echo htmlentities($row->Email);?></p> --><?php ///$cnt=$cnt+1;}} ?>
            <!--     </div>
               
              </a>
            </li> -->
            
            <li class="nav-item">
              <a class="nav-link" href="dashboard.php">
              <i class="icon-home menu-icon"></i>
                <span class="menu-title">Dashboard</span>

              </a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <i class="icon-layers menu-icon"></i>
                <span class="menu-title">Class</span>
              </a>
              <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="add-class.php">Add Class</a></li>
                  <li class="nav-item"> <a class="nav-link" href="manage-class.php">Manage Class</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#ui-basic1" aria-expanded="false" aria-controls="ui-basic1">
                <i class="icon-people menu-icon"></i>
                <span class="menu-title">Students</span>
              </a>
              <div class="collapse" id="ui-basic1">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="add-students.php">Add Students</a></li>
                  <li class="nav-item"> <a class="nav-link" href="manage-students.php">Manage Students</a></li>
                </ul>
              </div>
            </li>

            
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#ui-basic2" aria-expanded="false" aria-controls="ui-basic2">
                <i class="icon-people menu-icon"></i>
                <span class="menu-title">Teachers</span>
              </a>
              <div class="collapse" id="ui-basic2">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="add-teachers.php">Add Teachers</a></li>
                  <li class="nav-item"> <a class="nav-link" href="manage-teachers.php">Manage Teachers</a></li>
                </ul>
              </div>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#ui-basic3" aria-expanded="false" aria-controls="ui-basic3">
                <i class="icon-people menu-icon"></i>
                <span class="menu-title">Subjects</span>
              </a>
              <div class="collapse" id="ui-basic3">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="add-subjects.php">Add Subjects</a></li>
                  <li class="nav-item"> <a class="nav-link" href="manage-subjects.php">Manage Subjects</a></li>
                </ul>
              </div>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#ui-basic4" aria-expanded="false" aria-controls="ui-basic4">
                <i class="icon-people menu-icon"></i>
                <span class="menu-title">Assignment</span>
              </a>
              <div class="collapse" id="ui-basic4">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="add-assignment.php">Add Assignment</a></li>
                  <li class="nav-item"> <a class="nav-link" href="view-assignment.php">View Assignment</a></li>
                </ul>
              </div>
            </li>

            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                <i class="icon-doc menu-icon"></i>
                <span class="menu-title">Notice</span>
                
              </a>
              <div class="collapse" id="auth">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="add-notice.php"> Add Notice </a></li>
                  <li class="nav-item"> <a class="nav-link" href="manage-notice.php"> Manage Notice </a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#auth1" aria-expanded="false" aria-controls="auth">
                <i class="icon-doc menu-icon"></i>
                <span class="menu-title">Public Notice</span>
              </a>
              <div class="collapse" id="auth1">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="add-public-notice.php"> Add Public Notice </a></li>
                  <li class="nav-item"> <a class="nav-link" href="manage-public-notice.php"> Manage Public Notice </a></li>
                </ul>
              </div>
            <!--   <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#auth2" aria-expanded="false" aria-controls="auth">
               <i class="icon-docs menu-icon"></i>
                <span class="menu-title">Pages</span>
                
              </a>
              <div class="collapse" id="auth2">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="about-us.php"> About Us </a></li>
                  <li class="nav-item"> <a class="nav-link" href="contact-us.php"> Contact Us </a></li>
                </ul>
              </div>
            </li> -->
              <li class="nav-item">
              <a class="nav-link" href="between-dates-reports.php">
              <i class="icon-flag menu-icon"></i>
              <span class="menu-title">Reports</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="search.php">
                <i class="icon-magnifier menu-icon"></i>
                <span class="menu-title">Search</span>
              </a>
            </li>

             <!-- <li class="nav-item">
              <a class="nav-link" target="a_blank" href="https://mayurik.com/source-code/P0886/modern-student-management-system-project-in-php-and-mysql">
                <i class="icon-info menu-icon"></i>
                <span class="menu-title">Advance Version Info</span>
              </a>
            </li>
              <li class="nav-item">
              <a class="nav-link" target="a_blank" href="https://www.youtube.com/watch?v=EY8OO7hxEys&t">
                <i class="icon-eye menu-icon"></i>
                <span class="menu-title">Advance Video Demo</span>
              </a>
            </li> -->
            </li>
          </ul>
        </nav><!--  Orginal Author Name: Mayuri K. 
 for any PHP, Codeignitor, Laravel OR Python work contact me at mayuri.infospace@gmail.com  
 Visit website : www.mayurik.com -->  