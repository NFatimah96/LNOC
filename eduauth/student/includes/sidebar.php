<nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                <div class="profile-image">
                  <img class="img-xs rounded-circle" src="assets/images/faces/face8.jpg" alt="profile image">
                  <div class="dot-indicator bg-success"></div>
                </div>
                <div class="text-wrapper">
                                    <?php
        $aid= $_SESSION['sturecmsaid'];
$sql="SELECT * from tblstudent where ID=:aid";

$query = $dbh -> prepare($sql);
$query->bindParam(':aid',$aid,PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);

$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row)
{               ?>
                  <p class="profile-name"><?php  echo htmlentities($row->StudentName);?></p>
                  <p class="designation"><?php  echo htmlentities($row->StudentEmail);?></p> <?php $cnt=$cnt+1;}} ?>
                </div>
               
              </a>
            </li> 
            
            <li class="nav-item">
              <a class="nav-link" href="dashboard.php">
              <i class="icon-home menu-icon"></i>
                <span class="menu-title">Dashboard</span>

              </a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" href="manage-class.php">
                <i class="icon-layers menu-icon"></i>
                <span class="menu-title">Class</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="manage-students.php" >
                <i class="icon-people menu-icon"></i>
                <span class="menu-title">Subjects</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="view-assignment.php" >
                <i class="icon-people menu-icon"></i>
                <span class="menu-title">Assignments</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link"  href="manage-notice.php" >
                <i class="icon-doc menu-icon"></i>
                <span class="menu-title">Notice</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="manage-public-notice.php" >
                <i class="icon-doc menu-icon"></i>
                <span class="menu-title">Public Notice</span>
              </a>
            </li> 
            </li>
          </ul>
        </nav>