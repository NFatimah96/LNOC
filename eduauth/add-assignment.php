
<!DOCTYPE html>
<html lang="en">
        <head>
                <link rel="stylesheet" type="text/css" href="assests/css/bootstrap.css"/>
                <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1">
        </head>
<body>

      <?php
      session_start();
      //error_reporting(0);
      include('includes/dbconnection.php');
      if (strlen($_SESSION['sturecmsaid']==0)) {
        header('location:logout.php');
        } else{
        
        ?>
        <!-- partial:partials/_navbar.html -->
        <?php include_once('includes/header.php');?>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <?php include_once('includes/sidebar.php');
          $sql1 ="SELECT * from  tblclass";
          $query1 = $dbh -> prepare($sql1);
          $query1->execute();
          $results1=$query1->fetchAll(PDO::FETCH_OBJ);
          $totclass=$query1->rowCount();
        ?>
  <!-- partial -->
  <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">Add Assignment </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                  <li class="breadcrumb-item active" aria-current="page"> Add Assignment</li>
                </ol>
              </nav>
            </div>
            <div class="row">
          
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title" style="text-align: center;">Add Assignment</h4>
                   
                    <form action="upload.php" class="forms-sample" method="post" enctype="multipart/form-data">
                      
                      <div class="form-group">
                        <label for="exampleInputName1">Assignment Title</label>
                        <input type="text" name="assigName" value="" class="form-control" required='true'>
                      </div>
                     
                      <div class="form-group">
                        <label for="exampleInputEmail3">Assignment For Class</label>
                        <select   name="stuclass" class="form-control" required='true'>
                          <option value="">Select Class</option>
                          <?php 
                            $sql2 = "SELECT * from    tblclass ";
                            $query2 = $dbh -> prepare($sql2);
                            $query2->execute();
                            $result2=$query2->fetchAll(PDO::FETCH_OBJ);

                            foreach($result2 as $row1)
                            {          
                                ?>  
                            <option value="<?php echo htmlentities($row1->ID);?>"><?php echo htmlentities($row1->ClassName);?> <?php echo htmlentities($row1->Section);?></option>
                            <?php } ?> 
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Message</label>
                        <textarea name="msg" value="" class="form-control"></textarea>
                      </div>
                      <input class="form-control" name="upload" type="file" name="upload"/>
                <br>
                      <button type="submit" class="btn btn-primary mr-2" name="submit">Upload</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
         <?php include_once('includes/footer.php');?>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->

    <?php }  ?>
</body>
</html>


