<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css"/>
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

    <?php
    session_start();
    include('includes/dbconnection.php');

    // Check if user is logged in
    if (strlen($_SESSION['sturecmsaid']) == 0) {
        header('location:logout.php');
        exit();
    }

    // Include header and sidebar
    include_once('includes/header.php'); ?>
    
    <div class="container-fluid page-body-wrapper">
        <?php include_once('includes/sidebar.php'); ?>

        <div class="main-panel">
            <div class="content-wrapper">
                <div class="page-header">
                    <h3 class="page-title">View Assignment</h3>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">View Assignment</li>
                        </ol>
                    </nav>
                </div>
                <div class="row">          
                    <div class="col-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title" style="text-align: center;">View Assignment</h4>      
                                <div class="table-responsive border rounded p-1">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th class="font-weight-bold">S.No</th>
                                                <th class="font-weight-bold">Name</th>
                                                <th class="font-weight-bold">Assignment</th>
                                                <th class="font-weight-bold">Class</th>
                                                <th class="font-weight-bold">Action</th>                            
                                            </tr>
                                        </thead>                                    
                                    <tbody class="">
                                        <?php
                                        // Fetch assignments
                                        $stmt = $dbh->prepare('SELECT * from file');
                                        $stmt->execute();
                                        while ($fetch = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                            $name = explode('/', $fetch['file']);
                                        ?> 
                                            <tr>
                                              <td><?php echo htmlspecialchars($fetch['file_id']); ?></td>
                                                <td><?php echo htmlspecialchars($fetch['name']); ?></td>
                                                <td><?php echo htmlspecialchars($fetch['Message']); ?></td>
                                                <td><?php  echo htmlentities($fetch->ClassName);?> <?php  echo htmlentities($fetch->Section);?></td>
                                                <td>
                                                    <a href="download.php?file=<?php echo htmlspecialchars($name[1]); ?>" class="btn btn-primary">
                                                        <span class="glyphicon glyphicon-download"></span> Download
                                                    </a>
                                                </td>
                                            </tr>
                                        <?php
                                        }
                                        ?>
                                    </tbody>
                                </table>
                                      </div>
                                </div>
                                <!-- Pagination -->
                                <nav aria-label="Page navigation">
                                    <ul class="pagination justify-content-center">
                                        <li class="page-item <?php if($pageno <= 1){ echo 'disabled'; } ?>">
                                            <a class="page-link" href="?pageno=1">First</a>
                                        </li>
                                        <li class="page-item <?php if($pageno <= 1){ echo 'disabled'; } ?>">
                                            <a class="page-link" href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>">Prev</a>
                                        </li>
                                        <li class="page-item <?php if($pageno >= $total_pages){ echo 'disabled'; } ?>">
                                            <a class="page-link" href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?>">Next</a>
                                        </li>
                                        <li class="page-item <?php if($pageno >= $total_pages){ echo 'disabled'; } ?>">
                                            <a class="page-link" href="?pageno=<?php echo $total_pages; ?>">Last</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Include footer -->
            <?php include_once('includes/footer.php'); ?>
        </div>
    </div>
</body>
</html>




