<?php
include('Controller/navbar.php');
?><br>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>

        .wrapper{
        float:left;
        border: 5px solid white;
        width: 57.9%;
        height: 481px;
        }
        .lnav{
             float: left;
            border: 2px ;
            width: 20.05%;
            height: 481px;

        }
        #top{
        
        border: 2px ;
        width: 96.35%;
        height: 10px;
        
      }
      .bottomleft {
            position: absolute;
            bottom: 8px;
            left: 16px;
            font-size: 18px;
            color: black;
        }
        .previous {
            background-color: #f1f1f1;
            color: black;
        }
        table tr td:last-child{
            width: 220px;
        }
    </style>
    <script>
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });
    </script>
</head>
<body>
    <div class="lnav">
    <?php
    include('Controller/leftnavbar.php');
    ?>
    </div>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="mt-5 mb-3 clearfix">
                        <h2 class="pull-left">Manage Vehicle Maintainance</h2>
                        <a href="maintaintablecreate.php" class="btn btn-info pull-right"><i class="fa fa-plus"></i> Add New Product</a>
                    </div>
                    <?php
                    // Include config file
                    require_once "config.php";

                    
                    
                    
                    // Attempt select query execution
                    $sql = "SELECT * FROM vehiclemaintain";
                    if($result = mysqli_query($link, $sql)){
                        if(mysqli_num_rows($result) > 0){
                            echo '<table class="table table-bordered table-striped">';
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th>No.</th>";
                                        echo "<th>Vehicle Type</th>";
                                        echo "<th>Product</th>";
                                        echo "<th>Price</th>";
                                        echo "<th>Action</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = mysqli_fetch_array($result)){
                                    echo "<tr>";
                                        echo "<td>" . $row['id'] . "</td>";
                                        echo "<td>" . $row['v_type'] . "</td>";
                                        echo "<td>" . $row['product'] . "</td>";
                                        echo "<td>" . $row['price'] . "</td>";
                                        echo "<td>";
                                            echo '<a href="maintaintableread.php?id='. $row['id'] .'" class="mr-3" title="View Record" data-toggle="tooltip"><span>View</span></a>';
                                            echo '<a href="maintaintableupdate.php?id='. $row['id'] .'" class="mr-3" title="Update Record" data-toggle="tooltip"><span>Edit</span></a>';
                                            echo '<a href="maintaintabledelete.php?id='. $row['id'] .'" title="Delete Record" data-toggle="tooltip"><span class="fa fa-trash"></span></a>';
                                        echo "</td>";
                                    echo "</tr>";
                                }
                                echo "</tbody>";                            
                            echo "</table>";
                            // Free result set
                            mysqli_free_result($result);
                        } else{
                            echo '<div class="alert alert-danger"><em>No records were found.</em></div>';
                        }
                    } else{
                        echo "Oops! Something went wrong. Please try again later.";
                    }
 
                    // Close connection
                    mysqli_close($link);
                    ?>
                </div>
            </div>        
        </div>
    </div>
    <div>
        <div class="bottomleft">
        <a href="admin.php" class="previous">&laquo; Previous</a>
        </div>
    </div>
</body>
</html>