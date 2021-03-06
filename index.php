<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plants</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/6fa6ee6fa5.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="assets/style.css">

</head>
<body>
<div class="container mt-2">
        <h3 class="page-header text-center">Plants</h3>
        <hr>
        <div class="row">
            <div class=""col-sm-8 col-sm-offset-2">
                <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add_plants">Add New Plants</a>
                <br>
                <br>
                <?php 
                    session_start();
                    if(isset($_SESSION['message'])){
                        ?>
                        <div class="alert alert-danger " style="margin-top:10px;">
                            <?php echo $_SESSION['message']; ?>
                        </div>
                        <?php

                        unset($_SESSION['message']);
                    }
                ?>
                 <div class="card">
  <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Type id</th>
                            <th>Color</th>
                            <th>Price Range</th>
                            <th>Remarks</th>
                        </thead>
                        <tbody>
                        <?php
                            //include our connection
                            include_once('include/database.php');

                            $database = new Connection();
                            $db = $database->open();
                            try{	
                                $sql = 'SELECT * FROM plants ORDER BY name ASC';
                                $no = 0;
                                foreach ($db->query($sql) as $row) {
                                    $no++;
                        ?>
                                     <tr>
                                        <td><?php echo $no; ?></td>
                                        <td><?php echo $row['name']; ?></td>
                                        <td><?php echo $row['type_id']; ?></td>
                                        <td><?php echo $row['color']; ?></td>
                                        <td><?php echo $row['price_range']; ?></td>
                                        <td><?php echo $row['remarks']; ?></td>
                                        <td align="right">
                                            <a class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#edit_plants<?php echo $row['id']; ?>">Edit</a>
                                            <a class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#delete_plants<?php echo $row['id']; ?>">Delete</a>
                                        </td>
                                        <?php include('plants/view_delete_plants.php'); ?>
                                        <?php include('plants/view_edit_plants.php'); ?>
                                    </tr>
                        <?php 
                                }
                            }
                            catch(PDOException $e){
                                echo "There is some problem in connection: " . $e->getMessage();
                            }

                            //close connection
                            $database->close();

                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
        </div>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>    
<br>
<br>
<br>
<br>
<br>
<br>
<footer id="sticky-footer" class="flex-shrink-0 py-4 bg-dark text-white-50">
    <div class="container text-center">
      <small>Myko Diongson & Alnasib Munari</small>
    </div>
  </footer>
    <?php include('plants/view_add_plants.php'); ?>
    <?php include('plants/view_edit_plants.php'); ?>

<!-- JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>