<?php
    include 'includes/pre_header.php';
    include 'includes/header.php';
    $StudentDetails = $FlatConn -> query("SELECT * FROM `student_tbl` order by `id` DESC");
    
  ?>

<section class="content">
        <div class="container-fluid">
            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                               Student Details
                              <div class="pull-right"><a href="add_student.php" class="btn btn-success">Add Student</a></div>
                            </h2>
                        </div>
                        <div class="body">
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                    <tr>
                                        <th>#ID</th>
                                        <th>Student name</th>
                                        <th>Mobile No</th>
                                        <th>Email ID</th>
                                        <th>Subject name</th>
                                        <th>Address</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                               
                                <tbody>
                                    <?php    
                                     $i = 1;
                                      while($Student = $StudentDetails -> fetch_assoc()){
                                    ?>
                                    <tr>
                                        <td><?=$i++?></td>
                                        <td><?=$Student['name']?></td>
                                        <td><?=$Student['mobile_no']?></td>
                                        <td><?=$Student['email_id']?></td>
                                        <td><?=$Student['subject']?></td>
                                        <td><?=$Student['address']?></td>
                                        <td><a href="edit_student.php?id=<?=$Student['id']?>">Edit</a> | <a href="delete_student.php?id=<?=$Student['id']?>">Delete</a></td>
                                    </tr>   
                                    <?php
                                      }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Examples -->
           
        </div>
    </section>

 <?php
    include 'includes/footer.php';
  ?>