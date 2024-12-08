<?php
session_start(); 
error_reporting(0);
include('includes/dbconnection.php');

if (!isset($_SESSION['sturecmsaid']) || strlen($_SESSION['sturecmsaid']) == 0)
 {
  header('location:logout.php');
  } 
else
{
   if(isset($_POST['submit']))
  { 
    $subname=$_POST['subname'];
    $stuclass=$_POST['stuclass'];
    $ret="select SubjectName from tblsubject where SubjectName=:subname AND StudentClass=:stuclass";
    $query= $dbh -> prepare($ret);
    $query->bindParam(':subname',$subname,PDO::PARAM_STR);
    $query->bindParam(':stuclass',$stuclass,PDO::PARAM_STR);
    $query-> execute();
    $results = $query -> fetchAll(PDO::FETCH_OBJ);
   if($query -> rowCount() == 0)
   {
    $sql="insert into tblsubject(SubjectName,StudentClass)values(:subname,:stuclass)";
    $query=$dbh->prepare($sql);
    $query->bindParam(':subname',$subname,PDO::PARAM_STR);
    $query->bindParam(':stuclass',$stuclass,PDO::PARAM_STR);
    $query->execute();
    $LastInsertId=$dbh->lastInsertId();
   if ($LastInsertId>0)
  {
    echo '<script>alert("Subject has been added.")</script>';
    echo "<script>window.location.href ='add-subjects.php'</script>";
    }
  else
    {
         echo '<script>alert("Something Went Wrong. Please try again")</script>';
    }
}
else
{ 
echo "<script>alert('SubjectName or Subject Id  already exist. Please try again');</script>";
}}

  ?>

     <?php include_once('includes/header.php');?>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
      <?php include_once('includes/sidebar.php');?>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Add Subjects </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                  <li class="breadcrumb-item active" aria-current="page"> Add Subjects</li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <form class="forms-sample row" method="post" enctype="multipart/form-data" >
                      <div class="form-group col-md-6">
                        <label for="exampleInputName1">Subject Name</label>
                        <input type="text" name="subname" value="" class="form-control" required='true'>
                      </div>
                      <div class="form-group col-md-6">
                        <label for="exampleInputEmail3">Student Class</label>
                        <select  name="stuclass" class="form-control" required='true'>
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
                      <button type="submit" class="btn btn-primary mr-2" name="submit">Add</button>
                     
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